<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Input as Input;
class DeveloperController extends Controller
{
    
   public function index()
	{
	  $result=DB::table('say_developer')->paginate(10);
                        return view('developer/view_developer')->with('data' ,$result);
	}
        
    public function developer_form_view()
	{
                                    return view('developer.create_developer');
	}
        
        public function create(Request $request)
	{                      
                                $post=$request->all();
                                $data=array(
								
                                    'name'=>$post["txtDname"],
                                    'designation'=>$post["txtDesign"],
                                   'job_desc'=>$post["txtdesc"],
                                   'status'=>$post["cmbStatus"],
								   
                               
                              
                                );
                                $i=DB::table('say_developer')->insert($data);
                                if($i>0){
                                    return redirect('developer/create_developer');
                                }
	}
        
        public function destroy($id)
	{
	DB::table('say_developer')->where('id',$id)->delete();
                         
                       return back();
	}
        
        public function edit($id)
	{
	  $row=DB::table('say_developer')->find($id);
                          return view('developer.edit_developer')->with("row",$row);
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                   'name'=>$post["txtDname"],
                              
                                    'designation'=>$post["txtDesign"],
                                       'status'=>$post["cmbStatus"],
                                   'job_desc'=>$post["txtdesc"],
                                );
                                $i=DB::table('say_developer')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('developer/view_developer');
                                }
	}
        
        
   //----------------Developer Assign On Area-----------------------------------------------------------------     
        
            public function assign_form_view()
	{
                        $project=DB::table('say_projects')->get();
                         $dev=DB::table('say_developer')->get();
                                    return view('developer.create_assign',compact('project','dev'));
	}
        
           public function assigncreate(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'project_id'=>$post["cmbProjectId"],
                                    'dev_id'=>$post["cmbdevId"],
                                   'assigned_on'=>$post["txtStartDate"],
                                       'job_desc'=>$post["txtJobDesc"],
                              
                                );
                                $i=DB::table('say_project_dev')->insert($data);
                                if($i>0){
                                    return redirect('developer/create_assign');
                                }
	}
        
          public function assign_index()
	{
             
                      $pro_dev = DB::table('say_project_dev as pd')
               ->leftJoin('say_projects as sp', 'pd.project_id', '=', 'sp.id')
               ->leftJoin('say_developer as sd', 'pd.dev_id', '=', 'sd.id')
               ->select('pd.id','pd.assigned_on','pd.job_desc','sp.name as project_name','sd.name as dev_name')
                      
                    ->paginate(10);  
	 // $result=DB::table('say_project_dev')->get();
                        return view('developer/view_assign',compact('pro_dev'));
	}
        
             public function active_dev()
	{
             
                     $ac_dev = DB::table('say_project_dev as pd')
                 ->leftJoin('say_projects as sp', 'pd.project_id', '=', 'sp.id')
              ->leftJoin('say_developer as sd', 'pd.dev_id', '=', 'sd.id')
              ->select('pd.id','pd.assigned_on','sd.code','sd.name as dev_name','sd.designation','sp.name as project_name')
                      
                ->paginate(10);  
	 // $result=DB::table('say_project_dev')->get();
                        return view('developer/view_activedev',compact('ac_dev'));
	}
        
            public function assign_destroy($id)
	{
	DB::table('say_project_dev')->where('id',$id)->delete();
                         
                       return back();
	}
        
          public function assign_edit($id)
	{
              
               //    $result= DB::table('say_project_dev as pd')
             //  ->leftJoin('say_projects as sp', 'pd.project_id', '=', 'sp.id')
             //  ->leftJoin('say_developer as sd', 'pd.dev_id', '=', 'sd.id')
             //  ->select('pd.id','sp.id','sp.name as project_name','sd.name as dev_name')
            
              //      ->get();  
                  $project=DB::table('say_projects')->get();
                    $dev=DB::table('say_developer')->get();
	$row=DB::table('say_project_dev')->find($id);
                          return view('developer.edit_assigneveloper',compact('row','dev','project'));
	}
        
           public function assign_update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                  'project_id'=>$post["cmbProjectId"],
                                    'dev_id'=>$post["cmbdevId"],
                                   'assigned_on'=>$post["txtStartDate"],
                                       'job_desc'=>$post["txtJobDesc"],
                                );
                                $i=DB::table('say_project_dev')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('developer/view_assign');
                                }
	}
        
        
        
}
