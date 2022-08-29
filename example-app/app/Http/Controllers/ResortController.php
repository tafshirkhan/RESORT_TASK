<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResortModel;
use Image;

class ResortController extends Controller
{
    public function ViewAllResorts(){
        /*$search = $req['search'] ?? "";
        if($search != ""){
            $allresort = ResortModel::where('resort_name','LIKE',"%$search%")->orWhere('resort_class','LIKE',"%$search%")->get();

        }else{
            $allresort = ResortModel::latest()->get();

        }*/
        $allresort = ResortModel::latest()->get();
        return view('Admin.ManageResort.allresorts',compact('allresort'));
        //return view('Admin.ManageResort.allresorts',compact('allresort','search'));
        
    }

    public function AddNewResort(){
        return view('Admin.ManageResort.addresort');
    }

    public function StoreResort(Request $req){

        $req->validate([
            'resort_name'=>'required|min:4',
            'resort_class'=>'required|min:4',
            'resort_location'=>'required|min:4',
            'resort_fair'=>'required|numeric',
            'availability'=>'required|date',
            'resort_image'=>'required',
        ]);

        $image = $req->file('resort_image');
        $unique_id = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(250,250)->save('upload/resort/'.$unique_id);
        $save = 'upload/resort/'.$unique_id;

        ResortModel::insert([
           'resort_name'=>$req->resort_name,
           'resort_class'=>$req->resort_class,
           'resort_location'=>$req->resort_location,
           'resort_fair'=>$req->resort_fair,
           'resort_discount'=>$req->resort_discount,
           'availability'=>$req->availability,
           'resort_image'=>$save,
        ]);

         $notification = array(
            'message'=>'New resort has been added to the list',
            'alert-type'=>'info'
        ); 
        return redirect()->route('all.resorts')->with($notification);
    }

     public function ResortInactive($id){
        ResortModel::findOrFail($id)->update(['status'=> 0]);

         $notification = array(
            'message'=>'Resort Inactivated',
            'alert-type'=>'warning'
        );
        return redirect()->back()->with($notification);
    }

    public function ResortActive($id){
        ResortModel::findOrFail($id)->update(['status'=> 1]);

        $notification = array(
            'message'=>'Resort Activated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function EditResort($id){
        $resort = ResortModel::findOrFail($id);
        return view('Admin.ManageResort.editresort',compact('resort'));
    }

    public function UpdateResort(Request $req){
        $resort_id = $req->id; //this will comes from hidden input
        $previous_image = $req->previous_image; //from hidden input field;
        if($req->file('resort_image')){
            unlink($previous_image);
             $image = $req->file('resort_image');
            $unique_id = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(250,250)->save('upload/resort/'.$unique_id);
            $save = 'upload/resort/'.$unique_id;

            ResortModel::findOrFail($resort_id)->update([
                'resort_name'=>$req->resort_name,
                'resort_class'=>$req->resort_class,
                'resort_location'=>$req->resort_location,
                'resort_fair'=>$req->resort_fair,
                'resort_discount'=>$req->resort_discount,
                'availability'=>$req->availability,
                'resort_image'=>$save,
            ]);
            $notification = array(
            'message'=>'Resort has been succefully updated along with the image',
            'alert-type'=>'success'
           );
           return redirect()->back()->with($notification);

        }else{
            ResortModel::findOrFail($resort_id)->update([
                'resort_name'=>$req->resort_name,
                'resort_class'=>$req->resort_class,
                'resort_location'=>$req->resort_location,
                'resort_fair'=>$req->resort_fair,
                'resort_discount'=>$req->resort_discount,
                'availability'=>$req->availability,
            ]);
            $notification = array(
                'message'=>'Resort has been succefully updated',
                'alert-type'=>'success'
           );
           return redirect()->back()->with($notification);
        }
    }

    public function DeleteResort($id){
        $resort = ResortModel::findOrFail($id);
        $resort_image = $resort->resort_image;
        unlink($resort_image);

        ResortModel::findOrFail($id)->delete();

        $notification = array(
            'message'=>'Resort has been removed from the list',
            'alert-type'=>'warning'
        );
        return redirect()->back()->with($notification);
    }

    public function SearchResort(){
        $search = $_GET['search'];
        $search_resort = ResortModel::where('resort_name','LIKE','%'.$search.'%')->get();
        return view('Admin.ManageResort.allresorts',compact('search_resort'));


    }
}
