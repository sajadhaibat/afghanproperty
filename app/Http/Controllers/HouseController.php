<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $house = House::all();
        return view('Admin.houses.house',compact('house'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.houses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('banner');
        $filename = time().'_'.$file->getClientOriginalName();
        $path = public_path().'/images';
        $file->move($path,$filename);

        $house = new House;
        $house->name=$request->label;
        $house->area=$request->area;
        $house->location=$request->location;
        $house->price=$request->price;
        $house->room=$request->room;
        $house->bedroom=$request->bedroom;
        $house->bathroom=$request->bathroom;
        $house->number=$request->number;
        $house->description=$request->description;
        $house->banner=$filename;
        $house->save();
        return redirect(route('house.index'));


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
        //
    }
}
