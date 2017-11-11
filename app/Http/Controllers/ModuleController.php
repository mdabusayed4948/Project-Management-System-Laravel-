<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ModuleController extends Controller
{
     public function module_form_view()
	{
                           $status=DB::table('say_task_status')->get();
                             $result=DB::table('say_projects')->get();
                                    return view('module.create_module')->with('data',$result)->with('status',$status);
	}
        
        public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'project_id'=>$post["cmbProject"],
                                    'name'=>$post["txtMname"],
                             
                                   'start_date'=>$post["txtSDate"],
                                    'due_date'=>$post["txtDudate"],
                                        'status'=>$post["cmbStatus"],
                                 'completed_task'=>$post["txtCtask"],
                                    'description'=>$post["txtdesc"],
                                
                                );
                                $i=DB::table('say_module')->insert($data);
                                if($i>0){
                                    return redirect('module/create_module');
                                }
	}
        
        public function index()
	{
             
                          $dtask = DB::table('say_module as m')
                ->leftJoin('say_projects as p', 'm.project_id', '=', 'p.id')
              //  ->leftJoin('say_task_status as ts', 'm.status_id', '=', 'ts.id')
                ->leftJoin('say_task as t', 'm.id', '=', 't.module_id')
               ->select('m.*','p.name as project_name','p.id as pid', DB::raw('count(t.id)  as task_name'))
                    ->groupBy('m.id')    
                    ->paginate(10);    
            
            
                     //       $result = DB::table('say_projects')
         //   ->join('say_module', 'say_projects.id', '=', 'say_module.project_id')
         //  ->join('say_task_status', 'say_task_status.id', '=', 'say_module.status_id')
         //   ->select('say_module.*', 'say_projects.name as project_name','say_task_status.name as status_name')
          //  ->get();
	  // $result=DB::table('pms_modules')->get();
                        return view('module.view_module')->with('data' , $dtask );
	}
        
        public function destroy($id)
	{
	DB::table('say_module')->where('id',$id)->delete();
                         
                       return back();
	}
        
        	public function edit($id)
	{
        
              $project=DB::table('say_projects')->get();
                 // $status=DB::table('say_task_status')->get();
	 $module=DB::table('say_module')->find($id);
                       return view('module.edit_module',  compact('module','project'));
                   
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                     'project_id'=>$post["cmbProject"],
                                    'name'=>$post["txtMname"],
                                   'start_date'=>$post["txtSDate"],
                                    'due_date'=>$post["txtDudate"],
                                        'status'=>$post["cmbStatus"],
                                    'completed_task'=>$post["txtCtask"],
                                    'description'=>$post["txtdesc"],
                                );
                                $i=DB::table('say_module')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('module/view_module');
                                }
	}
        
               public function modulereport()
	{
                             $result = DB::table('say_projects')
           ->join('say_module', 'say_projects.id', '=', 'say_module.project_id')
           ->select('say_module.*', 'say_projects.name as project_name')
       ->get();
	  // $result=DB::table('pms_modules')->get();
                        return view('module.view_module')->with('data' ,$result);
	}

        
}
