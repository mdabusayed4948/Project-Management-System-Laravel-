@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading"> View Developer<a href="create_developer"><span style="float: right"><i class="glyphicon glyphicon-plus-sign"></i> Create Developer</span></a></div>
<div class="panel-body">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
              <th>Devloper Code</th> <th>Developer Name</th> <th>Designation</th> <th>Project Name</th> <th>Assign On Date</th> 
            </tr>
        </thead>
        <tbody>
              <?php
                $token=csrf_token(); 
      
              foreach ($ac_dev as $rows) : ?>
           
            <tr>
              <td>{{$rows->code}}</td>
             <td>{{$rows->dev_name}}</td>
             <td>{{$rows->designation}}</td> 
              <td>{{$rows->project_name}}</td>
            <td> {{$rows->date=date("d M Y",strtotime($rows->assigned_on))}}</td>  
            
            </tr>      
              <?php endforeach;?>
        </tbody>
     
    </table>

					
</div>
      <div class="panel-footer"> </div>
</div>
</div>
</div>
</div>
@endsection











