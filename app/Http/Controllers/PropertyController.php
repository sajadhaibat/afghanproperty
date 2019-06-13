<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;


class PropertyController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $property = Property::where('user_id', '=', Auth::user()->id)->latest()->get();
        return view('profile',compact('property'));
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
        return view('addproperty');
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
                $filename=time().'_'.$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                $data[] = $filename;
            }
        }

        $property = new Property;
        $property->user_id=Auth::user()->id;
        $property->banner=json_encode($data);
        $property->type=$request->type;
        $property->title=$request->title;
        $property->status=$request->status;
        $property->province=$request->province;
        $property->city=$request->city;
        $property->district=$request->district;
        $property->sizetypr=$request->sizetypr;
        $property->area=$request->area;
        $property->area1=$request->area1;
        $property->floors=$request->floors;
        $property->bedrooms=$request->bedrooms;
        $property->bathrooms=$request->bathrooms;
        $property->price=$request->price;
        $property->description=$request->description;
        $property->lat=$request->lat;
        $property->lng=$request->lng;
        $property->save();
        return redirect(route('home.index'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Property::findorfail($id);
        $image_path = "images/".$del->banner;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $del->delete();
        Session::flash('delete','Successfully Deleted');

        return redirect()->back();

    }
}
