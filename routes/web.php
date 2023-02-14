<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use GuzzleHttp\Psr7\Request;
use Carbon\Carbon;


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


Route::controller(App\Http\Controllers\UserController::class)->group(function(){
    Route::get('/getProfileUsers','index');
    Route::get('/getCityUser/{id}','show');
    Route::get('/getCityUsers','index2');

});

Route::controller(CountryController::class)->prefix('country')->group(function(){
    Route::get('/all', 'index');
    Route::get('/users', 'getUsers');
});


Route::resource('categories', \App\Http\Controllers\CategoryController::class)->only([
    'index'
]);

Route::resource('products', \App\Http\Controllers\ProductController::class)->only([
    'index'
]);



Route::get('test', function () {
    return '!';
});

Route::get('user/test', function () {
    return '!!';
});

// Route::get('user/{id}', function ($id) {
//     return "User Id = ".$id;
// });

Route::get('sum/{num1}/{num2}', function ($num1, $num2) {
    return "Summa  = ".$num1 + $num2;
});

Route::get('users/show-{id}', function ($id) {
    return "User Id = ".$id;
});

//..  /user?id=5
// Route::get('/user', function(Illuminate\Http\Request $request){
//    $id = $request->get('id', 0);
//    dd($id);
// });

Route::get('user/{id}', function ($id) {
    dd($id);
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    dd($id, $name);
})->where(['id' => '[0-9]+', 'name' => '[a-z]{3,255}+']);

Route::get('articles/{date}', function ($date) {
    dd($date);
})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');

Route::get('/users/{order}', function ($order) {
    dd($order);
})->whereIn('order', ['name', 'surname', 'age']); 

Route::get('date/{year}/{month}/{day}', function($year, $month, $day){
    dd(Carbon::parse($year . '-' . $month . '-' . $day)->dayName);
})->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}',  'day' => '[0-9]{2}']);