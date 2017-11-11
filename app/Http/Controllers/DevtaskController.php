<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class DevtaskController extends Controller
{
    public function devtask_form_view()
	{
        
                        $task = DB::table('say_task as t')
               ->leftJoin('say_module as m', 't.module_id', '=', 'm.id')
               ->leftJoin('say_projects as p', 'm.project_id', '=', 'p.id')
         ->select('t.*','p.name as project_name','p.id as pid', 'm.id as mid','m.name as module_name')
                    ->get();    
                             //  $task=DB::table('say_task')->get();
                           $dev=DB::table('say_developer')->where('status', 'Active')->get();
                          //  $tstatus=DB::table('say_task_status')->get();
                               return view('devtask.create_devtask', compact('task','dev'));
	}
        
        public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'task_id'=>$post["cmbTname"],
                                    'dev_id'=>$post["cmbDev"],
                                   'status'=>$post["cmbtstatus"],
                                   'start_date'=>$post["txtSdate"],
                                   'due_date'=>$post["txtDudate"],
                                    'percent'=>$post["txtPercent"],
                             'remark'=>$post["txtRemark"],
                                );
                                $i=DB::table('say_dev_task')->insert($data);
                                if($i>0){
                                    return redirect('devtask/create_devtask');
                                }
	}
        
        public function index()
	{

                       $dtask = DB::table('say_dev_task as dt')
               ->leftJoin('say_task as pt', 'dt.task_id', '=', 'pt.id')
              ->leftJoin('say_module as m', 'pt.module_id', '=', 'm.id')
               ->leftJoin('say_developer as d', 'dt.dev_id', '=', 'd.id')
          ->leftJoin('say_projects as p', 'm.project_id', '=', 'p.id')
               ->select('dt.id','dt.start_date','dt.due_date','dt.remark','dt.percent','dt.status','pt.name as task_name','pt.id as task_id','m.name as module_name','m.id as mid', 'd.name as dev_name','d.id as dev_id','p.name as project_name','p.id as pid')
							->orderBy('dt.dev_id')
                               ->paginate(10);    
               
                         
                             return view('devtask.view_devtask',compact('dtask'));
                          
	}
	
	   public function dev_ttask()
	{

                      $dtask = DB::table('say_dev_task as dt')
               ->leftJoin('say_task as pt', 'dt.task_id', '=', 'pt.id')
             ->leftJoin('say_developer as d', 'dt.dev_id', '=', 'd.id')
        
               ->select('dt.id',DB::raw('count(pt.id) as task_id'),'d.id as did','d.name as dev_name')
			  
			   ->groupBy('did')
			  
                               ->get();  

                         
                             return view('devtask.view_tdevtask',compact('dtask'));
                          
	}
	
        
        
        	public function destroy($id)
	{
	DB::table('say_dev_task')->where('id',$id)->delete();
                         
                       return back();
	}
        
        public function edit($id)
	{
               $task = DB::table('say_task as t')
               ->leftJoin('say_module as m', 't.module_id', '=', 'm.id')
               ->leftJoin('say_projects as p', 'm.project_id', '=', 'p.id')
         ->select('t.*','p.name as project_name','p.id as pid', 'm.id as mid','m.name as module_name')
                    ->get();  
	 //  $task=DB::table('say_task')->get();
                         $dev=DB::table('say_developer')->get();
                        //  $tstatus=DB::table('say_task_status')->get();
	$dtask=DB::table('say_dev_task')->find($id);
                       return view('devtask/edit_devtask',  compact('dtask','dev','task'));
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                      'task_id'=>$post["cmbTname"],
                                    'dev_id'=>$post["cmbDev"],
                                   'status'=>$post["cmbStatus"],
                                   'start_date'=>$post["txtSdate"],
                                   'due_date'=>$post["txtDudate"],
                                    'percent'=>$post["txtPercent"],
                                  'remark'=>$post["txtRemark"],
                           
                                );
                                $i=DB::table('say_dev_task')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('devtask/view_devtask');
                                }
	}

        
}
