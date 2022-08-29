<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortModel;

class ResortController extends Controller
{
    public function ViewAllResorts(){
        $allresort = ResortModel::latest()->get();
        return view('Admin.ManageResort.allresorts',compact('allresort'));
    }

    public function AddNewResort(){
        return view('Admin.ManageResort.addresort');
    }
}
