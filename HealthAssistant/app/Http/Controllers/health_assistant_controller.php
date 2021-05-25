<?php

namespace App\Http\Controllers;
use App\health_assistant_model;
use App\UsersModel;
use Illuminate\Support\Facades\DB;
use App\VaccineModel;
use Illuminate\Http\Request;

class health_assistant_controller extends Controller
{
    function dashboard_view()
    {
        return view('dashboard');
    }


    function child_registration_view()
    {
        return view('child_registration');
    }
    
    function search_child_profile_view()
    {
        return view('search_child_profile');
    }


    function vaccine_details_view()
    {
        return view('vaccine_details');
    }

    function my_profile_view()
    {
        return view('my_profile');
    }

    function login_view()
    {
        return view('login');
    }

    function registration_view()
    {
        return view('registration');
    }

    function edit_profile_view()
    {
        return view('edit_profile');
    }

    function edit_child_profile_view()
    {
        return view('edit_child_profile');
    }

    // =============My profile page==============

    function profile_data(Request $result)
    {
        $result = UsersModel::where("employee_id",$result->session()->get("employee_id"))->get();
        return view('my_profile',compact('result'));

    }

    // =============Edit profile page==============

    function Dropdowns(Request $request)
    {
        $dividion=array("Barisal","Chittagoang","Dhaka","Khulna","Mymensingh","Rajshahi","Rangpur","Sylhet");

        $district=array("Bagerhat","Bandarban","Barguna","Barisal","Bhola","Bogra","Brahmanbaria","chadpur","Chittagoang","Chuadanga","Comilla","Cox'x Bazar","Dhaka","Dinajpur","Faridpur","Feni","Gaibandha","Gazipur","Gopalgoanj","Habijanj","Jaipurhat","Jamalour","Jessore","Jhalakati","Jhenaidah","Khagrachari "," Khulna","Kishoreganj ","Kurigram ","Kushtia ","Lakshmipur ","Lalmonirhat ","Madaripur "," Magura"," Manikganj","Meherpur ","Moulvibazar ","Munshiganj ","Mymensingh "," Naogaon","Narail ","Narayanganj "," Narsingdi"," Natore"," Nawabganj","Netrakona "," Nilphamari","Noakhali ","Pabna "," Panchagarh","Parbattya Chattagram ","Patuakhali ","Pirojpur ","Rajbari ","Rajshahi ","Rangpur ","Satkhira ","Shariatpur ","Sherpur "," Sirajganj","Sunamganj ","Sylhet ","Tangail ","Thakurgaon ",);

        $word_no=array("1","2","3","4","5","6","7","8","9","10");

        $result = UsersModel::where("employee_id",$request->session()->get("employee_id"))->get();

        
        return view('/edit_profile',['divisionKey'=>$dividion,'districtKey'=>$district,'wordKey'=>$word_no,'dataKey'=>$result]);
    }

    // ====================Vaccine Details======================

    public function show_vaccine_list()
    {
        $result= VaccineModel::all();
        return view('vaccine_details',compact('result'));
    }


}
