<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        return view('Admin.home');
    }

    public function users()
    {

        $users = User::all();
        return view('Admin.user.users', compact('users'));
    }



   public function editusers($id)
    {
        $edit = User::findorfail($id);
        return view('Admin.user.edit',compact('edit'));

    }


    public function updateusers(Request $request, $id)
    {
        $up = User::findorfail($id);
        $up->name=$request->name;
        $up->number=$request->number;
        $up->email=$request->email;
        $up->accounttype=$request->accounttype;

        $up->save();
        return redirect(url('admin/users'));

    }



    public function apartments()
    {
        $apartments = Property::whereHas('user',function ($query){
            $query->where('type','apartment');
        })->latest()->get();
        return view('Admin.apartments.apartment',compact('apartments'));
    }


    public function houses()
    {
        $houses = Property::whereHas('user',function ($query){
            $query->where('type','house');
        })->latest()->get();
        return view('Admin.houses.house',compact('houses'));
    }

    public function offices()
    {
        $offices = Property::whereHas('user',function ($query){
            $query->where('type','office');
        })->latest()->get();
        return view('Admin.office.office' , compact('offices'));
    }

    public function shops()
    {
        $shops = Property::whereHas('user',function ($query){
            $query->where('type','shop');
        })->latest()->get();
        return view('Admin.shop.shop' , compact('shops'));
    }


    public function lands()
    {
        $lands = Property::whereHas('user',function ($query){
            $query->where('type','land');
        })->latest()->get();
        return view('Admin.land.land', compact('lands'));
    }

    public function abroadlands()
    {
        $blands = DB::table('abroads')->where('type','land')->latest()->get();
        return view('Admin.abroads.abroadlands', compact('blands'));
    }

    public function abroadhouses()
    {
        $bhouses = DB::table('abroads')->where('type','house')->latest()->get();
        return view('Admin.abroads.abroadhouses', compact('bhouses'));
    }
    
    
     public function abroadapartments()
    {
        $bhouses = DB::table('abroads')->where('type','apartment')->latest()->get();
        return view('Admin.abroads.abroadapartments', compact('bhouses'));
    }

    

    public function abroadoffices()
    {
        $boffices = DB::table('abroads')->where('type','office')->latest()->get();
        return view('Admin.abroads.abroadoffices', compact('boffices'));
    }


    public function destroyuser($id)
    {
        $del = User::findorfail($id);
        $del->delete();
        Session::flash('delete','Successfully Deleted');

        return redirect()->back();
}




    public function destroyapartment($id)
    {
        $del = Property::findorfail($id);
        $del->delete();
        Session::flash('delete','Successfully Deleted');

        return redirect()->back();
    }

    public function editapartment($id)
    {
        $edit = Property::findorfail($id);
        return view('Admin.apartments.edit',compact('edit'));

    }

    public function updateapartment(Request $request, $id)
    {
        
        
    
        if($request->hasfile('banner'))
        {

            foreach($request->file('banner') as $image)
            {
                $filename=time().$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                 $data[] = $filename;
            }
            $up = Property::findorfail($id);

            $up->banner=json_encode($data);
            $up->title=$request->title;
            $up->city=$request->location;
            $up->price=$request->price;
            $up->area1=$request->area1;
            $up->province=$request->province;
            $up->status=$request->status;
            $up->description=$request->description;
            $up->save();
            return redirect(url('admin/apartments'));
        }
else{
    $up = Property::findorfail($id);
    $up->title=$request->title;
    $up->city=$request->location;
    $up->price=$request->price;
    $up->area1=$request->area1;
    $up->province=$request->province;
    $up->status=$request->status;
    $up->description=$request->description;
    $up->save();
    return redirect(url('admin/apartments'));
}


    }



    public function destroyproperty($id)
    {
        $del = Property::findorfail($id);
        $del->delete();
        Session::flash('delete','Successfully Deleted');

        return redirect()->back();
    }

    public function edithouses($id)
    {
        $edit = Property::findorfail($id);
        return view('Admin.houses.edit',compact('edit'));

    }

    public function updatehouses(Request $request, $id)
    {
            
    
        if($request->hasfile('banner'))
        {

            foreach($request->file('banner') as $image)
            {
                $filename=time().$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                 $data[] = $filename;
            }
            $up = Property::findorfail($id);

            $up->banner=json_encode($data);
            $up->title=$request->title;
            $up->city=$request->location;
            $up->price=$request->price;
            $up->area1=$request->area1;
            $up->province=$request->province;
            $up->status=$request->status;
            $up->description=$request->description;
            $up->save();
            return redirect(url('admin/houses'));
        }
else{
    $up = Property::findorfail($id);
    $up->title=$request->title;
    $up->city=$request->location;
    $up->price=$request->price;
    $up->area1=$request->area1;
    $up->province=$request->province;
    $up->status=$request->status;
    $up->description=$request->description;
    $up->save();
    return redirect(url('admin/houses'));
}


    }

    public function editoffices($id)
    {
        $edit = Property::findorfail($id);
        return view('Admin.office.edit',compact('edit'));

    }

    public function updateoffices(Request $request, $id)
    {
            
    
        if($request->hasfile('banner'))
        {

            foreach($request->file('banner') as $image)
            {
                $filename=time().$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                 $data[] = $filename;
            }
            $up = Property::findorfail($id);

            $up->banner=json_encode($data);
            $up->title=$request->title;
            $up->city=$request->location;
            $up->price=$request->price;
            $up->area1=$request->area1;
            $up->province=$request->province;
            $up->status=$request->status;
            $up->description=$request->description;
            $up->save();
            return redirect(url('admin/offices'));
        }
else{
    $up = Property::findorfail($id);
    $up->title=$request->title;
    $up->city=$request->location;
    $up->price=$request->price;
    $up->area1=$request->area1;
    $up->province=$request->province;
    $up->status=$request->status;
    $up->description=$request->description;
    $up->save();
    return redirect(url('admin/offices'));
}

    }

    public function editlands($id)
    {
        $edit = Property::findorfail($id);
        return view('Admin.land.edit',compact('edit'));

    }

    public function updatelands(Request $request, $id)
    {
        
        if($request->hasfile('banner'))
        {

            foreach($request->file('banner') as $image)
            {
                $filename=time().$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                 $data[] = $filename;
            }
            $up = Property::findorfail($id);

            $up->banner=json_encode($data);
            $up->title=$request->title;
            $up->city=$request->location;
            $up->price=$request->price;
            $up->area1=$request->area1;
            $up->province=$request->province;
            $up->status=$request->status;
            $up->description=$request->description;
            $up->save();
            return redirect(url('admin/lands'));
        }
else{
    $up = Property::findorfail($id);
    $up->title=$request->title;
    $up->city=$request->location;
    $up->price=$request->price;
    $up->area1=$request->area1;
    $up->province=$request->province;
    $up->status=$request->status;
    $up->description=$request->description;
    $up->save();
    return redirect(url('admin/lands'));
}


    }


    public function editshops($id)
    {
        $edit = Property::findorfail($id);
        return view('Admin.shop.edit',compact('edit'));

    }

    public function updateshops(Request $request, $id)
    {
       
        if($request->hasfile('banner'))
        {

            foreach($request->file('banner') as $image)
            {
                $filename=time().$image->getClientOriginalName();
                $image->move(public_path().'/images/', $filename);
                 $data[] = $filename;
            }
            $up = Property::findorfail($id);

            $up->banner=json_encode($data);
            $up->title=$request->title;
            $up->city=$request->location;
            $up->price=$request->price;
            $up->area1=$request->area1;
            $up->province=$request->province;
            $up->status=$request->status;
            $up->description=$request->description;
            $up->save();
            return redirect(url('admin/shops'));
        }
else{
    $up = Property::findorfail($id);
    $up->title=$request->title;
    $up->city=$request->location;
    $up->price=$request->price;
    $up->area1=$request->area1;
    $up->province=$request->province;
    $up->status=$request->status;
    $up->description=$request->description;
    $up->save();
    return redirect(url('admin/shops'));
}
}

}
