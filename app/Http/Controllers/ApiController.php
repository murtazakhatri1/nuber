<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class ApiController extends Controller
{
    public function CreateBookings(Request $request)
    {
    	
    	 $booking = Booking::create([
          'name' => $request->name,
          'email' => $request->email,
          'address' => $request->address,
          'car_type' => $request->car_type,
          'status' => 'pending',
        ]);
        return response()->json($booking->id);

    }


     public function CancelBooking($id)
    {   
    	$cancelbooking = Booking::where('id',$id)->first();
    	$cancelbooking->status = 'cancel';
    	$cancelbooking->update();

        return response()->json(['msg'=>'cancelled']);

    }

     public function AllBooking()
    {   
    	$bookings = Booking::all();
        return response()->json(['msg'=>'success','bookings'=>$bookings]);

    }

     public function AcceptBooking($id)
    {   
    	$acceptbooking = Booking::where('id',$id)->first();
    	$acceptbooking->status = 'accepted';
    	$acceptbooking->update();

        return response()->json(['msg'=>'accepted successfully']);

    }
}
