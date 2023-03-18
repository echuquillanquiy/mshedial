<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Livewire\WithFileUploads;


class Users extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $pageTitle, $componentName, $search, $pageSelected, $selected_id, $name, $email, $status, $password, $profile, $place, $sign, $username;

    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Usuarios';
        $this->pageSelected = 10;
        $this->status = 'Elegir';
        $this->place = 'Elegir';
    }

    public function render()
    {
        if ($this->search)
            $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                ->select('*')->orderBy('name', 'asc')->paginate($this->pageSelected);
        else
            $users = User::select('*')->orderBy('name', 'asc')->paginate($this->pageSelected);

        $roles = Role::orderBy('name', 'asc')->get();

        return view('livewire.admin.users.component', compact('users', 'roles'));
    }

    public function resetUI()
    {
        $this->name = '';
        $this->username='';
        $this->email = '';
        $this->password = '';
        $this->search = '';
        $this->status = 'Elegir';
        $this->selected_id = 0;
        $this->place = 'Elegir';
        $this->sign = null;
        $this->resetValidation();
    }

    public function Edit(User $user)
    {
        $this->selected_id = $user->id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->profile = $user->profile;
        $this->status = $user->status;
        $this->place = $user->place;
        $this->sign = $user->sign;
        $this->password = '';

        $this->emit('show-modal', 'Show Modal!');
    }

    protected $listeners = [
        'deleteRow' => 'Destroy',
        'resetUI' => 'resetUI'
    ];

    public function Store()
    {
        $rules = [
            'name' => 'required|min:3',
            'username' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'status' => 'required|not_in:Elegir',
            'profile' => 'required|not_in:Elegir',
            'password' => 'required|min:3'
        ];

        $messages = [
            'name.required' => 'Ingresa los nombres y apellidos.',
            'name.min' => 'Los nombres debe tener al menos 3 caracteres.',
            'username.required' => 'Ingresa el nombre de usuario.',
            'username.min' => 'El nombre de usuario debe tener al menos 3 caracteres.',
            'email.required' => 'Ingrese el válido.',
            'email.email' => 'Ingrese un correo válido.',
            'email.unique' => 'El correo ya existe en el sistema.',
            'status.required' => 'Selecciona el estado para el usuario.',
            'profile.required' => 'Seleccione el perfil /role del usuario.',
            'password.required' => 'Ingresa una contraseña.',
            'password.min' => 'el password debe tener minimo 3 caracteres.',
            'status.not_in' => 'Selecciona un estado distinto a Elegir.',
            'profile.not_in' => 'Selecciona un perfil/role distinto a Elegir.',
        ];

        $this->validate($rules, $messages);

        $user = User::create([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'status' => $this->status,
            'profile' => $this->profile,
            'place' => $this->place,
            'password' => bcrypt($this->password)
        ]);

        if ($this->sign)
        {
            $customFileName = uniqid() . '_.' . $this->sign->extension();
            $this->sign->storeAs('public/firma_especialistas', $customFileName);
            $user->sign = $customFileName;
            $user->save();
        }

        $user->syncRoles($this->profile);

        $this->resetUI();
        $this->emit('user-added', 'Usuario Registrado');
    }

    public function Update()
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => "required|email|unique:users,email,{$this->selected_id}",
            'status' => 'required|not_in:Elegir',
            'profile' => 'required|not_in:Elegir',
            'password' => 'min:3'
        ];

        $messages = [
            'name.required' => 'Ingresa el nombre.',
            'name.min' => 'El nombre del usuario debe tener al menos 3 caracteres.',
            'email.required' => 'Ingrese el válido.',
            'email.email' => 'Ingrese un correo válido.',
            'email.unique' => 'El correo ya existe en el sistema.',
            'status.required' => 'Selecciona el estado para el usuario.',
            'profile.required' => 'Seleccione el perfil /role del usuario.',
            'status.not_in' => 'Selecciona un estado distinto a Elegir.',
            'profile.not_in' => 'Selecciona un perfil/role distinto a Elegir.',
        ];

        $this->validate($rules, $messages);

        $user = User::find($this->selected_id);

        if ($this->password)
            $user->update([
                'name' => $this->name,
                'username' => $this->username,
                'email' => $this->email,
                'status' => $this->status,
                'profile' => $this->profile,
                'place' => $this->place,
                'password' => bcrypt($this->password)
            ]);
        else
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'status' => $this->status,
                'profile' => $this->profile,
                'place' => $this->place,
            ]);

        if ($this->sign)
        {
            $customFileName = uniqid() . '_.' . $this->sign->extension();
            $this->sign->storeAs('public/firma_especialistas', $customFileName);
            $imageName = $user->image;

            $user->sign = $customFileName;
            $user->save();

            if ($imageName != null)
            {
                if (file_exists('storage/firma_especialistas/' . $imageName))
                {
                    unlink('storage/firma_especialistas/' . $imageName);
                }
            }
        }

        $user->syncRoles($this->profile);

        $this->resetUI();
        $this->emit('user-updated', 'Usuario Actualizado');
    }

    public function Destroy(User $user)
    {
        if ($user) {
            $orders = Order::where('user_id', $user->id)->count();
            if ($orders > 0) {
                $this->emit('user-withorders', 'No es posible eliminar el usuario por que tiene ordenes registradas');
            }else {
                $user->delete();
                $this->resetUI();
                $this->emit('user-deleted', 'Usuarios Eliminado!.');
            }
        }
    }
}
