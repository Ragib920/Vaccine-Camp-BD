<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'upazilla'],function(){

    // ========================Dashboard=========================
    Route::get('/','health_inspector_controller@dashboard_view')->middleware('loginCheck');
    Route::get('/','health_inspector_controller@dashboard_data')->middleware('loginCheck');


    // =======================Edit profile routes=======================
    Route::get('/edit_profile','health_inspector_controller@edit_profile_view')->middleware('loginCheck');
    Route::get('/edit_profile','health_inspector_controller@Dropdowns')->middleware('loginCheck');
    Route::post('/updateHA','RegistrationController@onUpdateHA')->middleware('loginCheck');

    // =======================My profile routes=======================
    Route::get('/my_profile','health_inspector_controller@my_profile_view')->middleware('loginCheck');
    Route::get('/my_profile','health_inspector_controller@profile_data')->middleware('loginCheck');

    // =======================Health Assistant registration routes=======================
    Route::get('/registration','health_inspector_controller@registration_view');
    Route::get('/registration','RegistrationController@Dropdowns');
    Route::post('/HAinsert', 'RegistrationController@HAregistration');

    // =======================login  routes=======================
    Route::get('/login','health_inspector_controller@login_view');
    Route::get('/logout','LoginController@onLogout');
    // =======================Change Password  routes=======================
    Route::post('/my_profile','LoginController@changePassword')->middleware('loginCheck');

    // =======================Notice routes=======================
    Route::get('/notice_list','health_inspector_controller@notice_list')->middleware('loginCheck');
    Route::get('/notice_list','health_inspector_controller@show_notice_list')->middleware('loginCheck');
    Route::get('/notice_view/{id}','health_inspector_controller@notice_view')->middleware('loginCheck');

    // ======================search Health Assistant==================
    Route::get('/search_health_assistant','health_inspector_controller@search_health_assistant_view')->middleware('loginCheck');
    Route::get('/search_health_assistant','health_inspector_controller@search_Health_assistant')->middleware('loginCheck');

    // ======================Report==================
    Route::get('/report','health_inspector_controller@report_view')->middleware('loginCheck');
    Route::get('/report','health_inspector_controller@report')->middleware('loginCheck');

    


});

Route::post('/onLogin','LoginController@onLogin');
