<?php

namespace App\Http\Livewire\Admin;

use App\Models\Module;
use Livewire\Component;
use Livewire\WithPagination;

class Modules extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $pageSelected, $selected_id, $search, $name;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Modulos";
        $this->pageSelected = 5;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search)
            $modules = Module::orderBy('id', 'asc')
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->paginate($this->pageSelected);
        else
            $modules = Module::orderBy('id', 'asc')
                ->paginate($this->pageSelected);

        return view('livewire.admin.module.component', compact('modules'));
    }

    public function Edit(Module $module)
    {
        $this->name = $module->name;
        $this->selected_id = $module->id;

        $this->emit('show-modal', 'Show Modal!');
    }

    public function Store()
    {
        $rules = [
            'name' => 'required|min:3|unique:modules'
        ];

        $messages = [
            'name.required' => 'El nombre del modulo es requerido.',
            'name.min' => 'El nombre de tener mínimo 3 carácteres.',
            'name.unique' => 'El modulo ya esta registrado.'
        ];

        $this->validate($rules, $messages);

        Module::create([
            'name' => $this->name
        ]);

        $this->resetUI();
        $this->emit('module-added', 'Modulo Agregado');
    }

    public function Update()
    {
        $rules = [
            'name' => "required|min:3|unique:modules,name,{$this->selected_id}"
        ];

        $messages = [
            'name.required' => 'El nombre del modulo es requerido.',
            'name.min' => 'El nombre de tener mínimo 3 carácteres.',
            'name.unique' => 'El modulo ya esta registrado.'
        ];

        $this->validate($rules, $messages);

        $module = Module::find($this->selected_id);
        $module->update([
            'name' => $this->name
        ]);

        $this->resetUI();
        $this->emit('module-updated', 'Modulo Agregado');
    }

    protected $listeners = ['deleteRow' => 'Destroy'];

    public function Destroy(Module $module)
    {
        $module->delete();

        $this->resetUI();
        $this->emit('module-deleted', 'Modulo eliminado');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->selected_id = 0;
        $this->resetValidation();
    }

}
