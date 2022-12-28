<?php

namespace App\Http\Livewire\Operative;

use App\Models\Nurse;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Nurses extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $selected_id, $search, $dateFilter;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Enfermeria y Tratamiento';
        $this->pageSelected = 25;
        $this->dateFilter = Carbon::now()->format('Y-m-d');
    }

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search || $this->dateFilter)
            $nurses = Nurse::join('patients as pat', 'pat.id', 'nurses.patient_id')
                ->select('nurses.*', 'pat.lastname as apellidos', 'nurses.created_at as fecha')
                ->where('pat.lastname', 'LIKE', '%' . $this->search . '%')
                ->whereDate('nurses.created_at', $this->dateFilter)
                ->orderBy('id', 'desc')
                ->paginate($this->pageSelected);
        else
            $nurses = Nurse::whereDate('created_at', $this->dateFilter)
                ->orderBy('created_at', 'desc')
                ->paginate($this->pageSelected);


        return view('livewire.operative.nurse.component', compact('nurses'));
    }
}
