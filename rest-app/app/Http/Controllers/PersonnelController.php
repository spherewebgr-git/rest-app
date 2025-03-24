<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ReservationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonnelController extends Controller
{
    public function requests(){
        $reservations = ReservationRequest::all();

        return view('dashboards.sub_systems.reservation_requests', ['reservation_requests' => $reservations]);
    }

    public function decline($id) {

        $reservation = ReservationRequest::query()->where('id', '=', $id)->first();
        $reservation->delete();
        try {
            Mail::send('emails.decline_notification', ['reservation' => $reservation], function($message) use ($reservation) {
                $message->to($reservation->customer_email, $reservation->customer_name);
                $message->subject('Your reservation request has been declined');
                $message->from('reservations@resty.com', 'Resty restaurant');
            });
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->back();
    }
}
