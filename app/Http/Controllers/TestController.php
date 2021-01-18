<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
    {
        if ($request->isMethod('post')) {
            echo "<pre>";
            print_r(htmlspecialchars($request->text));
            echo "<pre>";
            die();
        }
        return view('test');
    }
}
