<?php

namespace App\Http\Controllers;

use App\Abroad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AbroadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('broad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if($request->hasfile('banner'))
        {

            foreach($request->file('banner') as $image)
            {
                $filename=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                $data[] = $filename;
            }
        }

        $property = new Abroad;
        $property->banner=json_encode($data);
        $property->name=$request->name;
        $property->email=$request->email;
        $property->mobile=$request->mobile;
        $property->country=$request->country;
        $property->status=$request->status;
        $property->type=$request->type;
        $property->title=$request->title;
        $property->province=$request->province;
        $property->city=$request->city;
        $property->district=$request->district;
        $property->area1=$request->area1;
        $property->bedrooms=$request->bedrooms;
        $property->bathrooms=$request->bathrooms;
        $property->sizetype=$request->sizetype;
        $property->area=$request->area;
        $property->owned_by=$request->own;
        $property->deed=$request->deed;
        $property->deedname=$request->deedname;
        $property->price=$request->price;

        $property->occupied=$request->occupied;
        $property->attorney=$request->attorney;
        $property->lat=$request->lat;
        $property->lng=$request->lng;
        $property->description=$request->description;
        $property->save();
        return redirect(url('/'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Abroad::findorfail($id);
        return view('Admin.abroads.house_edit',compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $up = Abroad::findorfail($id);
        $up->title=$request->title;
        $up->city=$request->location;
        $up->price=$request->price;
        $up->description=$request->description;
        $up->save();

        echo '<script type="text/javascript">'
    , 'history.go(-2);'
    , '</script>';


    }

    public function destroy($id)
    {
        $del = Abroad::findorfail($id);


        $image_path = "images/".$del->banner;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $del->delete();
        Session::flash('delete','Successfully Deleted');

        return redirect()->back();
    }
}
