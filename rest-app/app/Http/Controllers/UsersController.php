<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function dashboard()
    {
        $userType = Auth::user()->user_type;
        if($userType == 'admin'){
            return view('dashboards.admin');
        } else {
            return view('welcome');
        }
    }
}
