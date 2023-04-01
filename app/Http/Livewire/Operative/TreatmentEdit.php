<?php

namespace App\Http\Livewire\Operative;

use App\Models\Treatment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class TreatmentEdit extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $select_id, $surname, $lastname, $module, $session, $treatment, $firstname, $secondname;
    public $hr, $pa, $freq, $qb, $cnd, $ra, $rv, $ptm, $sol_hemodev, $obs;
    public $hr2, $pa2, $freq2, $qb2, $cnd2, $ra2, $rv2, $ptm2, $sol_hemodev2, $obs2;
    public $hr3, $pa3, $freq3, $qb3, $cnd3, $ra3, $rv3, $ptm3, $sol_hemodev3, $obs3;
    public $hr4, $pa4, $freq4, $qb4, $cnd4, $ra4, $rv4, $ptm4, $sol_hemodev4, $obs4;
    public $hr5, $pa5, $freq5, $qb5, $cnd5, $ra5, $rv5, $ptm5, $sol_hemodev5, $obs5;
    public $hr6, $pa6, $freq6, $qb6, $cnd6, $ra6, $rv6, $ptm6, $sol_hemodev6, $obs6;
    public $hr7, $pa7, $freq7, $qb7, $cnd7, $ra7, $rv7, $ptm7, $sol_hemodev7, $obs7;
    public $hr8, $pa8, $freq8, $qb8, $cnd8, $ra8, $rv8, $ptm8, $sol_hemodev8, $obs8;
    public $user_id;

    public function mount($treatment)
    {
        $this->select_id = $treatment->id;
        $this->surname = $treatment->patient->surname;
        $this->lastname = $treatment->patient->lastname;
        $this->firstname = $treatment->patient->firstname;
        $this->secondname = $treatment->patient->secondname;
        $this->module = $treatment->module->name;
        $this->session = $treatment->session->name;

        $this->hr2 = !$treatment->hr2 ? Carbon::parse($this->hr)->addMinutes(30)->format('H:i') : $treatment->hr2;
        $this->hr3 = !$treatment->hr3 ? Carbon::parse($this->hr2)->addMinutes(30)->format('H:i') : $treatment->hr3;
        $this->hr4 = !$treatment->hr4 ? Carbon::parse($this->hr3)->addMinutes(30)->format('H:i') : $treatment->hr4;
        $this->hr5 = !$treatment->hr5 ? Carbon::parse($this->hr4)->addMinutes(30)->format('H:i') : $treatment->hr5;
        $this->hr6 = !$treatment->hr6 ? Carbon::parse($this->hr5)->addMinutes(30)->format('H:i') : $treatment->hr6;
        $this->hr7 = !$treatment->hr7 ? Carbon::parse($this->hr6)->addMinutes(30)->format('H:i') : $treatment->hr7;

        if ($treatment->order->medical->hour_hd == '3')
        {
            $this->hr8 = "";
        }
        elseif ($treatment->order->medical->hour_hd == '3.25')
        {
            $this->hr8 = !$treatment->hr8 ? Carbon::parse($this->hr7)->addMinutes(15)->format('H:i') : $treatment->hr8;
        }
        elseif ($treatment->order->medical->hour_hd == '3.5')
        {
            $this->hr8 = !$treatment->hr8 ? Carbon::parse($this->hr7)->addMinutes(30)->format('H:i') : $treatment->hr8;
        }
        else {
            $this->hr8 = !$treatment->hr8 ? Carbon::parse($this->hr7)->addMinutes(45)->format('H:i') : $treatment->hr8;
        }

        /*Mostrando datos*/
        $this->hr = !$treatment->hr ? Carbon::now()->format('H:i') : $treatment->hr;
        $this->pa = !$treatment->pa ? $treatment->order->medical->start_pa : $treatment->pa;
        $this->freq = !$treatment->freq ? $treatment->order->medical->fc : $treatment->freq;
        $this->qb = !$treatment->qb ? '' : $treatment->qb;
        $this->cnd = !$treatment->cnd ? '' : $treatment->cnd;
        $this->ra = !$treatment->ra ? '' : $treatment->ra;
        $this->rv = !$treatment->rv ? '' : $treatment->rv;
        $this->ptm = !$treatment->ptm ? '' : $treatment->ptm;
        $this->sol_hemodev = !$treatment->sol_hemodev ? '' : $treatment->sol_hemodev;
        $this->obs = !$treatment->obs ? 'LAVADO DE MANOS - INICIO DE HD' : $treatment->obs;

        /*Datos mostrados*/
        $this->pa2 = !$treatment->pa2 ? '' : $treatment->pa2;
        $this->freq2 = !$treatment->freq2 ? '' : $treatment->freq2;
        $this->qb2 = !$treatment->qb2 ? '' : $treatment->qb2;
        $this->cnd2 = !$treatment->cnd2 ? '' : $treatment->cnd2;
        $this->ra2 = !$treatment->ra2 ? '' : $treatment->ra2;
        $this->rv2 = !$treatment->rv2 ? '' : $treatment->rv2;
        $this->ptm2 = !$treatment->ptm2 ? '' : $treatment->ptm2;
        $this->sol_hemodev2 = !$treatment->sol_hemodev2 ? '' : $treatment->sol_hemodev2;
        $this->obs2 = !$treatment->obs2 ? '' : $treatment->obs2;
        /*Datos mostrados*/

        /*Datos mostrados*/
        $this->pa3 = !$treatment->pa3 ? '' : $treatment->pa3;
        $this->freq3 = !$treatment->freq3 ? '' : $treatment->freq3;
        $this->qb3 = !$treatment->qb3 ? '' : $treatment->qb3;
        $this->cnd3 = !$treatment->cnd3 ? '' : $treatment->cnd3;
        $this->ra3 = !$treatment->ra3 ? '' : $treatment->ra3;
        $this->rv3 = !$treatment->rv3 ? '' : $treatment->rv3;
        $this->ptm3 = !$treatment->ptm3 ? '' : $treatment->ptm3;
        $this->sol_hemodev3 = !$treatment->sol_hemodev3 ? '' : $treatment->sol_hemodev3;
        $this->obs3 = !$treatment->obs3 ? '' : $treatment->obs3;
        /*Datos mostrados*/

        /*Datos mostrados*/
        $this->pa4 = !$treatment->pa4 ? '' : $treatment->pa4;
        $this->freq4 = !$treatment->freq4 ? '' : $treatment->freq4;
        $this->qb4 = !$treatment->qb4 ? '' : $treatment->qb4;
        $this->cnd4 = !$treatment->cnd4 ? '' : $treatment->cnd4;
        $this->ra4 = !$treatment->ra4 ? '' : $treatment->ra4;
        $this->rv4 = !$treatment->rv4 ? '' : $treatment->rv4;
        $this->ptm4 = !$treatment->ptm4 ? '' : $treatment->ptm4;
        $this->sol_hemodev4 = !$treatment->sol_hemodev4 ? '' : $treatment->sol_hemodev4;
        $this->obs4 = !$treatment->obs4 ? '' : $treatment->obs4;
        /*Datos mostrados*/

        /*Datos mostrados*/
        $this->pa5 = !$treatment->pa5 ? '' : $treatment->pa5;
        $this->freq5 = !$treatment->freq5 ? '' : $treatment->freq5;
        $this->qb5 = !$treatment->qb5 ? '' : $treatment->qb5;
        $this->cnd5 = !$treatment->cnd5 ? '' : $treatment->cnd5;
        $this->ra5 = !$treatment->ra5 ? '' : $treatment->ra5;
        $this->rv5 = !$treatment->rv5 ? '' : $treatment->rv5;
        $this->ptm5 = !$treatment->ptm5 ? '' : $treatment->ptm5;
        $this->sol_hemodev5 = !$treatment->sol_hemodev5 ? '' : $treatment->sol_hemodev5;
        $this->obs5 = !$treatment->obs5 ? '' : $treatment->obs5;
        /*Datos mostrados*/

        /*Datos mostrados*/
        $this->pa6 = !$treatment->pa6 ? '' : $treatment->pa6;
        $this->freq6 = !$treatment->freq6 ? '' : $treatment->freq6;
        $this->qb6 = !$treatment->qb6 ? '' : $treatment->qb6;
        $this->cnd6 = !$treatment->cnd6 ? '' : $treatment->cnd6;
        $this->ra6 = !$treatment->ra6 ? '' : $treatment->ra6;
        $this->rv6 = !$treatment->rv6 ? '' : $treatment->rv6;
        $this->ptm6 = !$treatment->ptm6 ? '' : $treatment->ptm6;
        $this->sol_hemodev6 = !$treatment->sol_hemodev6 ? '' : $treatment->sol_hemodev6;
        $this->obs6 = !$treatment->obs6 ? '' : $treatment->obs6;
        /*Datos mostrados*/

        /*Datos mostrados*/
        $this->pa7 = !$treatment->pa7 ? '' : $treatment->pa7;
        $this->freq7 = !$treatment->freq7 ? '' : $treatment->freq7;
        $this->qb7 = !$treatment->qb7 ? '' : $treatment->qb7;
        $this->cnd7 = !$treatment->cnd7 ? '' : $treatment->cnd7;
        $this->ra7 = !$treatment->ra7 ? '' : $treatment->ra7;
        $this->rv7 = !$treatment->rv7 ? '' : $treatment->rv7;
        $this->ptm7 = !$treatment->ptm7 ? '' : $treatment->ptm7;
        $this->sol_hemodev7 = !$treatment->sol_hemodev7 ? '' : $treatment->sol_hemodev7;
        /*Datos mostrados*/

        /*Datos mostrados*/
        $this->pa8 = !$treatment->pa8 ? '' : $treatment->pa8;
        $this->freq8 = !$treatment->freq8 ? '' : $treatment->freq8;
        $this->qb8 = !$treatment->qb8 ? '' : $treatment->qb8;
        $this->cnd8 = !$treatment->cnd8 ? '' : $treatment->cnd8;
        $this->ra8 = !$treatment->ra8 ? '' : $treatment->ra8;
        $this->rv8 = !$treatment->rv8 ? '' : $treatment->rv8;
        $this->ptm8 = !$treatment->ptm8 ? '' : $treatment->ptm8;
        $this->sol_hemodev8 = !$treatment->sol_hemodev8 ? '' : $treatment->sol_hemodev8;
        /*Datos mostrados*/

        $this->obs7 = $treatment->order->medical->hour_hd == '3' ? $treatment->obs7 = 'FIN DE HD' : $treatment->obs7;
        $this->obs8 = $treatment->order->medical->hour_hd < '3' ? $treatment->obs8 = 'FIN DE HD' : $treatment->obs8;

        $this->user_id = $treatment->user_id;
    }

    public function render()
    {
        return view('livewire.operative.treatment.edit');
    }

    public function Update()
    {
        $treatment = Treatment::find($this->select_id);

        $treatment->update([
            'hr' => $this->hr, 'pa' => $this->pa, 'freq' => $this->freq, 'qb' => $this->qb, 'cnd' => $this->cnd, 'ra' => $this->ra, 'rv' => $this->rv, 'ptm' => $this->ptm, 'sol_hemodev' => $this->sol_hemodev, 'obs' => $this->obs,
            'hr2' => $this->hr2, 'pa2' => $this->pa2, 'freq2' => $this->freq2, 'qb2' => $this->qb2, 'cnd2' => $this->cnd2, 'ra2' => $this->ra2, 'rv2' => $this->rv2, 'ptm2' => $this->ptm2, 'sol_hemodev2' => $this->sol_hemodev2, 'obs2' => $this->obs2,
            'hr3' => $this->hr3, 'pa3' => $this->pa3, 'freq3' => $this->freq3, 'qb3' => $this->qb3, 'cnd3' => $this->cnd3, 'ra3' => $this->ra3, 'rv3' => $this->rv3, 'ptm3' => $this->ptm3, 'sol_hemodev3' => $this->sol_hemodev3, 'obs3' => $this->obs3,
            'hr4' => $this->hr4, 'pa4' => $this->pa4, 'freq4' => $this->freq4, 'qb4' => $this->qb4, 'cnd4' => $this->cnd4, 'ra4' => $this->ra4, 'rv4' => $this->rv4, 'ptm4' => $this->ptm4, 'sol_hemodev4' => $this->sol_hemodev4, 'obs4' => $this->obs4,
            'hr5' => $this->hr5, 'pa5' => $this->pa5, 'freq5' => $this->freq5, 'qb5' => $this->qb5, 'cnd5' => $this->cnd5, 'ra5' => $this->ra5, 'rv5' => $this->rv5, 'ptm5' => $this->ptm5, 'sol_hemodev5' => $this->sol_hemodev5, 'obs5' => $this->obs5,
            'hr6' => $this->hr6, 'pa6' => $this->pa6, 'freq6' => $this->freq6, 'qb6' => $this->qb6, 'cnd6' => $this->cnd6, 'ra6' => $this->ra6, 'rv6' => $this->rv6, 'ptm6' => $this->ptm6, 'sol_hemodev6' => $this->sol_hemodev6, 'obs6' => $this->obs6,
            'hr7' => $this->hr7, 'pa7' => $this->pa7, 'freq7' => $this->freq7, 'qb7' => $this->qb7, 'cnd7' => $this->cnd7, 'ra7' => $this->ra7, 'rv7' => $this->rv7, 'ptm7' => $this->ptm7, 'sol_hemodev7' => $this->sol_hemodev7, 'obs7' => $this->obs7,
            'hr8' => $this->hr8, 'pa8' => $this->pa8, 'freq8' => $this->freq8, 'qb8' => $this->qb8, 'cnd8' => $this->cnd8, 'ra8' => $this->ra8, 'rv8' => $this->rv8, 'ptm8' => $this->ptm8, 'sol_hemodev8' => $this->sol_hemodev8, 'obs8' => $this->obs8,
            'user_id' => $this->user_id
        ]);

        $this->emit('treatment-updated', 'SE REALIZO EL CORRECTO GUARDADO DE DATOS');

    }
}
