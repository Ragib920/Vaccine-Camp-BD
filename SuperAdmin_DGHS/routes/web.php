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

// ==========================Manage Employee==============================
Route::get('/manage_employee','HomeController@manage_employee_view')->middleware('loginCheck');

Route::get('/manage_employee','HomeController@search_employee')->middleware('loginCheck');

Route::get('/deleteEmployee/{id}','HomeController@delete_employee')->middleware('loginCheck');

// =========Health Assistant========
Route::get('/health_assistant_list','HomeController@health_assistant_list_view')->middleware('loginCheck');

Route::get('/health_assistant_list','HomeController@show_health_assistant_list')->middleware('loginCheck');

Route::get('/deleteHA/{id}','HomeController@delete_health_assistant')->middleware('loginCheck');

// =========Super Intendent========
Route::get('/super_intendent_list','HomeController@super_intendent_list_view')->middleware('loginCheck');

Route::get('/super_intendent_list','HomeController@show_super_intendent_list')->middleware('loginCheck');

Route::get('/deleteSI/{id}','HomeController@delete_super_intendent')->middleware('loginCheck');

// =========Health Inspector========
Route::get('/health_inspector_list','HomeController@health_inspector_list_view')->middleware('loginCheck');

Route::get('/health_inspector_list','HomeController@show_health_inspector_list')->middleware('loginCheck');

Route::get('/deleteHI/{id}','HomeController@delete_health_inspector')->middleware('loginCheck');

// =========Divisional Director========
Route::get('/divisional_director_list','HomeController@divisional_director_list_view')->middleware('loginCheck');

Route::get('/divisional_director_list','HomeController@show_divisional_director_list')->middleware('loginCheck');

Route::get('//deleteDI/{id}','HomeController@delete_divisional_director')->middleware('loginCheck');



});

Route::post('/onLogin','LoginController@onLogin');
