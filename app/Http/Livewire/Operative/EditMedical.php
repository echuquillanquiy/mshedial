<?php

namespace App\Http\Livewire\Operative;

use App\Models\Medical;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Monolog\Handler\IFTTTHandler;

class EditMedical extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $lastname, $module, $session, $medical;

    public $select_id, $hour_hd, $heparin, $user_id,$dry_weight, $start_weight, $uf, $qb, $qd, $bicarbonat, $cnd, $start_na, $end_na, $start_pa, $profile_na, $profile_uf, $area_filter, $membrane, $clinical_trouble, $fc, $evaluation, $end_evaluation, $start_hour, $end_hour, $indications, $signal, $calci, $so2;
    public $epo2000, $epo4000, $vitb12, $iron;

    public function mount($medical)
    {
        $idpaciente = $medical->patient_id;
        $fecha = Carbon::now();

        $medicamentos = $medical->where('patient_id', $idpaciente)->where(function ($query) use ($fecha) {
            $query->where('created_at', '!=', $fecha)
                ->orWhereNull('created_at');
        })->orderBy('created_at', 'desc')->value('dry_weight', 'epo2000', 'epo4000', 'vitb12', 'iron', 'calci');


        $this->select_id = $medical->id;
        $this->module = $medical->module->name;
        $this->session = $medical->session->name;

        $this->hour_hd = !$medical->hour_hd ? '3.5' : $medical->hour_hd;
        $this->heparin = !$medical->heparin ? '5000' : $medical->heparin;

        $this->dry_weight = $medicamentos ? $medical->dry_weight : 0;

        $this->epo2000 = $medicamentos ? $medical->epo2000 : 0;
        $this->epo4000 = $medicamentos ? $medical->epo4000 : 0;
        $this->vitb12 = $medicamentos ? $medical->vitb12 : 0;
        $this->iron = $medicamentos ? $medical->iron : 0;
        $this->calci = $medicamentos ? $medical->calci : 0;

        $this->start_weight = $medical->start_weight;
        $this->fc = !$medical->fc ? "" : $medical->fc;
        $this->so2 = !$medical->so2 ? "" : $medical->so2;
        $this->uf = $medical->uf;
        $this->qb = $medical->qb;
        $this->qd = !$medical->qd ? '500' : $medical->qd;
        $this->bicarbonat = !$medical->bicarbonat ? '3.5' : $medical->bicarbonat;
        $this->cnd = !$medical->cnd ? '13.8-14.0' : $medical->cnd;
        $this->start_na = !$medical->start_na ? '138-140' : $medical->start_na;
        $this->end_na = !$medical->end_na ? '138-140' : $medical->end_na;
        $this->start_pa = $medical->start_pa;
        $this->profile_na = !$medical->profile_na ? 'PERFIL L' : $medical->profile_na;
        $this->profile_uf = !$medical->profile_uf ? 'PERFIL L' : $medical->profile_uf;
        $this->area_filter = !$medical->area_filter ? '1.9' : $medical->area_filter;
        $this->membrane = !$medical->membrane ? 'PSF' : $medical->membrane;
        $this->clinical_trouble = !$medical->clinical_trouble ? 'ERC-5 HD' : $medical->clinical_trouble;
        $this->evaluation = !$medical->evaluation ? 'EDEMAS:(-) TYP:MV AUDIBLE NO RA' : $medical->evaluation;
        $this->end_evaluation = !$medical->end_evaluation ? 'SIN COMPLICACIONES' : $medical->end_evaluation;
        $this->start_hour = Carbon::now()->format('G:i');
        $this->end_hour = $medical->end_hour;
        $this->indications = $medical->indications;
        $this->signal = !$medical->signal ? 'ASINTOMATICO' : $medical->signal;
        $this->user_id = $medical->user_id;
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
            'so2' => 'required',
            'evaluation' => 'required',
            'end_evaluation' => 'required',
            'signal' => 'required',
        ];

        $messages = [
            'hour_hd.required' => 'Coloque las horas de hd.',
            'heparin.required' => 'Coloque el valor de heparina.',
            'dry_weight.required' => 'Coloque el peso seco.',
            'start_weight.required' => 'Coloque peso inicial.',
            'uf.required' => 'Coloque ultrafltrado.',
            'qb.required' => 'Coloque QB.',
            'qd.required' => 'Coloque QB.',
            'bicarbonat.required' => 'Coloque bicarbnato.',
            'cnd.required' => 'Coloque CND.',
            'start_na.required' => 'Coloque Sodio Inicial.',
            'end_na.required' => 'Coloque Sodio Final.',
            'start_pa.required' => 'Coloque Presion Inicial.',
            'profile_na.required' => 'Coloque Perfil NA.',
            'profile_uf.required' => 'Coloque Perfil UF.',
            'area_filter.required' => 'Coloque Area y Filtro.',
            'membrane.required' => 'Coloque Membrana.',
            'clinical_trouble.required' => 'Ingrese problemas Clinicos.',
            'fc.required' => 'Falta FC.',
            'so2.required' => 'Falta SO2.',
            'evaluation.required' => 'Es necesaria la Evaluacion.',
            'end_evaluation.required' => 'Rellle la evaluacion final.',
            'signal.required' => 'Coloque Signos y Sintomas.',
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
            'epo2000' => $this->epo2000,
            'epo4000' => $this->epo4000,
            'vitb12' => $this->vitb12,
            'iron' => $this->iron,
            'calci' => $this->calci,
            'so2' => $this->so2,
            'user_id' => auth()->user()->id
        ]);

        $this->emit('medical-updated', 'SE REALIZO EL CORRECTO GUARDADO DE DATOS');

    }


}
