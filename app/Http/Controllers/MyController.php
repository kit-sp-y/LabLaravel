<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showPath($name = 'Unknown') {
        $path = request()->path();
        return view('team', ['path' => $path]);
    }
    public function showCompany($name = 'Unknown') {
        return view('company', ['company' => $name]);
    }
}