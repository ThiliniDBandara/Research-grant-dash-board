<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;

class DetailsController extends Controller
{
    public function store(Request $request){
     
        $detail=new Detail;
        $this->validate($request,[
            'full_name'=>'required',
            'designation'=>'required',
            'department'=>'required',
            'faculty'=>'required',
            'tel'=>'required',
            'email'=>'required',
            'event'=>'required',
            'country'=>'required',
            'period'=>'required',
            'title'=>'required',
            'date'=>'required',
            'remember'=>'required',



        ]);
        //dd($request->all());
        $detail->full_name=$request->full_name;
        $detail->designation=$request->designation;
        $detail->department=$request->department;
        $detail->faculty=$request->faculty;
        $detail->tel=$request->tel;
        $detail->email=$request->email;
        $detail->event=$request->event;
        $detail->country=$request->country;
        $detail->period=$request->period;
        $detail->title=$request->title;

        $detail->save();
        $data=Detail::all();
        return redirect('admin.categories.view_details')->with('details',$data);
    }
}
