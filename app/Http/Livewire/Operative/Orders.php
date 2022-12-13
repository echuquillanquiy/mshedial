<?php

namespace App\Http\Livewire\Operative;

use App\Models\Module;
use App\Models\Order;
use App\Models\Patient;
use App\Models\Session;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $search, $pageSelected, $selected_id, $patientId, $moduleId, $sessionId, $covid, $dni = null, $name = null, $dateFilter, $moduleSelected, $sessionSelected;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Tratamientos Generados';
        $this->pageSelected = 25;
        $this->dateFilter = Carbon::now()->format('Y-m-d');
        $this->moduleId = 1;
        $this->sessionId = 1;
        $this->covid = 'NO';
    }

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $patients = Patient::all('id', 'name');
        $modules = Module::all('id', 'name');
        $sessions = Session::all('id', 'name');

        if ($this->search)
            $orders = Order::join('patients as pat', 'pat.id', 'orders.patient_id')
                ->select('orders.*', 'pat.lastname as apellidos', 'orders.created_at as fecha')
                ->whereDate('orders.created_at', 'LIKE', $this->dateFilter)
                ->where('pat.lastname', 'LIKE', '%' . $this->search . '%')
                ->orderBy('id', 'desc')
                ->paginate($this->pageSelected);
        else
            $orders = Order::whereDate('created_at', $this->dateFilter)
            ->orderBy('created_at', 'desc')
                ->paginate($this->pageSelected);


        return view('livewire.operative.orden.component', compact('orders', 'patients', 'modules', 'sessions'));
    }

    public function consultDni()
    {
        $patient = Patient::where('dni', 'LIKE', '%' . $this->dni . '%')->first();

        if ($patient)
        {
            $this->patientId = $patient->id;
            $this->name = $patient->name;
            $this->lastname = $patient->lastname;
        }else{
            return "no hay datos coincidentes";
        }

    }

    public function editDni()
    {
        $patient = Patient::where('dni', $this->dni)->first();

        $this->name = $patient->name;
        $this->lastname = $patient->lastname;
    }

    public function Store()
    {
        $rules = [
            'patientId' => 'required',
            'moduleId' => 'required',
            'sessionId' => 'required',
        ];

        $messages = [
            'patientId.required' => 'Por favor escriba un número Dni.',
            'moduleId.required' => 'El campo es requerido.',
            'sessionId.required' => 'El campo es requerido.',
        ];

        $this->validate($rules, $messages);

        $existsOrdersToday = Order::where('patient_id', $this->patientId)
            ->whereDate('created_at', date('Y-m-d'))->exists();

        if ($existsOrdersToday)
        {
            $this->emit('order-exists', 'El paciente ya tiene una orden generada.');
            $this->resetUI();
            return;
        }

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'patient_id' => $this->patientId,
            'module_id' => $this->moduleId,
            'session_id' => $this->sessionId,
            'covid' => $this->covid
        ]);

        $this->resetUI();
        $this->emit('order-added', 'Orden Registrada');
    }

    public function resetUI()
    {

    }
}
