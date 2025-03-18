<?php

namespace App\Http\Controllers;

use App\Models\ReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function dashboard()
    {
        $userType = Auth::user()->user_type;
        switch ($userType) {
            case 'manager':
                return view('dashboards.manager');
                break;
            case 'staff':
                $reservation_requests = ReservationRequest::offset(0)->limit(4)->get();
                $reservationsCount = ReservationRequest::all()->count();
                return view('dashboards.staff', ['reservation_requests' => $reservation_requests, 'counted' => $reservationsCount]);
                break;
            case 'kitchen_staff':
                return view('dashboards.kitchen_staff');
                break;
            case 'inventory_staff':
                return view('dashboards.inventory_staff');
                break;
            default:
                return view('welcome');

        }

    }
}

