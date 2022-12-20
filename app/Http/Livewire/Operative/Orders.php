<?php

namespace App\Http\Livewire\Operative;

use App\Models\Medical;
use App\Models\Module;
use App\Models\Nurse;
use App\Models\Order;
use App\Models\Patient;
use App\Models\Session;
use App\Models\Treatment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $search, $pageSelected, $selected_id, $patientId, $moduleId, $sessionId, $covid, $dni = null, $name = null, $dateFilter, $moduleSelected, $sessionSelected, $created_at;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Tratamientos Generados';
        $this->pageSelected = 25;
        $this->dateFilter = Carbon::now()->format('Y-m-d');
        $this->created_at = Carbon::now()->format('Y-m-d');
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

        if ($this->search || $this->dateFilter)
            $orders = Order::join('patients as pat', 'pat.id', 'orders.patient_id')
                ->select('orders.*', 'pat.lastname as apellidos', 'orders.created_at as fecha')
                ->where('pat.lastname', 'LIKE', '%' . $this->search . '%')
                ->whereDate('orders.created_at', $this->dateFilter)
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
        $patient = Patient::where('dni', 'LIKE', '%' . $this->dni . '%')
            ->where('status', 'ACTIVE')
            ->first();

        if ($patient)
        {
            $this->patientId = $patient->id;
            $this->name = $patient->name;
            $this->lastname = $patient->lastname;
        }else{
            $this->emit('show-patient-inactive', 'no hay datos coincidentes o el paciente esta inactivo');
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
            'covid' => $this->covid,
            'created_at' => $this->created_at
        ]);

        $data = [
            'order_id' => $order->id,
            'patient_id' => $order->patient_id,
            'module_id' => $order->module_id,
            'session_id' => $order->session_id
        ];

        $nurse = $order->nurse()->create($data);
        $medical = $order->medical()->create($data);
        $treatment = $order->treatment()->create($data);

        $this->resetUI();
        $this->emit('order-added', 'Orden Registrada');
    }

    public function Edit(Order $order)
    {
        $this->patientId = $order->patient_id;
        $this->dni = $order->patient->dni;
        $this->moduleId = $order->module_id;
        $this->sessionId = $order->session_id;
        $this->selected_id = $order->id;

        $this->emit('show-modal', 'Show Modal!');
    }

    public function Update()
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

        $order = Order::find($this->selected_id);

        $order->update([
            'patient_id' => $this->patientId,
            'module_id' => $this->moduleId,
            'session_id' => $this->sessionId,
            'covid' => $this->covid,
            'created_at' => $this->created_at
        ]);

        $data = [
            'module_id' => $order->module_id,
            'session_id' => $order->session_id,
            'created_at' => $this->created_at
        ];

        $medical = $order->medical()->update($data);
        $nurse = $order->nurse()->update($data);
        $treatment = $order->treatment()->update($data);

        $this->resetUI();
        $this->emit('order-updated', 'Orden Actualizada');
    }

    public function resetUI()
    {
        $this->patientId = null;
        $this->dni = '';
        $this->name = '';
        $this->lastname = '';
        $this->moduleId = 1;
        $this->sessionId = 1;
        $this->covid = 'NO';
        $this->selected_id = null;
        $this->search = '';
        $this->resetValidation();
    }

    protected $listeners = [
        'deleteRow' => 'Destroy'
    ];

    public function Destroy(Order $order)
    {
        if ($order)
        {
            $medicals = Medical::where('order_id', $order->id)->count();
            $nurses = Nurse::where('order_id', $order->id)->count();
            $treatments = Treatment::where('order_id', $order->id)->count();

            if ($medicals > 0 || $nurses > 0 || $treatments > 0)
            {
                $this->emit('mnt-withorders', 'No se puede eliminar, esta orden tiene servicios generados.');
            } else {
                $order->medical()->delete();
                $order->nurse()->delete();
                $order->treatment()->delete();
                $order->delete();

                $this->resetUI();
                $this->emit('order-deleted', 'Orden eliminada');
            }
        }


    }
}
