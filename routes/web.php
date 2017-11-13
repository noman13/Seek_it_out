<?php
use App\Restaurant;
use Illuminate\Support\Facades\Input;
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
    return view('home');
});
//Searches for restaurant
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $restaurant = Restaurant::where('title','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->orWhere('total_seat','LIKE','%'.$q.'%')->orWhere('avail_seat','LIKE','%'.$q.'%')->get();
    if(count($restaurant) > 0)
        return view('search')->withDetails($restaurant)->withQuery ( $q );
    else return view ('search')->withMessage('No Details found. Try to search again !');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('Restaurants', 'RestaurantsController');
Route::resource('Categories', 'CategoriesController');
Route::resource('Seats', 'SeatsController');
Route::resource('Reservations', 'ReservationsController');
Route::resource('Payments', 'PaymentsController');

Route::get('/post', 'PostController@index')->middleware('auth');
Route::post('/post', 'PostController@store')->middleware('auth');
Route::get('/post/{id}', 'PostController@show')->name('post.show');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::put('/post/{id}/edit', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.delete')->middleware('auth');
Route::post('/Comment', 'CommentsController@index')->middleware('auth');
Route::get('/Comment/{id}/edit', 'CommentsController@edit')->name('comment.edit');
Route::put('/Comment/{id}/edit', 'CommentsController@update')->name('comment.update');
Route::delete('/Comment/{id}/delete', 'CommentsController@destroy')->name('comment.delete')->middleware('auth');

//factory(App\BookingCategory::class, 25)->create();

