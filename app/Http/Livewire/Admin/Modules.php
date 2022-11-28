<?php

namespace App\Http\Livewire\Admin;

use App\Models\Module;
use Livewire\Component;
use Livewire\WithPagination;

class Modules extends Component
{
    use WithPagination;

    public $pageTitle, $componentName;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Modulos";
        $this->pageSelected = 10;
    }

    public function render()
    {
        $modules = Module::paginate(10);

        return view('livewire.admin.module.component', compact('modules'));
    }


}
