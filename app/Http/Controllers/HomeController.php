<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            "name" => "Patchayanee Massakang",
            "age" => 30,
        ];
        return view("welcome", $data);
    }


}
