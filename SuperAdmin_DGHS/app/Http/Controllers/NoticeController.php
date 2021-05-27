<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticeModel;

class NoticeController extends Controller
{
    public function create_new_notice(Request $request)
    {
       $notice = new noticeModel();
       $notice->notice_title=$request->notice_title;
       $notice->notice_body= $request->notice_body;
       $notice->save();
       return back()->with('/admin/create_notice','Notice has been published succussfully');
    }

    public function show_notice_list()
    {
        $result= noticeModel::orderBy('id', 'desc')->paginate(15);
        return view('notice_list',compact('result'));
    }

    public function delete_notice($id)
    {
        noticeModel::where('id',$id)->delete();
        return back()->with('/admin/notice_list','succesfully Deleted');
    }

    public function notice_data($id)
    {
        $notice= noticeModel::find($id);
        return view('update_notice',compact('notice'));
    }

    public function update_notice(Request $request)
    {
        $notice = noticeModel::find($request->id);
        $notice->notice_title=$request->notice_title;
        $notice->notice_body= $request->notice_body;
        $notice->save();
        return back()->with('/admin/update_notice','Notice has been succussfully upadted');
    }
    
    public function notice_view($id)
    {
        $notice= noticeModel::find($id);
        return view('notice_view',compact('notice'));
    }

}
