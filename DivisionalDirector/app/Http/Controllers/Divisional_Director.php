<?php

namespace App\Http\Controllers;

use App\UsersModel;
use App\VaccineModel;
use App\noticeModel;
use App\child_information_model;
use App\VaccinationRecordModel;
use Illuminate\Http\Request;

class Divisional_Director extends Controller
{
    function dashboard_view()
    {
        return view('dashboard');
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

    function notice_list()
    {
        return view('notice_list');
    }

    function search_health_assistant_view()
    {
        return view('search_health_assistant');
    }

    // =============My profile page==============

    function profile_data(Request $request)
    {
        $result = UsersModel::where("employee_id",$request->session()->get("employee_id"))->get();
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

    // ====================Dashboard======================

    function dashboard_data(Request $request)
    {
        $result= VaccineModel::all();
        $count_vaccine=VaccineModel::count();
        $count_ha=UsersModel::where('role','=','Health_Inspector')->count();
        return view('dashboard',compact('result','count_vaccine','count_ha'));
    }

 // ====================notice======================
    public function show_notice_list()
    {
        $result= noticeModel::orderBy('id', 'desc')->paginate(15);
        return view('notice_list',compact('result'));
    }
    public function notice_view($id)
    {
        $notice= noticeModel::find($id);
        return view('notice_view',compact('notice'));
    }

    public function search_Health_assistant(Request $request)
    {
        $employee_id=$request->input('employee_id');

        $result = UsersModel::query()
            ->where('employee_id',"{$employee_id}")
            ->where('role',"Health_Asistant")
            ->get();
        $count_registerd_child = child_information_model::where('employee_id',"{$employee_id}")->count();
        $count_vaccination = VaccinationRecordModel::where('employee_id',"{$employee_id}")->count();

        return view('search_health_assistant', compact('result','count_registerd_child','count_vaccination'));
    }
}
