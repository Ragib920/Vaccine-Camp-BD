<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegistrationController extends Controller
{

 
    function Dropdowns()
    {
        $dividion=array("Barisal","Chittagoang","Dhaka","Khulna","Mymensingh","Rajshahi","Rangpur","Sylhet");

        $district=array("Bagerhat","Bandarban","Barguna","Barisal","Bhola","Bogra","Brahmanbaria","chadpur","Chittagoang","Chuadanga","Comilla","Cox'x Bazar","Dhaka","Dinajpur","Faridpur","Feni","Gaibandha","Gazipur","Gopalgoanj","Habijanj","Jaipurhat","Jamalour","Jessore","Jhalakati","Jhenaidah","Khagrachari "," Khulna","Kishoreganj ","Kurigram ","Kushtia ","Lakshmipur ","Lalmonirhat ","Madaripur "," Magura"," Manikganj","Meherpur ","Moulvibazar ","Munshiganj ","Mymensingh "," Naogaon","Narail ","Narayanganj "," Narsingdi"," Natore"," Nawabganj","Netrakona "," Nilphamari","Noakhali ","Pabna "," Panchagarh","Parbattya Chattagram ","Patuakhali ","Pirojpur ","Rajbari ","Rajshahi ","Rangpur ","Satkhira ","Shariatpur ","Sherpur "," Sirajganj","Sunamganj ","Sylhet ","Tangail ","Thakurgaon ",);

        $word_no=array("1","2","3","4","5","6","7","8","9","10");

        return view('/registration',['divisionKey'=>$dividion,'districtKey'=>$district,'wordKey'=>$word_no]);
    }

    function HAregistration(Request $req)
    {

        $name = $req->input('name');
        $employee_id = $req->input('employee_id');
        $phone_number =  $req->input('phone_number');
        $email = $req->input('email');
        $password = $req->input('password');
        $division = $req->input('division');
        $district = $req->input('district');
        $upazilla = $req->input('upazilla');
        $union = $req->input('union');
        $word =  $req->input('word');
        $role =  $req->input('role');

        $result = DB::insert('INSERT INTO `users`(`name`, `employee_id`, `phone_number`, `email`, `password`, `division`, `district`, `upazilla`, `union`, `word`,`role`) VALUES (?,?,?,?,?,?,?,?,?,?,?)', [$name,$employee_id,$phone_number,$email,$password,$division,$district,$upazilla,$union,$word,$role]);

        if($result==true){
            // return "Registration Successfull";
            return back()->with('/division/registration','Registration Successfull');
        }
        else{
            // return "Registration Failed";
            return back()->with('/division/registration','Registration Failed');

        }
    }
 
    function onUpdateHA(Request $req)
    {
        $name = $req->input('name');
        $phone_number =  $req->input('phone_number');
        $division = $req->input('division');
        $district = $req->input('district');
        $upazilla = $req->input('upazilla');
        $union = $req->input('union');
        $word =  $req->input('word');
        $employee_id =  $req->input('employee_id');

        $result = DB::update('UPDATE `users` SET `name`=?,`phone_number`=?,`division`=?,`district`=?,`upazilla`=?,`union`=?,`word`=? WHERE `employee_id`=?',[$name,$phone_number,$division,$district,$upazilla,$union,$word,$employee_id]);

        if($result==true){
            
            return back()->with('/division/edit_profile','You have successfully Updated your Profile');

        }
        else{
           
            return back()->with('/division/edit_profile',' You do not change any data');
        }
    }






}
