<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;


class AdminController extends Controller
{
    //
    public function addView()
    { 
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.add_doctors');
            }
            else{
                return redirect()->back();
            }
        }
        else{
return redirect('login');
        }
       
    }
    public function upload(Request $request)
    {
    $doctor = new doctor;
    $image=$request->file;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->file->move('doctorimage',$imagename);
    $doctor->image=$imagename;
    $doctor->name=$request->name;
    $doctor->speciality=$request->speciality;
    $doctor->description=$request->description;
    $doctor->phone=$request->phone;
    $doctor->location=$request->location;
    $doctor->save();
    return redirect()->back()->with('message','Doctor Added Successfully');
}
public function showAppointment()
{     if(Auth::id())
    {
        if(Auth::user()->usertype==1)
        {
     $data=Appointment::all();
    return view('admin.showappointment',compact('data'));
        }
        else{
            return redirect()->back();
        }
    }
    else{
return redirect('login');
    }
}
public function approved($id)
{
    $data=Appointment::find($id);
    $data->status='approved';
    $data->save();
    return redirect()->back();
}
public function cancelled($id){
    $data=Appointment::find($id);
    $data->status='cancelled';
    $data->save();
    return redirect()->back();
    
}
public function editdoctor()
{     $data=Doctor::all();
    return view('admin.editdoctor',compact('data'));
}
public function delete($id)
{
    $data=Doctor::find($id);
    $data->delete();
    return redirect()->back();
}
public function updatedoctor($id)
{  
    $data=Doctor::find($id);
    return view('admin.updatedoctor',compact('data'));

}

public function addDetail(Request $request,$id)
{

     $doctor=Doctor::find($id);
     $doctor->name=$request->name;
     $doctor->speciality=$request->speciality;
     $doctor->description=$request->description;
     $doctor->phone=$request->phone;
     $doctor->location=$request->location;
     $image=$request->file;
     if($image)
     {
     $imagename=time().'.'.$image->getClientOriginalExtension();
     $request->file->move('doctorimage',$imagename);
       $doctor->image=$imagename;
     }
       $doctor->save();


        return redirect()->back()->with('message','Updated Successfully');
}


}
