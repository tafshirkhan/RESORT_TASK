<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortModel;
use App\Models\BookingProcess;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingProcessMail;

class BookingController extends Controller
{
    public function BookingProcess($id){
        $resort = ResortModel::findOrFail($id);
        return view('Frontend.Booking.bookingprocess',compact('resort'));
    }

    public function AddBooking(Request $req){
        $resort_id = $req->id;

        //$availability = ResortModel::findOrFail($resort_id)->where('availability','>=',Carbon::now()->format('Y-m-d'))->first();
        
        $req->validate([
            'user_name'=>'required',
            'user_email'=>'required',
            'user_phone'=>'required',
            'guest'=>'required',
            'room'=>'required',
            //'reservation'=>'required',
        ]);

        //$validate = Carbon::parse($req->reservation)->format('Y-m-d');
     
        BookingProcess::insert([
            'resort_id'=>$resort_id,
            'user_name'=>$req->user_name,
            'user_email'=>$req->user_email,
            'user_phone'=>$req->user_phone,
            'guest'=>$req->guest,
            'room'=>$req->room,
            'reservation'=>$req->reservation,
            ]);

            $data = [
                'user_name'=>$req->user_name,
                'user_phone'=>$req->user_phone,
                'reservation'=>$req->reservation,
            ];
            Mail::to($req->user_email)->send(new BookingProcessMail($data));

            $notification = array(
                'message'=>'Reseravation request has been sent successfully',
                'alert-type'=>'info'
            ); 
            return redirect()->back()->with($notification);

       /*else{
            $notification = array(
                    'message'=>'Sorry not available for that day',
                    'alert-type'=>'warning'
                ); 
            return redirect()->back()->with($notification);
       }*/

    }
}
