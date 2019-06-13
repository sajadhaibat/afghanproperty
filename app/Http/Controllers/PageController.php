<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abroad;
use App\Property;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Session;
use App;
use Lang;
class PageController extends Controller
{

//    public function __construct(Request $request)
//    {
//
//        if ($request->session()->has('lang')){
//
//            \App::setLocale($request->session()->get('lang'));
//
//        }else{
//            \App::setLocale('en');
//        }
//
//
//    }


    public function index(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $brproper = DB::table('abroads')->where('type','house')->latest()->get();
        $boffices = DB::table('abroads')->where('type','office')->latest()->limit(2)->get();
        $bland = DB::table('abroads')->where('type','land')->latest()->limit(1)->get();

        $proper = DB::table('properties')->where('type','house')->latest()->limit(6)->get();
       $offices = DB::table('properties')->where('type','office')->latest()->limit(6)->get();
        $lapro = DB::table('properties')->where('type','land')->latest()->limit(2)->get();


  $bhouses = DB::table('abroads')->where('type','apartment')->latest()->get();
        $houses = DB::table('properties')->where('type','apartment')->latest()->limit(16)->get();

        return view ('index', compact('proper' , 'offices' , 'lapro','brproper','boffices','bland','bhouses','houses'));
    }

    public function register(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('register');
    }

    public function login(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('login');
    }

    public function profile(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('profile');
    }

    public function addproperty(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('addproperty');
    }

    public function singleland($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $sproperty = Property::findOrFail($id);
        $land = DB::table('properties')->where('type','land')->get();

        return view('singleproperty',compact('sproperty' , 'land'));
    }


    public function singleoffice($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $soffice = Property::findOrFail($id);
        $office = DB::table('properties')->where('type','office')->get();

        return view('singleoffice',compact('soffice','office'));
    }


    public function singleapartment($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $soffice = Property::findOrFail($id);
        $office = DB::table('properties')->where('type','apartment')->get();

        return view('singleapartment',compact('soffice','office'));
    }



    public function singlepro($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $spro = Property::findOrFail($id);
        $proper = DB::table('properties')->where('type','house')->get()->random(3);

        return view('singlepro',compact('spro','proper'));
    }

    public function singleshop($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $spro = Property::findOrFail($id);
    $proper = DB::table('properties')->where('type','shop')->get();

        return view('singleshop',compact('spro','proper'));
    }




    public function apartments(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $bhouses = DB::table('abroads')->where('type','apartment')->latest()->get();
        $houses = DB::table('properties')->where('type','apartment')->latest()->get();
        return view('apartments',compact('houses','bhouses'));
    }

    public function houses(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }

        $bhouses = DB::table('abroads')->where('type','house')->latest()->get();
        $houses = DB::table('properties')->where('type','house')->latest()->get();
        return view('houses',compact('houses','bhouses'));
    }


    public function offices(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $offices = DB::table('properties')->where('type','office')->latest()->get();
        $boffices = DB::table('abroads')->where('type','office')->latest()->get();

        return view('offices',compact('offices','boffices'));
    }

    public function lands(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $lands = DB::table('properties')->where('type','land')->latest()->get();
        $blands = DB::table('abroads')->where('type','land')->latest()->get();

        return view('lands',compact('lands','blands'));
    }

    public function shops(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $shops = DB::table('properties')->where('type','shop')->latest()->get();
        return view('shops',compact('shops'));
    }



    public function abroadpro($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $bproper = DB::table('properties')->where('type','house')->get()->random(3);
        $bprop = DB::table('abroads')->where('id',$id)->get();


        return view('broadpro',compact('bprop','bproper'));
    }

    public function boffice($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $boff = Abroad::findOrFail($id);
        $office = DB::table('properties')->where('type','office')->get()->random(3);

        return view('boffice',compact('boff','office'));
    }

    public function bland($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $bland = Abroad::findOrFail($id);
        $land = DB::table('properties')->where('type','land')->get()->random(3);

        return view('bland',compact('land' , 'bland'));
    }

    public function bapartment($id, Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $boff = Abroad::findOrFail($id);
        $office = DB::table('properties')->where('type','apartment')->get();

        return view('bapartment',compact('boff','office'));
    }



    public function about(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('about');
    }

    public function contact(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('contact');
    }

    public function broad(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        return view('broad');
    }


    public function Search(Request $request)
    {
        if ($request->session()->has('lang')){
            \App::setLocale(Session::get('lang'));

        }else{
            \App::setLocale('en');
        }
        $status = $request->input('status');
        $type = $request->input('type');
        $city = $request->input('city');
        $minprice = $request->input('minprice');
        $maxprice = $request->input('maxprice');



        $props =DB::table('properties')->where(function ($query) use ($status,$type,$city,$minprice,$maxprice){

            $query->where('status','LIKE',"%$status%");
            $query->where('type','LIKE',"%$type%");
            $query->where('province','LIKE',"%$city%");
            $query->whereBetween('price',[$minprice, $maxprice]);

        })->latest()->get();

        return view('search',compact('props','status','type','city','minprice','maxprice'));
    }

    public function contactus(Request $request)
    {
        Mail::send('email',['name'=>$request->name,'email'=>$request->email,'subject'=>$request->subject,'jan'=>$request->message],function ($mail) use($request){
            $mail->from($request->email,$request->name);
            $mail->to('info@afghanproperty.af','afghanproperty');

        });
        Session::flash('success_message','Thanks for sending us message we will get back to you soon!');
        return redirect('/');
    }


    public function survey()
    {
        return view('survey.survey');
    }

    public function surveyeng()
    {
        return view('survey.eng.surveyeng');
    }

    public function survey1()
    {
        return view('survey1.survey1');
    }

    public function surveyeng1()
    {
        return view('survey1.eng.surveyeng1');
    }

    
}
