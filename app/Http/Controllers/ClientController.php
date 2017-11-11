<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class ClientController extends Controller
{
   public function client_form_view()
	{
                                    return view('client.create_client');
	}
        
        
              public function create(Request $request)
	{
                                $post=$request->all();
                                $data=array(
                                    'name'=>$post["txtCname"],
                                    'email'=>$post["txtEmail"],
                                   'mobile'=>$post["txtMobile"],
                                   'status'=>$post["cmbStatus"],
                                  
                              
                                );
                                $i=DB::table('say_client')->insert($data);
                                if($i>0){
                                    return redirect('client/create_client');
                                }
	}
        
        
           public function index()
	{
	  $clients=DB::table('say_client')->paginate(10);
        return view('client/view_client')->with('clients' ,$clients);
	}
        
        
           public function destroy($id)
	{
	DB::table('say_client')->where('id',$id)->delete();
                         
                       return back();
	}
        
        
             public function edit($id)
	{
	  $client=DB::table('say_client')->find($id);
                          return view('client.edit_client')->with("client",$client);
	}
        
        
           public function update(Request $request)
	{
	 $post=$request->all();
                                $data=array(
                              'name'=>$post["txtCname"],
                                    'email'=>$post["txtEmail"],
                                   'mobile'=>$post["txtMobile"],
                                   'status'=>$post["cmbStatus"],
                                  
                                );
                                $i=DB::table('say_client')->where('id',$post['txtId'])->update($data);
                                if($i>0){
                                    return redirect('client/view_client');
                                }
	}
        
        
}
