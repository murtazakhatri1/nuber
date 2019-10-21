<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class NuberController extends Controller
{
    public function AllBookings()
    {
    	$bookings = Booking::orderBy('id','DESC')->get();
    	return view('all-bookings',compact('bookings'));
    }
}
