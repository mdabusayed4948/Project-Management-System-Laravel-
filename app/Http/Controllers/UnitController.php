<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class UnitController extends Controller
{
  public function unit_form_view()
	{
                                    return view('unit.create_unit');
	}
        
        public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'name'=>$post["txtUnit"],
                                     'code'=>$post["txtCode"],
                                );
                                $i=DB::table('say_unit')->insert($data);
                                if($i>0){
                                    return redirect('unit/create_unit');
                                }
	}
        
        public function index()
	{
	   $result=DB::table('say_unit')->get();
                        return view('unit.view_unit')->with('data' ,$result);
	}
        
        public function destroy($id)
	{
	DB::table('say_unit')->where('id',$id)->delete();
                         
                       return back();
	}
        
        public function edit($id)
	{
	 $row=DB::table('say_unit')->find($id);
                          return view('unit.edit_unit')->with("row",$row);
	}
        
        	public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                                   'name'=>$post["txtTUnit"],
                                      'code'=>$post["txtCode"],
                                 
                                );
                                $i=DB::table('say_unit')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('unit/view_unit');
                                   
                                }
	}
        
}
