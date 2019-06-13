<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profilepicture(Request $request)
    {
        $file = $request->file('banner');
        $filename = time().'_'.$file->getClientOriginalName();
        $path = public_path().'/images';
        $file->move($path,$filename);

        $profile = new Profile;
        $profile->user_id=Auth::user()->id;
        $profile->banner=$filename;
        $profile->save();
        return redirect(route('home.index'));
    }


}
