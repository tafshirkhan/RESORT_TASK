<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortModel;
use Image;
use Carbon\Carbon;
class FrontendIndexController extends Controller
{
    public function ViewIndexPage(){
        $allresort = ResortModel::orderBy('resort_name','ASC')->get();

        return view('Frontend.index',compact('allresort'));

    }

    public function ResorttDetails_info($id){
        $resort_details = ResortModel::findOrFail($id);

        return view('Frontend.ResortView.resort_details',compact('resort_details'));
    }

    public function CheckDate(){
        //$checkDate = ResortModel::where('check_date',$req->check_date)->where('availability','>=',Carbon::now()->format('Y-m-d'))->first();
        $checkDate = ResortModel::where('availability','>=',Carbon::now()->format('Y-m-d'))->first();
        if($checkDate){
            return response()->json([
                'success'=>'Not available for this date'
            ]);
        }else{
            return response()->json(['error'=>'This date is available']);
        }

    }

    public function BookingProcess($id){
        $resort_id = ResortModel::findOrFail($id);
        return view('Frontend.Booking.bookingprocess',compact('resort_id'));
    }
}
