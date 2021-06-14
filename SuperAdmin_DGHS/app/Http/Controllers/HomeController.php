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
    function manage_employee_view()
    {
        return view('manage_employee');
    }
    function health_assistant_list_view()
    {
        return view('health_assistant_list');
    }
    function super_intendent_list_view()
    {
        return view('super_intendent_list');
    }

    function health_inspector_list_view()
    {
        return view('health_inspector_list');
    }

    function divitional_director_list_view()
    {
        return view('divitional_director_list');
    }
    // =======Ssuper admin registration update profile======
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
// ===========Super Admin Dashboard Data==========
    function dashboard_data()
    {
        $count_vaccine=VaccineModel::count();
        $count_ha=UsersModel::where('role','=','Health_Asistant')->count();
        $count_SI=UsersModel::where('role','=','Super_Intendent')->count();
        $count_HI=UsersModel::where('role','=','Health_Inspector')->count();
        $count_DD=UsersModel::where('role','=','Divisional_Director')->count();
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

        return view('dashboard',compact('count_vaccine','count_ha','count_child','data','count_SI','count_HI','count_DD'));
    }
    // ===========Manage Employee==========
    public function search_employee(Request $request)
    { 
        $employee_id=$request->input('employee_id');

        $result = UsersModel::query()
            ->where('employee_id',"{$employee_id}")
            ->get();
            return view('manage_employee', compact('result'));
    }

    public function delete_employee($id)
    {
        UsersModel::where('id',$id)->delete();
        return back()->with('/admin/manage_employee');
    }

    // ===========Health Assistant==========
    public function show_health_assistant_list()
    {
        $result= UsersModel::orderBy('id', 'desc')->where('role',"Health_Asistant")->paginate(15);
        return view('health_assistant_list',compact('result'));
    }

    public function delete_health_assistant($id)
    {
        UsersModel::where('id',$id)->delete();
        return back()->with('/admin/health_assistant_list','succesfully deleted');
    }

    // ===========Super Intendent==========
    public function show_super_intendent_list()
    {
        $result= UsersModel::orderBy('id', 'desc')->where('role',"Super_Intendent")->paginate(15);
        return view('super_intendent_list',compact('result'));
    }
    public function delete_super_intendent($id)
    {
        UsersModel::where('id',$id)->delete();
        return back()->with('/admin/super_intendent_list','succesfully deleted');
    }

    // ===========Health Inspector==========
    public function show_health_inspector_list()
    {
        $result= UsersModel::orderBy('id', 'desc')->where('role',"Health_Inspector")->paginate(15);
        return view('health_inspector_list',compact('result'));
    }
    public function delete_health_inspector($id)
    {
        UsersModel::where('id',$id)->delete();
        return back()->with('/admin/health_inspector_list','succesfully deleted');
    }

    // ===========Divisional Director==========
    public function show_divisional_director_list()
    {
        $result= UsersModel::orderBy('id', 'desc')->where('role',"Divisional_Director")->paginate(15);
        return view('divisional_director_list',compact('result'));
    }
    public function delete_divisional_director($id)
    {
        UsersModel::where('id',$id)->delete();
        return back()->with('/admin/divisional_director_list','succesfully deleted');
    }

}
