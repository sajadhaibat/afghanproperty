<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{


    public function ChangeLanguage(Request $request,$name)
    {

        $request->session()->put('lang',$name);

        return redirect()->back();
    }


}
