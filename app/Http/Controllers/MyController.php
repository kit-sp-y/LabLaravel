<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showCompany($name = 'Unknown') {
        return view('company', ['company' => $name]);
    }

    public function showTeam(Request $request)
    {
        $color = $request->query('color', 'secondary');

        $name = $request->query('name', 'Team Member');

        $text = $request->query('text', 'primary');

        return view('team', [
            'bg_color' => $color,
            'teamName' => $name,
            'text_color' => $text,
        ]);
    }
}
