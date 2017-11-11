@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
    <div class="panel-heading"> View Module Task<a href="create_moduletask"><span style="float: right"><i class="glyphicon glyphicon-plus-sign"></i> Create Module Task </span></a></div>
<div class="panel-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th> <th>Module Name</th><th>Task Name</th><th>Options</th>
            </tr>
        </thead>
        <tbody>
         
              <?php
              $token=csrf_token(); 
              foreach
                  ($dev as $rows ) 
          
                  : ?>
             
            <tr>
                <td>{{$rows->id}}</td>
                <td>{{$rows->module_name}}</td>
              <td>{{$rows->task_name}}</td>
             
             
             <td>
                    
                              <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                   <a href="editform/{{$rows->id}}"   ><i class="glyphicon glyphicon-edit" style="color: green"></i> Edit</a>
                         
                                        </li>
                                        <li> 
                                            <a href="delete/{{$rows->id}}"  onclick="return confirm('Are you sure Delete this record?');"><i class="glyphicon glyphicon-trash" style="color: red" ></i> Delete</a>
                                       
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
	  <span style="float:right"> {!! $dev->render() !!}</span>
</div>
</div>
</div>
</div>
@endsection












