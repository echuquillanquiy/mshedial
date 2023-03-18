<?php

namespace App\Http\Controllers\Operativo;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('operativo.ordenes.index');
    }
}
