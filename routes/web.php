<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use \Illuminate\Support\Facades\Route;
use App\Property;


Route::get('/','PageController@index');
Route::get('houses','PageController@houses');
Route::get('offices','PageController@offices');
Route::get('lands','PageController@lands');
Route::get('shops','PageController@shops');
Route::get('apartments','PageController@apartments');

Route::get('about','PageController@about');
Route::get('contact','PageController@contact');
Route::post('contact_us','PageController@contactus');

Route::get('abroad/{id}','PageController@abroadpro')->name('abroad');
Route::get('boffice/{id}','PageController@boffice')->name('boffice');
Route::get('bland/{id}','PageController@bland')->name('bland');
Route::get('bapartment/{id}','PageController@bapartment')->name('bapartment');


Route::get('reg','PageController@register');
Route::get('addproperty','PageController@addproperty');
Route::resource('broad', 'AbroadController');

Route::get('survey','PageController@survey');
Route::get('survey/eng','PageController@surveyeng');
Route::get('survey1','PageController@survey1');
Route::get('survey1/eng','PageController@surveyeng1');




Auth::routes();

Route::resource('/home', 'PropertyController');
Route::resource('/photo', 'PhotoController');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\adminloginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\adminloginController@login')->name('admin.login.submit');
    Route::get('/users', 'AdminController@users');
    Route::get('/apartments', 'AdminController@apartments');
    Route::get('/houses', 'AdminController@houses');
    Route::get('/offices', 'AdminController@offices');
    Route::get('/lands', 'AdminController@lands');
    Route::get('/shops', 'AdminController@shops');

    Route::get('/home', 'AdminController@index')->name('admin/home');
    Route::get('/logout', 'Auth\adminloginController@logout')->name('admin.logout');
    Route::get('users/{id}','AdminController@destroyuser')->name('users.delete');
    
     Route::get('editusers/{id}','AdminController@editusers')->name('editusers');
    Route::put('userupdate/{id}','AdminController@updateusers')->name('users.update');


    Route::get('editapartment/{id}','AdminController@editapartment')->name('editapartment');
    Route::put('updateapartment/{id}','AdminController@updateapartment')->name('updateapartment');


    Route::get('delete/{id}','AdminController@destroyproperty')->name('property.delete');
    Route::get('edit/{id}','AdminController@edithouses')->name('property.edit');
    Route::put('update/{id}','AdminController@updatehouses')->name('property.update');

    Route::get('officeedit/{id}','AdminController@editoffices')->name('offices.edit');
    Route::put('officeupdate/{id}','AdminController@updateoffices')->name('offices.update');

    Route::get('landsedit/{id}','AdminController@editlands')->name('lands.edit');
    Route::put('landsupdate/{id}','AdminController@updatelands')->name('lands.update');

    Route::get('shopsedit/{id}','AdminController@editshops')->name('shops.edit');
    Route::put('shopsupdate/{id}','AdminController@updateshops')->name('shops.update');

    Route::get('abroadhouses', 'AdminController@abroadhouses');
    Route::get('abroadoffices', 'AdminController@abroadoffices');
    Route::get('abroadlands', 'AdminController@abroadlands');
    Route::get('abroadapartments', 'AdminController@abroadapartments');

});

Route::get('apartment/{id}','PageController@singleapartment')->name('apartment');

Route::get('office/{id}','PageController@singleoffice')->name('office');
Route::get('property/{id}','PageController@singlepro')->name('property');
Route::get('land/{id}','PageController@singleland')->name('land');
Route::get('shop/{id}','PageController@singleshop')->name('shop');
Route::post('search_results','PageController@Search')->name('search');
Route::post('profilepicture','ProfileController@profilepicture')->name('profilepicture');


Route::get('change-language/{name}','LanguageController@ChangeLanguage');

Route::get('count',function (){

    $count = Property::where(['type'=>'shop'])->get()->count();
    echo $count;
});




