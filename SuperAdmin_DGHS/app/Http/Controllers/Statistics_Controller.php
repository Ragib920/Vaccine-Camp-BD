<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Statistics_Controller extends Controller
{
    function division_statistics_view()
    {
        return view('division_statistics');
    }

    function district_statistics_view()
    {
        return view('district_statistics');
    }

    function upazilla_statistics_view()
    {
        return view('upazilla_statistics');
    }

    function division_statistics_data()
    {

        $user_info = DB::table('vaccination_record')
        ->leftJoin('users', 'vaccination_record.employee_id', '=' ,'users.employee_id')
        ->select('division', DB::raw('count(*) as total'))
        ->groupBy('division')
        ->get();
        foreach($user_info as $row)
        {
        $data[] = array
            (
            'label'=>$row->division,
            'y'=>$row->total
            ); 
        }
        return view('division_statistics',compact('data'));
    }

    function district_statistics_data()
    {

        $user_info = DB::table('vaccination_record')
        ->leftJoin('users', 'vaccination_record.employee_id', '=' ,'users.employee_id')
        ->select('division', DB::raw('count(*) as total'))
        ->groupBy('division')
        ->get();
        foreach($user_info as $row)
        {
        $data[] = array
            (
            'label'=>$row->division,
            'y'=>$row->total
            ); 
        }
        return view('district_statistics',compact('data'));
    }

    function upazilla_statistics_data()
    {

        $user_info = DB::table('vaccination_record')
        ->leftJoin('users', 'vaccination_record.employee_id', '=' ,'users.employee_id')
        ->select('upazilla', DB::raw('count(*) as total'))
        ->groupBy('upazilla')
        ->get();
        foreach($user_info as $row)
        {
        $data[] = array
            (
            'label'=>$row->upazilla,
            'y'=>$row->total
            ); 
        }
        return view('upazilla_statistics',compact('data'));
    }


}
