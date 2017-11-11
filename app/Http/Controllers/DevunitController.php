<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class DevunitController extends Controller
{
    public function devunit_form_view()
	{
                                 $dev=DB::table('say_developer')->get();
                               $unit=DB::table('say_unit')->get();
                                    return view('devunit.create_devunit',compact('dev','unit'));
	}
        
        public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'dev_id'=>$post["cmbDev"],
                                    'unit_id'=>$post["cmbUnit"],
                                  
                                   'assinged_on'=>$post["txtAssign"],
                                 
                                );
                                $i=DB::table('say_unit_dev')->insert($data);
                                if($i>0){
                                    return redirect('devunit/create_devunit');
                                }
	}
        
        	public function index()
	{
           
                 $devu= DB::table('say_unit_dev as du')
               ->leftJoin('say_developer as d', 'du.dev_id', '=', 'd.id')
               ->leftJoin('say_unit as u', 'du.unit_id', '=', 'u.id')
               ->select('du.id','du.assinged_on','d.name as dev_name','u.name as unit_name')
                    ->get();    
               
                        
                             return view('devunit.view_devunit',compact('devu'));
	}
        
        public function destroy($id)
	{
	DB::table('say_unit_dev')->where('id',$id)->delete();
                         
                       return back();
	}
        
        public function edit($id)
	{
             
                    $dev=DB::table('say_developer')->get();
                               $unit=DB::table('say_unit')->get();
	 $ud=DB::table('say_unit_dev')->find($id);
                       return view('devunit/edit_devunit',  compact('ud','unit','dev'));
	}
        
        public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                   'dev_id'=>$post["cmbDev"],
                                    'unit_id'=>$post["cmbUnit"],
                                  'assinged_on'=>$post["txtAssign"],
                                );
                                $i=DB::table('say_unit_dev')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('devunit/view_devunit');
                                }
	}
        
}
