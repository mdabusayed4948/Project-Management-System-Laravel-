@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading"> View Task List<a href="create_task"><span style="float: right"><i class="glyphicon glyphicon-plus-sign"></i> Create Task</span></a></div>
<div class="panel-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th> <th>Task Name</th>  <th>Module Name </th><th>Description </th><th>Options</th>
            </tr>
        </thead>
        <tbody>
              <?php
               date_default_timezone_set("Asia/Dhaka");
          $token=csrf_token(); 
              foreach ($task as $tasks) : ?>
           
            <tr>
                <td>{{$tasks->id}}</td>
                <td>{{$tasks->name}}</td>
             <td>({{$tasks->mid}}){{$tasks->module_name}}</td>
            
                <td> {{$tasks->description}}</td>  
         
             
             <td>
                    
                              <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <a href="editform/{{$tasks->id}}"   ><i class="glyphicon glyphicon-edit"></i> Edit</a>
                         
                                        </li>
                                        <li> 
                                            <a href="delete/{{$tasks->id}}"  onclick="return confirm('Are you sure Delete this record?');"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                       
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
	 <span style="float:right"> {!! $task->render() !!}</span>
</div>
</div>
</div>
</div>
@endsection









