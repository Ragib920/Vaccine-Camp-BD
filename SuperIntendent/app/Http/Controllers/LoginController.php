<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\health_assistant_model;
use App\UsersModel;

class LoginController extends Controller
{
    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/district/login');
    }


    function onLogin(Request $request){
       $employee_id= $request->input('employee_id');
       $password= $request->input('password');
       $countValue=UsersModel::where('employee_id','=',$employee_id)->where('password','=',$password)->where('role','=',"Super_Intendent")->count();

        if($countValue==1){
            $request->session()->put('employee_id',$employee_id);                                                                                                                                                                                                                                                                                                              
            return 1;
        }
        else{
            return 0;
        }

    }

    function changePassword(Request $request){
        $id= $request->input('id');
        $old_password= $request->input('old_password');
        $countValue=UsersModel::where('id','=',$id)->where('password','=',$old_password)->count();
 
         if($countValue==1){
            $healthAssistant= UsersModel::find($request->id);
            $healthAssistant->password=$request->password;
            $healthAssistant->save();
            return back()->with('/district/my_profile','Password Succrssfully Changed');
         }
         else{
            return back()->with('/district/my_profile','Old password dose not match');
         }
 
     }



}
