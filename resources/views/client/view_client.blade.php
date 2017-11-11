@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading"> View Client<a href="create_client"><span style="float: right"><i class="glyphicon glyphicon-plus-sign"></i> Create Client</span></a></div>
<div class="panel-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th> <th>Client Name</th> <th>E-mail</th><th> Mobile</th><th>Status</th>  <th>Options</th>
            </tr>
        </thead>
        <tbody>
              <?php
                $token=csrf_token(); 
      
              foreach ($clients as $client) : ?>
           
            <tr>
                <td>{{$client->id}}</td>
               <td>{{$client->name}}</td>
                 <td>{{$client->email}}</td> 
                   <td>{{$client->mobile}}</td> 
               <td>{{$client->status}}</td> 
          
             
             <td>
                    
                              <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <a href="editform/{{$client->id}}"   ><i class="glyphicon glyphicon-edit"></i> Edit</a>
                         
                                        </li>
                                        <li> 
                                            <a href="delete/{{$client->id}}"  onclick="return confirm('Are you sure Delete this record?');"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                       
                                        </li>
                                          <li> 
                                           
                         
                                        </li>
                                             </ul>
                                         </div>
                    
                    
              
       
                </td>    
            </tr>      
              <?php endforeach;?>
        </tbody>
     
    </table>

					
</div>
      <div class="panel-footer"> </div>
	   <span style="float:right"> {!! $clients->render() !!}</span>
</div>
</div>
</div>
</div>
@endsection








