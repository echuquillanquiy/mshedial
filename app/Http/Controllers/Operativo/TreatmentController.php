<?php

namespace App\Http\Controllers\Operativo;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        return view('operativo.tratamiento.index');
    }

    public function edit(Treatment $treatment)
    {
        return view('operativo.tratamiento.edit', compact('treatment'));
    }
}
