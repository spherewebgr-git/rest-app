<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontMenuController extends Controller
{
    public function menu() {
        return view('public.menu');
    }
}
