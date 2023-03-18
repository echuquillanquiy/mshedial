<?php

namespace App\Http\Livewire\Admin;

use App\Models\Patient;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class Patients extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $pageTitle, $componentName, $search, $pageSelected, $selected_id, $dni, $firstname, $secondname, $surname, $lastname, $birthday, $sex, $age, $address, $phone, $civil_state, $education, $condition, $last_work, $code, $status, $sign, $fingerprint;
    protected $paginationTheme = 'bootstrap';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount()
    {
        $this->pageTitle = "Listado";
        $this->componentName = "Pacientes";
        $this->pageSelected = 10;
        $this->calcEdad();
    }

    public function render()
    {
        if ($this->search)
            $patients = Patient::orderBy('id', 'asc')
                ->where('name', 'LIKE', '%' . $this->search . '%')
                ->paginate($this->pageSelected);
        else
            $patients = Patient::orderBy('id', 'asc')
                ->paginate($this->pageSelected);

        return view('livewire.admin.patient.component', compact('patients'));
    }

    public function calcEdad()
    {
        $this->now = Carbon::now();
        $this->age = Carbon::parse($this->birthday)->diffInYears($this->now, $this->birthday);
    }

    public function filiation()
    {
        if ($this->dni)
        {
            $this->code = '2-' . $this->dni;
        }
        else
        {
            $this->code = '';
        }
    }

    public function Edit(Patient $patient)
    {
        $this->dni = $patient->dni;
        $this->firstname = $patient->firstname;
        $this->secondname = $patient->secondname;
        $this->surname = $patient->surname;
        $this->lastname = $patient->lastname;
        $this->birthday = $patient->birthday;
        $this->sex = $patient->sex;
        $this->age = $patient->age;
        $this->address = $patient->address;
        $this->phone = $patient->phone;
        $this->civil_state = $patient->civil_state;
        $this->education = $patient->education;
        $this->condition = $patient->condition;
        $this->last_work = $patient->last_work;
        $this->code = $patient->code;
        $this->status = $patient->status;
        $this->sign = $patient->sign;
        $this->fingerprint = $patient->fingerprint;
        $this->selected_id = $patient->id;

        $this->emit('show-modal', 'Show Modal');
    }

    public function Store()
    {
        $rules = [
            'dni' => 'required|min:8|unique:patients',
            'firstname' => 'required|min:3',
            'secondname' => 'required|min:3',
            'surname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'birthday' => 'required',
            'age' => 'min:1',
            'address' => 'min:5',
            'phone' => 'min:9',
            'condition' => 'min:5',
            'code' => 'min:10',
        ];

        $messages = [
            'dni.required' => 'El # DNI es requerido.',
            'dni.min' => 'El dni debe tener mínimo 8 digítos.',
            'dni.unique' => 'El DNI ya esta registrado.',
            'firstname.required' => 'Los nombres son obligatorios.',
            'firstname.min' => 'Los nombres deben tener minimo 3 carácteres.',
            'secondname.required' => 'Los nombres son obligatorios.',
            'secondname.min' => 'Los nombres deben tener minimo 3 carácteres.',
            'surname.required' => 'Los nombres son obligatorios.',
            'surname.min' => 'Los nombres deben tener minimo 3 carácteres.',
            'lastname.required' => 'Los apellidos son obligatorios.',
            'lastname.min' => 'Los apellidos debe tener minimo 3 carácteres.',
            'birthday.required' => 'la fecha de nacimiento es obligatoria.',
            'age.min' => 'La edad debe tener 1 digito como minimo.',
            'address.min' => 'La direccion debe tener minimo 5 carácteres.',
            'phone.min' => 'El telefono debe tener minimo 9 carácteres.',
            'condition.min' => 'La condicion debe tener minimo 5 carácteres.',
            'code.min' => 'El autogenerado debe tener minimo 15 caracteres.'
        ];

        $this->validate($rules, $messages);

        $patient = Patient::create([
            'dni' => $this->dni,
            'firstname' => $this->firstname,
            'secondname' => $this->secondname,
            'surname' => $this->surname,
            'lastname' => $this->lastname,
            'birthday' => $this->birthday,
            'sex' => $this->sex,
            'age' => $this->age,
            'address' => $this->address,
            'phone' => $this->phone,
            'civil_state' => $this->civil_state,
            'education' => $this->education,
            'condition' => $this->condition,
            'last_work' => $this->last_work,
            'code' => '2-' . $this->dni,
        ]);

        if ($this->sign)
        {
            $customFileName = uniqid() . '_.' . $this->sign->extension();
            $this->sign->storeAs('public/firma_paciente', $customFileName);
            $patient->sign = $customFileName;
            $patient->save();
        }

        if ($this->fingerprint)
        {
            $customFileName = uniqid() . '_.' . $this->fingerprint->extension();
            $this->fingerprint->storeAs('public/huella_paciente', $customFileName);
            $patient->fingerprint = $customFileName;
            $patient->save();
        }


        $this->resetUI();
        $this->emit('patient-added', 'Paciente registrado');
    }

    public function Update()
    {
        $rules = [
            'dni' => "required|min:8|unique:patients,dni,{$this->selected_id}",
            'firstname' => 'required|min:3',
            'secondname' => 'required|min:3',
            'surname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'birthday' => 'required',
            'age' => 'min:1',
            'address' => 'min:5',
            'phone' => 'min:9',
            'condition' => 'min:5',
            'code' => 'min:10',
        ];

        $messages = [
            'dni.required' => 'El # DNI es requerido.',
            'dni.min' => 'El dni debe tener mínimo 8 digítos.',
            'dni.unique' => 'El DNI ya esta registrado.',
            'firstname.required' => 'Los nombres son obligatorios.',
            'firstname.min' => 'Los nombres deben tener minimo 3 carácteres.',
            'secondname.required' => 'Los nombres son obligatorios.',
            'secondname.min' => 'Los nombres deben tener minimo 3 carácteres.',
            'surname.required' => 'Los nombres son obligatorios.',
            'surname.min' => 'Los nombres deben tener minimo 3 carácteres.',
            'lastname.required' => 'Los apellidos son obligatorios.',
            'lastname.min' => 'Los apellidos debe tener minimo 3 carácteres.',
            'birthday.required' => 'la fecha de nacimiento es obligatoria.',
            'age.min' => 'La edad debe tener 1 digito como minimo.',
            'address.min' => 'La direccion debe tener minimo 5 carácteres.',
            'phone.min' => 'El telefono debe tener minimo 9 carácteres.',
            'condition.min' => 'La condicion debe tener minimo 5 carácteres.',
            'code.min' => 'El autogenerado debe tener minimo 15 caracteres.'
        ];

        $this->validate($rules, $messages);

        $patient = Patient::find($this->selected_id);

        $patient->update([
            'dni' => $this->dni,
            'firstname' => $this->firstname,
            'secondname' => $this->secondname,
            'surname' => $this->surname,
            'lastname' => $this->lastname,
            'birthday' => $this->birthday,
            'sex' => $this->sex,
            'age' => $this->age,
            'address' => $this->address,
            'phone' => $this->phone,
            'civil_state' => $this->civil_state,
            'education' => $this->education,
            'condition' => $this->condition,
            'last_work' => $this->last_work,
            'code' => $this->code,
            'status' => $this->status,
        ]);

        if ($this->sign)
        {
            $customFileName = uniqid() . '_.' . $this->sign->extension();
            $this->sign->storeAs('public/firma_paciente', $customFileName);
            $imageName = $patient->sign;

            $patient->sign = $customFileName;
            $patient->save();

            if ($imageName != null)
            {
                if (file_exists('storage/firma_paciente/' . $imageName))
                {
                    unlink('storage/firma_paciente/' . $imageName);
                }
            }
        }

        if ($this->fingerprint)
        {
            $customFileName2 = uniqid() . '_.' . $this->fingerprint->extension();
            $this->fingerprint->storeAs('public/huella_paciente', $customFileName2);
            $imageName2 = $patient->fingerprint;

            $patient->fingerprint = $customFileName2;
            $patient->save();

            if ($imageName2 != null)
            {
                if (file_exists('storage/huella_paciente/' . $imageName2))
                {
                    unlink('storage/huella_paciente/' . $imageName2);
                }
            }
        }



        $this->resetUI();
        $this->emit('patient-updated', 'Paciente Actualizado');
    }

    public function resetUI()
    {
        $this->dni = '';
        $this->name = '';
        $this->lastname = '';
        $this->birthday = '';
        $this->sex = '';
        $this->age = 0;
        $this->address = '';
        $this->phone = '';
        $this->civil_state = 'Elegir';
        $this->education = 'Elegir';
        $this->ocupation = '';
        $this->condition = '';
        $this->last_work = '';
        $this->origin = '';
        $this->code = '';
        $this->status = 'ACTIVE';
        $this->selected_id = 0;
        $this->resetValidation();
    }

    protected $listeners = ['deleteRow' => 'Destroy'];

    public function Destroy(Patient $patient)
    {
        $patient->delete();

        $this->resetUI();
        $this->emit('patient-deleted', 'Paciente eliminado');
    }
}
