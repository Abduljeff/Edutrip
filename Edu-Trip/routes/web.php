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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','IndexController@index');

Route::match(['get','post'], '/admin','AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/events/{url}','EventController@events');

Route::get('event/{id}','EventController@event');

Route::get('/login-register','UsersController@userLoginRegister');

Route::post('/user-register','UsersController@register');

Route::post('user-login','UsersController@login');

Route::get('/user-logout','UsersController@logout');

Route::get('search', 'IndexController@search');

Route::group(['middleware'=>['frontlogin']],function(){
	Route::match(['get','post'],'account','UsersController@account');
	Route::match(['get','post'],'user-details/{user_id}','UsersController@userDetails');
	Route::get('/messages','UsersController@messages');
	Route::get('/messages/sent-messages','UsersController@sentMessages');
	Route::get('/messages/delete-message/{id}','UsersController@deleteMessage');
	Route::get('/my-reservations','ReservationController@myReservation');
	Route::match(['get','post'],'schedule-a-trip/{id}','ReservationController@schedATrip');
});

// Route::match(['GET','POST'],'/login-register','UsersController@register');

Route::match(['GET','POST'],'/check-email','UsersController@checkEmail');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/admin/dashboard','AdminController@dashboard');
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
	Route::match(['get','post'], '/admin/update-pwd','AdminController@updatePassword');
	//Categories Routes (Admin)
	Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
	Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
	Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
	Route::get('/admin/view-categories','CategoryController@viewCategories');
	// Events Routes (Admin)
	Route::match(['get','post'],'/admin/add-event','EventController@addEvent');
	Route::match(['get','post'],'/admin/edit-event/{id}','EventController@editEvent');	
	Route::get('/admin/view-event','EventController@viewEvent');
	Route::get('/admin/delete-event/{id}','EventController@deleteEvent');
	Route::get('/admin/delete-event-image/{id}','EventController@deleteEventImage');
	// Reservations Routes (Admin)
	Route::get('/admin/view-reservation','ReservationController@viewReservation');
	// Manage Users Toutes (Admin)
	Route::get('/admin/view-user','UsersController@viewUser');
	Route::get('/admin/delete-user/{id}','UsersController@deleteUser');
});

Route::group(['middleware'=>['auth','ownerlogin']],function(){
	// Owner
	Route::get('/owner/dashboard','AdminController@dashboard');
	Route::get('owner/settings','AdminController@settings');
	Route::get('/owner/check-pwd','AdminController@chkPassword');
	Route::match(['get','post'], '/owner/update-pwd','AdminController@updatePassword');
	// Events Routes (Owner)
	Route::match(['get','post'],'/owner/add-event','EventController@addEvent');
	Route::match(['get','post'],'/owner/edit-event/{id}','EventController@editEvent');	
	Route::get('/owner/view-event','EventController@viewEvent');
	Route::get('/owner/delete-event/{id}','EventController@deleteEvent');
	Route::get('/owner/delete-event-image/{id}','EventController@deleteEventImage');
	// Reservations Routes (Admin)
	Route::get('/owner/view-reservation','ReservationController@viewReservation');
});

Route::get('/logout','AdminController@logout');


