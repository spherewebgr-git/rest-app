<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class FrontMenuController extends Controller
{
    public function menu() {
        $menuitems = MenuItem::all();
        return view('public.menu',['menuitems'=>$menuitems]);
    }

    public function reserve(Request $request) {

        DB::table('reservation_requests')->insert(
            array(
                'hashId' => Str::substr(Str::slug(Hash::make( $request->fname.$request->phone.$request->date.$request->time)), 0, 32),
                'customer_name' => $request->fname,
                'reservation_date' => $request->date,
                'reservation_time' => $request->time,
                'customer_phone' => $request->phone,
                'customer_email' => $request->email,
                'members' => $request->member,
                'created_at' => Carbon::now()
            )
        );

        Session::flash('message', 'Reservation Request Submitted Successfully');
        return Redirect::to('/');
    }
}
