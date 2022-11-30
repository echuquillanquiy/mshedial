<?php

namespace App\Http\Livewire\Admin;

use App\Models\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Sessions extends Component
{
    use WithPagination;

    public $pageTitle, $componentName, $pageSelected, $selected_id, $search, $name;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Turnos";
        $this->pageSelected = 5;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search)
            $sessions = Session ::orderBy('id', 'asc')
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->paginate($this->pageSelected);
        else
            $sessions = Session ::orderBy('id', 'asc')
                ->paginate($this->pageSelected);

        return view('livewire.admin.session.component', compact('sessions'));
    }

    public function Edit(Session $session)
    {
        $this->name = $session->name;
        $this->selected_id = $session->id;

        $this->emit('show-modal', 'Show Modal!');
    }

    public function Store()
    {
        $rules = [
            'name' => 'required|min:3|unique:sessions'
        ];

        $messages = [
            'name.required' => 'El nombre del modulo es requerido.',
            'name.min' => 'El nombre de tener mínimo 3 carácteres.',
            'name.unique' => 'El modulo ya esta registrado.'
        ];

        $this->validate($rules, $messages);

        Session ::create([
            'name' => $this->name
        ]);

        $this->resetUI();
        $this->emit('session-added', 'Turno Agregado');
    }

    public function Update()
    {
        $rules = [
            'name' => "required|min:3|unique:sessions,name,{$this->selected_id}"
        ];

        $messages = [
            'name.required' => 'El nombre del modulo es requerido.',
            'name.min' => 'El nombre de tener mínimo 3 carácteres.',
            'name.unique' => 'El modulo ya esta registrado.'
        ];

        $this->validate($rules, $messages);

        $session = Session ::find($this->selected_id);
        $session->update([
            'name' => $this->name
        ]);

        $this->resetUI();
        $this->emit('session-updated', 'Turno Agregado');
    }

    protected $listeners = ['deleteRow' => 'Destroy'];

    public function Destroy(Session $session)
    {
        $session->delete();

        $this->resetUI();
        $this->emit('session-deleted', 'Turno eliminado');
    }

    public function resetUI()
    {
        $this->name = '';
        $this->selected_id = 0;
        $this->resetValidation();
    }
}
