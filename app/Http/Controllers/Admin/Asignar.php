<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Asignar extends Controller
{
    public function index()
    {
        return view('asignar.index');
    }
}
