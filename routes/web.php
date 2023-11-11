<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::view('/admin/provider', 'tenant/common/provider', ["showForm"=>false,"status"=>1]);
Route::view('/admin/provider/create-provider', 'tenant/common/provider', ["showForm"=>true,'status'=>1]);

Route::view('/admin/all-industry', 'tenant/common/industry', ["showForm"=>false,"status"=>1]);

// Admin Booking Routes
			Route::view('/admin/booknow/create', 'tenant/common/bookings/booknow', ["showForm"=>true]);
			Route::view('/admin/bookings/today', 'tenant/common/bookings/booking-list', ["bookingType"=>"Today's"]);
			Route::view('/admin/bookings/upcoming', 'tenant/common/bookings/booking-list', ["bookingType"=>"Upcoming"]);
			Route::view('/admin/bookings/past', 'tenant/common/bookings/booking-list', ["bookingType"=>"Past"]);
			Route::view('/admin/bookings/pending-approval', 'tenant/common/bookings/booking-list', ["bookingType"=>"Pending Approval"]);
			Route::view('/admin/bookings/drafts', 'tenant/common/bookings/booking-list', ["bookingType"=>"Draft"]);
			Route::view('/admin/bookings/unassigned', 'tenant/common/bookings/booking-list', ["bookingType"=>"Unassigned"]);
			Route::view('/admin/bookings/invitations', 'tenant/common/bookings/booking-list', ["bookingType"=>"Invitations"]);
