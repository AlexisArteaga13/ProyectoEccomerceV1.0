<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrableController extends Controller
{
    //
    public function index()
    {
        return view('plantillas.padministrable');
    }
}
