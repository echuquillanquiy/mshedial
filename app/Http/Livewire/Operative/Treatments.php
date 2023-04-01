<?php

namespace App\Http\Livewire\Operative;

use App\Models\Treatment;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithPagination;
class Treatments extends Component
{
    use WithPagination;
    public $pageTitle, $componentName, $selected_id, $search, $dateFilter;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Atenciones Tratamientos';
        $this->pageSelected = 10;
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
            $treatments = Treatment::join('patients as pat', 'pat.id', 'treatments.patient_id')
                ->select('treatments.*', 'pat.surname as ape1', 'pat.lastname as ape2', 'pat.firstname as nom1', 'pat.secondname as nom2', 'treatments.created_at as fecha')
                ->where('pat.surname', 'LIKE', '%' . $this->search . '%')
                ->whereDate('treatments.created_at', $this->dateFilter)
                ->orderBy('created_at', 'desc')
                ->paginate($this->pageSelected);
        else
            $treatments = Treatment::whereDate('created_at', $this->dateFilter)
                ->orderBy('created_at', 'desc')
                ->paginate($this->pageSelected);

        return view('livewire.operative.treatment.component', compact('treatments'));
    }
}
