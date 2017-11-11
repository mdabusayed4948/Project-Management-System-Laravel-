@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-12 ">
   
<div class="panel panel-default">

    <div class="panel-heading"> View Developer Task<a href="create_devtask"> <button onclick="myFunction()"  ><i class="glyphicon glyphicon-print"></i></button><span style="float: right"> <i class="glyphicon glyphicon-plus-sign"></i> Create Developer Task </span></a></div>
<div class="panel-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Developer ID</th> <th>Developer Name</th><th>Total Involve Task</th>
            </tr>
        </thead>
        <tbody>
         
              <?php
           $token=csrf_token(); 
              foreach
                  ($dtask as $rows ) 
          
                  : ?>
               
            <tr>
          
                      
                  <td>{{$rows->did}}</td>
				  <td>{{$rows->dev_name}}</td>
		
                <td>{{$rows->task_id}}</td>

             
            </tr>      
              <?php endforeach;?>
                 
        </tbody>
     
    </table>

					
</div>
      <div class="panel-footer">

	      	  
	  </div>
	 
</div>
</div>
</div>
</div>
@endsection














