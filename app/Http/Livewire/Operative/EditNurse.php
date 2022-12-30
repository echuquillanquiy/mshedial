<?php

namespace App\Http\Livewire\Operative;

use App\Models\Nurse;
use Livewire\Component;
use Livewire\WithPagination;

class EditNurse extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $lastname, $module, $session, $nurse;
    public $select_id, $hcl, $frequency, $nhd, $others, $start_pa, $end_pa, $start_weight, $end_weight, $machine, $brand_model, $position, $filter, $uf, $access_arterial, $access_venoso, $iron, $epo2000, $epo4000, $hidroxi, $calcitriol, $others_med, $end_observation, $aspect_dializer, $s, $o, $a, $p;

    public function mount($nurse)
    {
        $this->select_id = $nurse->id;
        $this->name = $nurse->patient->name;
        $this->lastname = $nurse->patient->lastname;
        $this->module = $nurse->module->name;
        $this->session = $nurse->session->name;

        $this->hcl = $nurse->hcl;
        $this->frequency = $nurse->frequency;
        $this->nhd = $nurse->nhd;
        $this->others = $nurse->others;
        $this->start_pa = $nurse->start_pa;
        $this->end_pa = $nurse->end_pa;
        $this->start_weight = $nurse->start_weight;
        $this->end_weight = $nurse->end_weight;
        $this->machine = $nurse->machine;
        $this->brand_model = $nurse->brand_model;
        $this->position = $nurse->position;
        $this->filter = $nurse->filter;
        $this->uf = $nurse->uf;
        $this->access_arterial = $nurse->access_arterial;
        $this->access_venoso = $nurse->access_venoso;
        $this->iron = $nurse->iron;
        $this->epo2000 = $nurse->epo2000;
        $this->epo4000 = $nurse->epo4000;
        $this->hidroxi = $nurse->hidroxi;
        $this->calcitriol = $nurse->calcitriol;
        $this->others_med = $nurse->others_med;
        $this->end_observation = $nurse->end_observation;
        $this->aspect_dializer = $nurse->aspect_dializer;
        $this->s = $nurse->s;
        $this->o = $nurse->o;
        $this->a = $nurse->a;
        $this->p = $nurse->p;
    }


    public function render()
    {
        return view('livewire.operative.nurse.edit-nurse');
    }

    public function Update()
    {
        $rules = [
           'hcl' => 'required',
           'frequency' => 'required',
           'nhd' => 'required',
           'others' => 'required',
           'start_pa' => 'required',
           'end_pa' => 'required',
           'start_weight' => 'required',
           'end_weight' => 'required',
           'machine' => 'required',
           'brand_model' => 'required',
           'position' => 'required',
           'filter' => 'required',
           'uf' => 'required',
           'access_arterial' => 'required',
           'access_venoso' => 'required',
           'iron' => 'required',
           'epo2000' => 'required',
           'epo4000' => 'required',
           'hidroxi' => 'required',
           'calcitriol' => 'required',
           'others_med' => 'required',
           'end_observation' => 'required',
           'aspect_dializer' => 'required',
           's' => 'required',
           'o' => 'required',
           'a' => 'required',
           'p' => 'required',
        ];

        $messages = [
            'hcl.required' => 'El campo es requerido.',
            'frequency.required' => 'El campo es requerido.',
            'nhd.required' => 'El campo es requerido.',
            'others.required' => 'El campo es requerido.',
            'start_pa.required' => 'El campo es requerido.',
            'end_pa.required' => 'El campo es requerido.',
            'start_weight.required' => 'El campo es requerido.',
            'end_weight.required' => 'El campo es requerido.',
            'machine.required' => 'El campo es requerido.',
            'brand_model.required' => 'El campo es requerido.',
            'position.required' => 'El campo es requerido.',
            'filter.required' => 'El campo es requerido.',
            'uf.required' => 'El campo es requerido.',
            'access_arterial.required' => 'El campo es requerido.',
            'access_venoso.required' => 'El campo es requerido.',
            'iron.required' => 'El campo es requerido.',
            'epo2000.required' => 'El campo es requerido.',
            'epo4000.required' => 'El campo es requerido.',
            'hidroxi.required' => 'El campo es requerido.',
            'calcitriol.required' => 'El campo es requerido.',
            'others_med.required' => 'El campo es requerido.',
            'end_observation.required' => 'El campo es requerido.',
            'aspect_dializer.required' => 'El campo es requerido.',
            's.required' => 'El campo es requerido.',
            'o.required' => 'El campo es requerido.',
            'a.required' => 'El campo es requerido.',
            'p.required' => 'El campo es requerido.',
        ];

        $this->validate($rules, $messages);

        $nurse = Nurse::find($this->select_id);

        $nurse->update([
            'hcl' => $this->hcl,
            'frequency' => $this->frequency,
            'nhd' => $this->nhd,
            'others' => $this->others,
            'start_pa' => $this->start_pa,
            'end_pa' => $this->end_pa,
            'start_weight' => $this->start_weight,
            'end_weight' => $this->end_weight,
            'machine' => $this->machine,
            'brand_model' => $this->brand_model,
            'position' => $this->position,
            'filter' => $this->filter,
            'uf' => $this->uf,
            'access_arterial' => $this->access_arterial,
            'access_venoso' => $this->access_venoso,
            'iron' => $this->iron,
            'epo2000' => $this->epo2000,
            'epo4000' => $this->epo4000,
            'hidroxi' => $this->hidroxi,
            'calcitriol' => $this->calcitriol,
            'others_med' => $this->others_med,
            'end_observation' => $this->end_observation,
            'aspect_dializer' => $this->aspect_dializer,
            's' => $this->s,
            'o' => $this->o,
            'a' => $this->a,
            'p' => $this->p,
        ]);

        $this->emit('nurse-updated', 'SE REALIZO EL CORRECTO GUARDADO DE DATOS');

    }
}
