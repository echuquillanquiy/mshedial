<?php

namespace App\Http\Controllers\Operativo;

use App\Http\Controllers\Controller;
use App\Models\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function index()
    {
        return view('operativo.enfermeras.index');
    }

    public function edit(Nurse $nurse)
    {
        return view('operativo.enfermeras.edit', compact('nurse'));
    }
}
