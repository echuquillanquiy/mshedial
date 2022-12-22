<?php

namespace App\Http\Livewire\Operative;

use App\Models\Medical;
use Carbon\Carbon;
use http\Env\Request;
use Livewire\Component;
use Livewire\WithPagination;

class EditMedical extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $name, $lastname, $module, $session, $medical;

    public $select_id, $hour_hd, $heparin, $dry_weight, $start_weight, $uf, $qb, $qd, $bicarbonat, $cnd, $start_na, $end_na, $start_pa, $profile_na, $profile_uf, $area_filter, $membrane, $clinical_trouble, $fc, $evaluation, $end_evaluation, $start_hour, $end_hour, $indications, $signal;

    public function mount($medical)
    {
        $this->select_id = $medical->id;
        $this->name = $medical->patient->name;
        $this->lastname = $medical->patient->lastname;
        $this->module = $medical->module->name;
        $this->session = $medical->session->name;

        $this->hour_hd = $medical->hour_hd;
        $this->heparin = $medical->heparin;
        $this->dry_weight = $medical->dry_weight;
        $this->start_weight = $medical->start_weight;
        $this->uf = $medical->uf;
        $this->qb = $medical->qb;
        $this->qd = $medical->qd;
        $this->bicarbonat = $medical->bicarbonat;
        $this->cnd = $medical->cnd;
        $this->start_na = $medical->start_na;
        $this->end_na = $medical->end_na;
        $this->start_pa = $medical->start_pa;
        $this->profile_na = $medical->profile_na;
        $this->profile_uf = $medical->profile_uf;
        $this->area_filter = $medical->area_filter;
        $this->membrane = $medical->membrane;
        $this->clinical_trouble = $medical->clinical_trouble;
        $this->fc = $medical->fc;
        $this->evaluation = $medical->evaluation;
        $this->end_evaluation = $medical->end_evaluation;
        $this->start_hour = $medical->start_hour;
        $this->end_hour = $medical->end_hour;
        $this->indications = $medical->indications;
        $this->signal = $medical->signal;


    }

    public function render()
    {
        return view('livewire.operative.medical.edit-medical');
    }

    public function Update()
    {
        $rules = [
            'hour_hd' => 'required',
            'heparin' => 'required',
            'dry_weight' => 'required',
            'start_weight' => 'required',
            'uf' => 'required',
            'qb' => 'required',
            'qd' => 'required',
            'bicarbonat' => 'required',
            'cnd' => 'required',
            'start_na' => 'required',
            'end_na' => 'required',
            'start_pa' => 'required',
            'profile_na' => 'required',
            'profile_uf' => 'required',
            'area_filter' => 'required',
            'membrane' => 'required',
            'clinical_trouble' => 'required',
            'fc' => 'required',
            'evaluation' => 'required',
            'end_evaluation' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'indications' => 'required',
            'signal' => 'required',
        ];

        $messages = [
            'hour_hd.required' => 'El campo hour_hd es requerido',
            'heparin.required' => 'El campo heparin es requerido',
            'dry_weight.required' => 'El campo dry_weight es requerido',
            'start_weight.required' => 'El campo start_weight es requerido',
            'uf.required' => 'El campo uf es requerido',
            'qb.required' => 'El campo qb es requerido',
            'qd.required' => 'El campo qd es requerido',
            'bicarbonat.required' => 'El campo bicarbonat es requerido',
            'cnd.required' => 'El campo cnd es requerido',
            'start_na.required' => 'El campo start_na es requerido',
            'end_na.required' => 'El campo end_na es requerido',
            'start_pa.required' => 'El campo start_pa es requerido',
            'profile_na.required' => 'El campo profile_na es requerido',
            'profile_uf.required' => 'El campo profile_uf es requerido',
            'area_filter.required' => 'El campo area_filter es requerido',
            'membrane.required' => 'El campo membrane es requerido',
            'clinical_trouble.required' => 'El campo clinical_trouble es requerido',
            'fc.required' => 'El campo fc es requerido',
            'evaluation.required' => 'El campo evaluation es requerido',
            'end_evaluation.required' => 'El campo end_evaluation es requerido',
            'start_hour.required' => 'El campo start_hour es requerido',
            'end_hour.required' => 'El campo end_hour es requerido',
            'indications.required' => 'El campo indications es requerido',
            'signal.required' => 'El campo signal es requerido',
        ];

        $this->validate($rules, $messages);

        $medical = Medical::find($this->select_id);

        $medical->update([
            'hour_hd' => $this->hour_hd,
            'heparin' => $this->heparin,
            'dry_weight' => $this->dry_weight,
            'start_weight' => $this->start_weight,
            'uf' => $this->uf,
            'qb' => $this->qb,
            'qd' => $this->qd,
            'bicarbonat' => $this->bicarbonat,
            'cnd' => $this->cnd,
            'start_na' => $this->start_na,
            'end_na' => $this->end_na,
            'start_pa' => $this->start_pa,
            'profile_na' => $this->profile_na,
            'profile_uf' => $this->profile_uf,
            'area_filter' => $this->area_filter,
            'membrane' => $this->membrane,
            'clinical_trouble' => $this->clinical_trouble,
            'fc' => $this->fc,
            'evaluation' => $this->evaluation,
            'end_evaluation' => $this->end_evaluation,
            'start_hour' => $this->start_hour,
            'end_hour' => $this->end_hour,
            'indications' => $this->indications,
            'signal' => $this->signal,
        ]);

        $this->resetUI();
        $this->emit('medical-updated', 'Atencion Actualizada');

    }

    public function resetUI()
    {

    }

}
