<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class TaskstatusController extends Controller
{
 public function taskstatus_form_view()
	{
                                    return view('taskstatus.create_taskstatus');
	}
        
        public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'name'=>$post["txtTsname"],
                                 
                                );
                                $i=DB::table('say_task_status')->insert($data);
                                if($i>0){
                                    return redirect('task_status/create_task_status');
                                }
	}
        
        public function index()
	{
	    $result=DB::table('say_task_status')->get();
                        return view('taskstatus.view_taskstatus')->with('data' ,$result);
	}
        
        public function destroy($id)
	{
	DB::table('say_task_status')->where('id',$id)->delete();
                         
                       return back();
	}
        
        	public function edit($id)
	{
	  $row=DB::table('say_task_status')->find($id);
                          return view('taskstatus.edit_taskstatus')->with("row",$row);
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                   'name'=>$post["txtTsname"],
                                 
                                );
                                $i=DB::table('say_task_status')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('task_status/view_task_status');
                                }
	}
        
}
