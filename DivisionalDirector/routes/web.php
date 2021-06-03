<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'division'],function(){

    // ========================Dashboard=========================
    Route::get('/','Divisional_Director@dashboard_view')->middleware('loginCheck');
    Route::get('/','Divisional_Director@dashboard_data')->middleware('loginCheck');


    // =======================Edit profile routes=======================
    Route::get('/edit_profile','Divisional_Director@edit_profile_view')->middleware('loginCheck');
    Route::get('/edit_profile','Divisional_Director@Dropdowns')->middleware('loginCheck');
    Route::post('/updateHA','RegistrationController@onUpdateHA')->middleware('loginCheck');

    // =======================My profile routes=======================
    Route::get('/my_profile','Divisional_Director@my_profile_view')->middleware('loginCheck');
    Route::get('/my_profile','Divisional_Director@profile_data')->middleware('loginCheck');

    // =======================Health Assistant registration routes=======================
    Route::get('/registration','Divisional_Director@registration_view');
    Route::get('/registration','RegistrationController@Dropdowns');
    Route::post('/HAinsert', 'RegistrationController@HAregistration');

    // =======================login  routes=======================
    Route::get('/login','Divisional_Director@login_view');
    Route::get('/logout','LoginController@onLogout');
    // =======================Change Password  routes=======================
    Route::post('/my_profile','LoginController@changePassword')->middleware('loginCheck');

    // =======================Notice routes=======================
    Route::get('/notice_list','Divisional_Director@notice_list')->middleware('loginCheck');
    Route::get('/notice_list','Divisional_Director@show_notice_list')->middleware('loginCheck');
    Route::get('/notice_view/{id}','Divisional_Director@notice_view')->middleware('loginCheck');

    // ======================search Health Assistant==================
    Route::get('/search_health_assistant','Divisional_Director@search_health_assistant_view')->middleware('loginCheck');
    Route::get('/search_health_assistant','Divisional_Director@search_Health_assistant')->middleware('loginCheck');




});

Route::post('/onLogin','LoginController@onLogin');
