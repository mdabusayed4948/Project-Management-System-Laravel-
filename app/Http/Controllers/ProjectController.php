<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ProjectController extends Controller
{
    
    	public function index()
	{
            
                          $result = DB::table('say_projects as p')
                  ->leftJoin('say_module as m', 'p.id', '=', 'm.project_id')
                     // ->leftJoin('say_task_status as ts', 'p.status_id', '=', 'ts.id')
                            ->leftJoin('say_client as c', 'p.client_id', '=', 'c.id')
                                      
               ->select('p.*', 'c.name as client_name','c.id as cid', DB::raw('count(m.id)  as module_name'))
                ->groupBy('p.id')
                    ->paginate(10);    
            
                       //      $result=DB::table('say_projects')->get();
                        return view('project.view_project')->with('data' ,$result);
	}
        
      public function project_form_view()
	{
               $client=DB::table('say_client')->where('status','Active')->get();
              //  $status=DB::table('say_task_status')->get();
                                    return view('project.create_project',compact('client'));
	}
        
   public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'name'=>$post["txtPname"],
                             
                                         'client_id'=>$post["cmbClient"],
                                   'start_date'=>$post["txtSDate"],
                                    'due_date'=>$post["txtDudate"],
                                        'completed_module'=>$post["txtCom"],
                                           'status'=>$post["cmbStatus"],
                         
                                    'description'=>$post["txtdesc"],
                                );
                                $i=DB::table('say_projects')->insert($data);
                                if($i>0){
                                    return redirect('project/create_project');
                                }
	}     
      	public function destroy($id)
	{
	DB::table('say_projects')->where('id',$id)->delete();
                         
                       return back();
	}  
        
        	public function edit($id)
	{
                             $client=DB::table('say_client')->where('status','Active')->get();
                              //  $status=DB::table('say_task_status')->get();
	  $row=DB::table('say_projects')->find($id);
                          return view('project.edit_project')->with("row",$row)->with("client",$client);
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                   'name'=>$post["txtPname"],
                            
                                     'client_id'=>$post["cmbClient"],
                                   'start_date'=>$post["txtSDate"],
                                    'due_date'=>$post["txtDudate"],
                                         'status'=>$post["cmbStatus"],
                                'completed_module'=>$post["txtCom"],
                                    'description'=>$post["txtdesc"],
                                );
                                $i=DB::table('say_projects')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('project/view_project');
                                }
	}
        
}
