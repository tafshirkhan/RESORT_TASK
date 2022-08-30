<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortModel;
use Image;

class FrontendIndexController extends Controller
{
    public function ViewIndexPage(){
        $allresort = ResortModel::orderBy('resort_name','ASC')->get();

        return view('Frontend.index',compact('allresort'));

    }
}
