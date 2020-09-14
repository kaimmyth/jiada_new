<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::post('siginIn','ApiController@siginIn');


/* Ashish Agarwal*/ 
Route::post('login', 'ApiController@signIn');


Route::group(['middleware' => 'auth:api'], function () {
    // User needs to be authenticated to enter here.
    Route::post('logout', 'ApiController@logout');
    Route::post('userDetail', 'ApiController@userDetail');
    Route::post('change_password', 'ApiController@changePassword');
    Route::get('dashboard', 'ApiController@dashboard');
    Route::get('land_registrations', 'ApiController@LandRegistrationList');
    Route::get('land_inventories', 'ApiController@TotalLands');
    Route::get('customers', 'ApiController@Customers');
    Route::get('tickets', 'ApiController@Tickets');
    Route::get('messages', 'ApiController@Messages');
});
