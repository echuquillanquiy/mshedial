<?php

namespace App\Http\Livewire\Operative;

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
}
