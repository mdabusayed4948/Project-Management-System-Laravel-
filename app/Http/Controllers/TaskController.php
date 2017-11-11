<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class TaskController extends Controller
{
  
     public function task_form_view()
	{
                       $module = DB::table('say_module as m')
               ->leftJoin('say_projects as p', 'm.project_id', '=', 'p.id')
               ->select('m.*','p.name as project_name','p.id as pid')
                
                    ->get();    
         
                     //  $module=DB::table('say_module')->get();
                                    return view('task.create_task',compact('module'));
	}
        
        	public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'name'=>$post["txtTname"],
                                       'module_id'=>$post["cmModule"],
                                    'description'=>$post["txtdesc"],
                           
                                );
                                $i=DB::table('say_task')->insert($data);
                                if($i>0){
                                    return redirect('task/create_task');
                                }
	}
        
        public function index()
	{
                  $task = DB::table('say_task as st')
    ->leftJoin('say_module as m', 'st.module_id', '=', 'm.id')
           ->select('st.*','m.name as module_name','m.id as mid')
                  ->paginate(10);    
            
	//$task=DB::table('say_task')->get();
                        return view('task.view_task')->with('task' ,$task);
	}
        
        public function destroy($id)
	{
	DB::table('say_task')->where('id',$id)->delete();
                         
                       return back();
	}
        
        public function edit($id)
	{
                        $module=DB::table('say_module')->get();
	  $row=DB::table('say_task')->find($id);
                          return view('task.edit_task')->with("row",$row)->with("module",$module);
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                  'name'=>$post["txtTname"],
                                   'module_id'=>$post["cmbModule"],
                                    'description'=>$post["txtdesc"],
                                 
                                );
                                $i=DB::table('say_task')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('task/view_task');
                                }
	}
    
    
}
