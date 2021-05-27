<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin'],function(){

// ===================Dashboard===================
Route::get('/','HomeController@dashboard_view')->middleware('loginCheck');

Route::get('/','HomeController@dashboard_data')->middleware('loginCheck');


// ===================Registration===================
Route::get('/registration','HomeController@registration_view');

Route::post('/registration', 'HomeController@SuperAdminregistration');

// ===================Login===================
Route::get('/login','HomeController@login_view');

Route::get('/logout','LoginController@onLogout');

// ===================Change Password===================
Route::post('/my_profile','LoginController@changePassword')->middleware('loginCheck');

// ===================Vaccine Details===================
Route::get('/vaccine_details','HomeController@vaccine_details_view')->middleware('loginCheck');

Route::get('/add_category','HomeController@add_category_view')->middleware('loginCheck');

Route::post('/add_category','VaccineController@add_new_vaccine')->middleware('loginCheck');

Route::get('/vaccine_details','VaccineController@show_vaccine_list')->middleware('loginCheck');

Route::get('/edit_category','HomeController@edit_category_view')->middleware('loginCheck');

Route::get('/edit_category/{vaccine_id}','VaccineController@edit_vaccine')->middleware('loginCheck');

Route::Post('/edit_category','VaccineController@update_vaccine')->middleware('loginCheck');

Route::get('/delete/{vaccine_id}','VaccineController@delete_vaccine')->middleware('loginCheck');

// ===================My Profile===================
Route::get('/my_profile','HomeController@my_profile_view')->middleware('loginCheck');

Route::get('/my_profile','HomeController@profile_data')->middleware('loginCheck');

// ===================edit Profile===================
Route::get('/edit_profile','HomeController@edit_profile_view')->middleware('loginCheck');

Route::get('/edit_profile/{id}','HomeController@view_list_data')->middleware('loginCheck');

Route::post('/edit_profile','HomeController@SuperAdminUpdate')->middleware('loginCheck');
// ===================Manage Notice===================
Route::get('/notice_list','HomeController@manage_notice_view')->middleware('loginCheck');

Route::get('/create_notice','HomeController@create_notice')->middleware('loginCheck');

Route::post('/create_notice','NoticeController@create_new_notice')->middleware('loginCheck');

Route::get('/notice_list','NoticeController@show_notice_list')->middleware('loginCheck');

Route::get('/deleteNotice/{id}','NoticeController@delete_notice')->middleware('loginCheck');

Route::get('/update_notice','HomeController@update_notice_view')->middleware('loginCheck');

Route::get('/update_notice/{id}','NoticeController@notice_data')->middleware('loginCheck');

Route::Post('/update_notice','NoticeController@update_notice')->middleware('loginCheck');

Route::get('/notice_view/{id}','NoticeController@notice_view')->middleware('loginCheck');




});

Route::post('/onLogin','LoginController@onLogin');
