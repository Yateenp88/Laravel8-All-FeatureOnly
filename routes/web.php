<?php

use Illuminate\Support\Facades\Route;
//Manually Define Path For Each Controller
use App\Http\Controllers\myform;
use App\Http\Controllers\myLogin;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\StoreData;
use App\Http\Controllers\QueryList;
use App\Http\Controllers\oneToMany;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('welcome');
});
//-------------

//-----------For Mix
Route::view('profile','profile');


Route::view('form','form');

Route::post('formSubmit',[myform::class,'index']);
//-----------Flash Data concept
Route::view('store','store');

Route::post('storeData',[StoreData::class,'storeData1']);
//--------------
Route::view('denied','denied');
//Use In Middleware -Group Ex
Route::group(['middleware'=>['groupPage']],function(){
    Route::view('users','users');
});

//Route::get('users',[myform::class,'dbConnect']);

Route::get('users',[myform::class,'getData']);

Route::view('userlogin','userlogin');

//Route Add Data In DB

Route::view('adddata','adddata');
Route::post('insertData',[myform::class,'addData']);

//Form submit post data using controller
Route::post('makeLogin',[UserAuth::class,'userLogin']);

//It will kill session and redirect login 
Route::get('/logout',function()
{
    if(session()->has('username')){
        session()->pull('username',null);  //It will kill session
    }
    return redirect('userlogin');
});

//If Already Login session it will redirect to main if not then it view userlogin
Route::get('/userlogin',function()
{
    if(session()->has('username')){
        return redirect('denied');  //If session active then 
    }
    return view('userlogin');
});

//Pagination
//Route::view('pagination','pagination');
Route::get('page',[myform::class,'showData']);

Route::get('list',[myform::class,'viewList']);
Route::get('delete/{id}',[myform::class,'delete']);
Route::get('edit/{id}',[myform::class,'edData']);
Route::post('edit',[myform::class,'update']);
//----------------Query Builder Exp-------------------------------
Route::get('query',[QueryList::class,'operation']);
Route::get('tblist',[QueryList::class,'queryTable']);
Route::get('tblist2',[QueryList::class,'queryTable2']);
Route::get('tblist3',[QueryList::class,'queryTable3']);
Route::get('getcount',[QueryList::class,'countTable']);
Route::get('add',[QueryList::class,'insertData']);
Route::get('update',[QueryList::class,'updateData']);
Route::get('delete',[QueryList::class,'deleteData']);
Route::get('join',[QueryList::class,'joinData']);

Route::get('relation',[oneToMany::class,'oneToManyRelation']);


Route::view('login','login');
Route::post('mylogin',[myLogin::class,'mylogin']);
Route::view('registration','registration');
Route::post('userRegister',[myLogin::class,'userRegister']);

Route::view('homepage','homepage');

Route::get('mail',[myLogin::class,'sendEmail']);