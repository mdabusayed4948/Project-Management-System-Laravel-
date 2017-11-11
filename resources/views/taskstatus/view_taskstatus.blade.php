@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
    <div class="panel-heading"> View Task Status<a href="create_task_status"><span style="float: right"><i class="glyphicon glyphicon-plus-sign"></i> Create Task Status</span></a></div>
<div class="panel-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th> <th>Task Status Name</th><th>Options</th>
            </tr>
        </thead>
        <tbody>
              <?php
               date_default_timezone_set("Asia/Dhaka");
          $token=csrf_token(); 
              foreach ($data as $rows) : ?>
           
            <tr>
                <td>{{$rows->id}}</td>
                <td>{{$rows->name}}</td>
             
             
             <td>
                    
                              <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <a href="editform/{{$rows->id}}"   ><i class="glyphicon glyphicon-edit"></i> Edit</a>
                         
                                        </li>
                                        <li> 
                                            <a href="delete/{{$rows->id}}"  onclick="return confirm('Are you sure Delete this record?');"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                       
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
	   <span style="float:right"> {!! $data->render() !!}</span>
</div>
</div>
</div>
</div>
@endsection








