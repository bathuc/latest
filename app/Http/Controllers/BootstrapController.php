<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    public function jum()
    {
        return view('bootstrap.jum');
    }

}
