<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\BookController;

use App\Http\Controllers\RequestController;

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

Route::get('/', function () {
    return view('welcome');
});




route::post('/customerread', [CustomerController::class,'store']);

Route::get('/logout',[CustomerController::class, 'logout']);

Route::post('/userlogin',[CustomerController::class,'check']);



Route::group(['middleware'=>['LoginCheck']], function(){

Route::get('/login',[CustomerController::class, 'login']);

Route::get('/adminhome',[CustomerController::class, 'adminhome']);

Route::get('/custhome',[CustomerController::class, 'custhome']);

route::get('/viewcustomer',[CustomerController::class,'index']);

route::get('/register',[CustomerController::class,'create']);

route::get('/rqstbook',[CustomerController::class,'custid']);

Route::get('/home',[CustomerController::class,'dashboard']);

Route::get('/profile',[CustomerController::class,'profile']);


route::get('/success',[BookController::class,'success']);

route::get('/addbook',[BookController::class,'create']);

route::post('/search',[BookController::class,'search']);

route::post('/bookadd', [BookController::class,'store']);

route::get('/viewbook',[BookController::class,'index']);

route::get('/customerbook',[BookController::class,'custbookview']);

route::get('/editview/{id}', [BookController::class,'edit']);

route::get('/deleteview/{id}', [BookController::class,'deleteview']);

route::post('/bookeditprocess/{id}', [BookController::class,'update']);

route::post('/bookdeleteprocess/{id}',[BookController::class,'destroy']);

route::get('/genre',[BookController::class,'createg']);

route::get('/addgenre',[BookController::class,'getAllGenre']);

route::post('/genreadd', [BookController::class,'storeg']);

route::get('/productdetails/{id}', [BookController::class,'productdetails']);

route::post('/add_to_cart', [BookController::class,'addtocart']);

route::get('/cartlist',[BookController::class,'cartlist']);

route::get('/myorder',[BookController::class,'myorder']);

route::get('/total',[BookController::class,'total']);

route::get('/removebook/{id}', [BookController::class,'removecart']);

route::get('/payment',[BookController::class,'payment']);

route::post('/order',[BookController::class,'order']);

route::get('/adminvieworder',[BookController::class,'vieworder']);

route::get('/report',[BookController::class,'report']);

route::post('/orderreport', [BookController::class,'orderreport']);




route::post('/rqstadd', [RequestController::class,'rqststore']);

route::get('/rqstadd',[RequestController::class,'rqstcreate']);

route::get('/viewrequest',[RequestController::class,'index']);

route::get('/adminviewrequest',[RequestController::class,'abc']);

route::get('/editrequest/{id}', [RequestController::class,'edit']);

route::get('/deleterequest/{id}', [RequestController::class,'deleteview']);

route::post('/requesteditprocess/{id}', [RequestController::class,'update']);

route::post('/requestdeleteprocess/{id}',[RequestController::class,'destroy']);

});



Route::get('/error', function () {
    return view('error');
});

Route::get('/success', function () {
    return view('success');
});



