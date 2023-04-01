<?php

namespace App\Http\Livewire\Operative;

use App\Models\Medical;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Medicals extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $selected_id, $search, $dateFilter;

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Atenciones Medicas';
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
            $medicals = Medical::join('patients as pat', 'pat.id', 'medicals.patient_id')
                    ->select('medicals.*', 'pat.surname as apellidos', 'medicals.created_at as fecha')
                    ->where('pat.surname', 'LIKE', '%' . $this->search . '%')
                    ->whereDate('medicals.created_at', $this->dateFilter)
                    ->orderBy('id', 'desc')
                    ->paginate($this->pageSelected);
        else
            $medicals = Medical::whereDate('created_at', $this->dateFilter)
                ->orderBy('created_at', 'desc')
                ->paginate($this->pageSelected);

        return view('livewire.operative.medical.component', compact('medicals'));
    }
}
