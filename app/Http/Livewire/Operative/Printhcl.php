<?php

namespace App\Http\Livewire\Operative;

use App\Models\Module;
use App\Models\Order;
use App\Models\Session;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class Printhcl extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $pageTitle, $componentName, $search, $pageSelected, $selected_id, $dateFilter;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->dateFilter = Carbon::now()->format('Y-m-d');
        $this->componentName = "Ordenes a imprimir";
        $this->pageSelected = 15;
    }

    public function render()
    {
        $modules = Module::all('id', 'name');
        $sessions = Session::all('id', 'name');

        if ($this->search || $this->dateFilter)
            $orders = Order::join('patients as pat', 'pat.id', 'orders.patient_id')
                ->select('orders.*', 'pat.surname as apellidos', 'orders.created_at as fecha')
                ->where('pat.surname', 'LIKE', '%' . $this->search . '%')
                ->whereDate('orders.created_at', $this->dateFilter)
                ->orderBy('id', 'desc')
                ->paginate($this->pageSelected);
        else
            $orders = Order::whereDate('created_at', $this->dateFilter)
                ->orderBy('created_at', 'desc')
                ->paginate($this->pageSelected);

        return view('livewire.operative.orden.printhcl', compact('orders', 'modules', 'sessions'));
    }

    public function downloadPdf(Order $order)
    {
        $pdf = PDF::loadView('livewire.operative.orden.historia', compact('order'));
        return $pdf->download('historia.pdf');
    }
}
