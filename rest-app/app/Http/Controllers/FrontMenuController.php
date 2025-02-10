<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class FrontMenuController extends Controller
{
    public function menu() {
        $menuitems = MenuItem::all();
        return view('public.menu',['menuitems'=>$menuitems]);
    }
}
