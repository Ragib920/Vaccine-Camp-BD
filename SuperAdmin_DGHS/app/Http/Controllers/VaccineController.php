<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VaccineModel;


class VaccineController extends Controller
{



    public function add_new_vaccine(Request $request)
    {
       $vaccine = new VaccineModel();
       $vaccine->vaccine_name=$request->vaccine_name;
       $vaccine->desease_name= $request->desease_name;
       $vaccine->no_of_dose= $request->no_of_dose;
       $vaccine->intervel_between_doses= $request->intervel_between_doses;
       $vaccine->starting_time= $request->starting_time;
       $vaccine->rule_of_administration= $request->rule_of_administration;
       $vaccine->save();
       return back()->with('/admin/add_category','Vaccine record succesfully Created');
    }

    public function show_vaccine_list()
    {
        $result= VaccineModel::all();
        return view('vaccine_details',compact('result'));
    }

    public function edit_vaccine($vaccine_id)
    {
        $result= VaccineModel::find($vaccine_id);
        return view('edit_category',compact('result'));
    }

    public function update_vaccine(Request $request)
    {
       $vaccine = VaccineModel::find($request->vaccine_id);
       $vaccine->vaccine_name=$request->vaccine_name;
       $vaccine->desease_name= $request->desease_name;
       $vaccine->no_of_dose= $request->no_of_dose;
       $vaccine->intervel_between_doses= $request->intervel_between_doses;
       $vaccine->starting_time= $request->starting_time;
       $vaccine->rule_of_administration= $request->rule_of_administration;
       $vaccine->save();
       return back()->with('/admin/edit_category','Vaccine record succesfully Updated');
    }

    public function delete_vaccine($vaccine_id)
    {
        VaccineModel::where('vaccine_id',$vaccine_id)->delete();
        return back()->with('vaccine_details','succesfully deleted');
    }












}
