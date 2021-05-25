<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'word'],function(){

    // ========================Dashboard=========================
    Route::get('/','health_assistant_controller@dashboard_view')->middleware('loginCheck');

    // =======================search child profile routes=======================
    Route::get('/search_child_profile','health_assistant_controller@edit_child_profile_view')->middleware('loginCheck');
    Route::get('/search_child_profile','child_controller@search')->middleware('loginCheck');

    // =======================edit child profile routes=======================
    Route::get('/edit_child_profile','health_assistant_controller@edit_child_profile_view')->middleware('loginCheck');
    Route::get('/edit_child_profile','child_controller@child_profile_data')->middleware('loginCheck');
    Route::post('/ChildUpdate','child_controller@update_child_info')->middleware('loginCheck');

    // =======================Edit profile routes=======================
    Route::get('/edit_profile','health_assistant_controller@edit_profile_view')->middleware('loginCheck');
    Route::get('/edit_profile','health_assistant_controller@Dropdowns')->middleware('loginCheck');
    Route::post('/updateHA','RegistrationController@onUpdateHA')->middleware('loginCheck');

    // =======================My profile routes=======================
    Route::get('/my_profile','health_assistant_controller@my_profile_view')->middleware('loginCheck');
    Route::get('/my_profile','health_assistant_controller@profile_data')->middleware('loginCheck');

    // =======================Child registration routes=======================
    Route::get('/child_registration','health_assistant_controller@child_registration_view')->middleware('loginCheck');
    Route::Post('/ChildInsert','RegistrationController@child_info_register')->middleware('loginCheck');

    // =======================Health Assistant registration routes=======================
    Route::get('/registration','health_assistant_controller@registration_view');
    Route::get('/registration','RegistrationController@Dropdowns');
    Route::post('/HAinsert', 'RegistrationController@HAregistration');

    // =======================login  routes=======================
    Route::get('/login','health_assistant_controller@login_view');
    Route::get('/logout','LoginController@onLogout');
    // =======================Change Password  routes=======================
    Route::post('/my_profile','LoginController@changePassword')->middleware('loginCheck');

    // =======================Vaccine Details  routes=======================
    Route::get('/vaccine_details','health_assistant_controller@vaccine_details_view')->middleware('loginCheck');
    Route::get('/vaccine_details','health_assistant_controller@show_vaccine_list')->middleware('loginCheck');

    // =======================Vaccination status routes=======================
    Route::post('/search_child_profile','child_controller@InsertStatus')->middleware('loginCheck');
    // Route::get('/search_child_profile','child_controller@show_vaccination_list')->middleware('loginCheck');





});

Route::post('/onLogin','LoginController@onLogin');


// word/upazilla/