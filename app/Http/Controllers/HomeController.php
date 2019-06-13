<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $file = $request->file('banner');
        $filename = time().'_'.$file->getClientOriginalName();
        $path = public_path().'/images';
        $file->move($path,$filename);

        $service = new service;
        $service->title=$request->title;

        $service->description=$request->description;
        $service->banner=$filename;
        $service->save();
        return redirect(route('services.index'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }


}
