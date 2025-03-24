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
        dd(Auth::user());
        $reservation_requests = ReservationRequest::offset(0)->limit(4)->orderBy('reservation_date')->get();
        $reservationsCount = ReservationRequest::all()->count();
        switch ($userType) {
            case 'manager':
                return view('dashboards.manager', ['reservation_requests' => $reservation_requests, 'counted' => $reservationsCount]);
                break;
            case 'staff':
                return view('dashboards.staff', ['reservation_requests' => $reservation_requests, 'counted' => $reservationsCount]);
                break;
            case 'kitchen_staff':
                return view('dashboards.kitchen_staff', ['reservation_requests' => $reservation_requests, 'counted' => $reservationsCount]);
                break;
            case 'inventory_staff':
                return view('dashboards.inventory_staff', ['reservation_requests' => $reservation_requests, 'counted' => $reservationsCount]);
                break;
            default:
                return view('welcome');

        }

    }
}

