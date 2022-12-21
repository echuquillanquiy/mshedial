<?php

namespace App\Http\Controllers\Operativo;

use App\Http\Controllers\Controller;
use App\Models\Medical;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function index()
    {
        return view('operativo.medicos.index');
    }

    public function Edit(Medical $medical)
    {
        return view('operativo.medicos.edit', compact('medical'));
    }
}
