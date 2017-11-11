<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ModuletaskController extends Controller
{
    public function moduletask_form_view()
	{
                                $module=DB::table('say_module')->get();
                              $task=DB::table('say_task')->get();
                                    return view('moduletask.create_moduletask' , compact('module','task'));
	}
        
        public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'module_id'=>$post["cmbModule"],
                                    'task_id'=>$post["cmbTask"],
                                
                                );
                                $i=DB::table('say_module_task')->insert($data);
                                if($i>0){
                                    return redirect('moduletask/create_moduletask');
                                }
	}
        
        public function index()
	{
          
               
                    $dev = DB::table('say_module_task as mt')
               ->leftJoin('say_module as pm', 'mt.module_id', '=', 'pm.id')
               ->leftJoin('say_task as pt', 'mt.task_id', '=', 'pt.id')
               ->select('mt.id','pm.name as module_name','pt.name as task_name')
                    ->paginate(10));    
	
                             return view('moduletask.view_moduletask',compact('dev'));
	}
        
        public function destroy($id)
	{
	DB::table('say_module_task')->where('id',$id)->delete();
                         
                       return back();
	}
        
        public function edit($id)
	{
                          $module=DB::table('say_module')->get();
                           $task=DB::table('say_task')->get();
	 $mtask=DB::table('say_module_task')->find($id);
                       return view('moduletask/edit_moduletask',  compact('mtask','task','module'));
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                   'module_id'=>$post["cmbModule"],
                                    'task_id'=>$post["cmbTask"],
                           
                                );
                                $i=DB::table('say_module_task')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('moduletask/view_moduletask');
                                }
	}
        
           public function modulereport()
	{
          
               
                  //  $dev = DB::table('say_module_task as mt')
             //  ->leftJoin('say_module as pm', 'mt.module_id', '=', 'pm.id')
             //  ->leftJoin('say_task as pt', 'mt.task_id', '=', 'pt.id')
             //  ->select('mt.id','pm.name as module_name','pt.name as task_name')
              //      ->get();    
	
                             return view('moduletask.view_modulereport');
	}
        
}
