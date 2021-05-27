<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VaccineModel;
use App\SuperAdminModel;
use App\VaccinationRecordModel;
use App\UsersModel;
use App\child_information_model;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    function dashboard_view()
    {
        return view('dashboard');
    }


    function vaccine_details_view()
    {
        return view('vaccine_details');
    }


    function my_profile_view()
    {
        return view('my_profile');
    } 


    function add_category_view()
    {
        return view('add_category');
    } 


    function edit_category_view()
    {
        return view('edit_category');
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

    function manage_notice_view()
    {
        return view('notice_list');
    }
    function create_notice()
    {
        return view('create_notice');
    }
    function update_notice_view()
    {
        return view('update_notice');
    }
  
    // =============
    function SuperAdminregistration(Request $request)
    {
        $admin = new SuperAdminModel();
        $admin->name=$request->name;
        $admin->employee_id=$request->employee_id;
        $admin->phone_number=$request->phone_number;
        $admin->email=$request->email;
        $admin->password=$request->password;
        $admin->Save();
        return back()->with('registration','You Have Successfully Registered As a Super Admin');
    }

    function profile_data(Request $result)
    {
        $result = SuperAdminModel::where("employee_id",$result->session()->get("employee_id"))->get();
        return view('my_profile',compact('result'));

    }

    function view_list_data($id)
    {
      $result= SuperAdminModel::find($id);
      return view('edit_profile',compact('result'));
    }

    function SuperAdminUpdate(Request $request)
    {
        $admin= SuperAdminModel::find($request->id);
        $admin->name=$request->name;
        $admin->phone_number=$request->phone_number;
        $admin->Save();
        return back()->with('/admin/edit_profile','Successfully Updated');
    }

    function dashboard_data()
    {
        $count_vaccine=VaccineModel::count();
        $count_ha=UsersModel::where('role','=','Health_Asistant')->count();
        $count_child=child_information_model::count();

     
        $user_info = DB::table('vaccination_record')
                 ->select('vaccine_name', DB::raw('count(*) as total'))
                 ->groupBy('vaccine_name')
                 ->get();
        foreach($user_info as $row)
         {
            $data[] = array
             (
              'label'=>$row->vaccine_name,
              'y'=>$row->total
             ); 
         }

        return view('dashboard',compact('count_vaccine','count_ha','count_child','data'));
    }



}
