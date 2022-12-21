<?php

namespace App\Http\Livewire\Operative;

use App\Models\Medical;
use Livewire\Component;

class EditMedical extends Component
{

    public $name, $lastname, $module, $session, $medical;

    public $hour_hd, $heparin, $dry_weight, $start_weight, $uf, $qb, $qd, $bicarbonat, $cnd, $start_na, $end_na, $start_pa, $profile_na, $profile_uf, $area_filter, $membrane, $clinical_trouble, $fc, $evaluation, $end_evaluation, $start_hour, $end_hour, $indications;

    public function mount($medical)
    {
        $this->name = $medical->patient->name;
        $this->lastname = $medical->patient->lastname;
        $this->module = $medical->module->name;
        $this->session = $medical->session->name;
    }

    public function render()
    {
        return view('livewire.operative.medical.edit-medical');
    }
}
