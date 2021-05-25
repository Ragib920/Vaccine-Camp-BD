<?php

namespace App\Http\Controllers;
use App\child_information_model;
use App\VaccineModel;
use App\VaccinationRecordModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class child_controller extends Controller
{

  
    public function search(Request $request)
    {
        // Get the search value from the request
        $birth_registration_number = $request->input('birth_registration_number');

        $request->session()->put('birth_registration_number',$birth_registration_number);
        
        $result = child_information_model::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->get();
        
       
        $vaccine_name= VaccineModel::pluck('vaccine_name');

        $bcg_vaccine= VaccinationRecordModel::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->where('vaccine_name',"BCG")
            ->get();
        
        $Pentavalent_vaccine= VaccinationRecordModel::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->where('vaccine_name',"Pentavalent")
            ->get();

        $pvc_vaccine= VaccinationRecordModel::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->where('vaccine_name',"PVC")
            ->get();  
           
        $bopv_vaccine= VaccinationRecordModel::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->where('vaccine_name',"BOPV")
            ->get();  
        
        $ipv_vaccine= VaccinationRecordModel::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->where('vaccine_name',"IPV")
            ->get();  

        $mr_vaccine= VaccinationRecordModel::query()
            ->where('birth_registration_number',"{$birth_registration_number}")
            ->where('vaccine_name',"MR")
            ->get();     
            
        return view('search_child_profile', compact('result','bcg_vaccine','vaccine_name','Pentavalent_vaccine','pvc_vaccine','bopv_vaccine','ipv_vaccine','mr_vaccine'));
    }
    
    function child_profile_data(Request $request)
    {
        
        $result = child_information_model::where("birth_registration_number",$request->session()->get("birth_registration_number"))->get();
        return view('edit_child_profile',compact('result'));

    }

    function update_child_info(Request $req)
    {
        $child_name = $req->input('child_name');
        $gender =  $req->input('gender');
        $father_name = $req->input('father_name');
        $mother_name = $req->input('mother_name');
        $parents_phone_number = $req->input('parents_phone_number');
        $birth_registration_number = $req->input('birth_registration_number');
        
        $result = DB::update('UPDATE `child_information` SET `child_name`=?,`gender`=?,`father_name`=?,`mother_name`=?,`parents_phone_number`=? WHERE `birth_registration_number`=?', [$child_name,$gender,$father_name,$mother_name,$parents_phone_number,$birth_registration_number]);

        if($result==true){
            // return " Child Information Successfull updated";
            return back()->with('/word/edit_child_profile','You have successfully Updated');

        }
        else{
            // return "Failed to Update Child Information";
            return back()->with('/word/edit_child_profile','Update Failed');

        }
    }

    function InsertStatus(Request $request )
    {
      $VaccinationRecord= new VaccinationRecordModel();
      $VaccinationRecord->birth_registration_number=$request->session()->get("birth_registration_number");
      $VaccinationRecord->vaccine_name=$request->vaccine_name;
      $VaccinationRecord->dose_no=$request->dose_no;
      $VaccinationRecord->employee_id=$request->session()->get("employee_id");
      $VaccinationRecord->save();

      return back()->with('/word/search_child_profile','Record Successfullly Added');
    }

    // public function show_vaccination_list(Request $request )
    // {
    //     $birth_registration_number=$request->session()->get("birth_registration_number");

    //     $all= VaccinationRecordModel::query()
    //         ->where('birth_registration_number',"{$birth_registration_number}")
    //         ->get();
    //     return view('search_child_profile',compact('all'));
    // }




}
