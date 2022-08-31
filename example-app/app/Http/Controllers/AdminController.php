<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\NewAdmin;
use Session;
use Hash;

class AdminController extends Controller
{
    public function AdminLogin(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $admin = Admin::where('email','=',$req->email)->first();
        if($admin){
            //if(Hash::check($req->password,$admin->password))
            if($req->password==$admin->password){
                $req->session()->put('id',$admin->id);
                return view('Admin.admin_index');
            
            }else{
                return back()->with('fail','Incorrect password');
            }

        }else{
            return back()->with('fail','Invalid email or email is not registered');
        }

    }

    public function ViewAllAdmins(){
        //$alladmins = NewAdmin::latest()->get();
        $alladmins = NewAdmin::paginate(3);
        return view('Admin.ManageAdmin.alladmins',compact('alladmins'));
    }

    public function AddNewAdmin(){
        return view('Admin.ManageAdmin.addadmins');
    }

    public function StoreAdmin(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        NewAdmin::insert([
           'name'=>$req->name,
           'email'=>$req->email,       
        ]);
        return redirect()->route('all.admins');

    }
}
