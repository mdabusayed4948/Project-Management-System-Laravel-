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
                <th>ID</th> <th>Project Name</th> <th>Developer Name</th> <th>Assign On Date</th> <th>Job Description</th> <th>Options</th>
            </tr>
        </thead>
        <tbody>
              <?php
                $token=csrf_token(); 
      
              foreach ($pro_dev as $rows) : ?>
           
            <tr>
                <td>{{$rows->id}}</td>
                     <td>{{$rows->project_name}}</td>
                <td>{{$rows->dev_name}}</td>
          <td> {{$rows->date=date("d M Y",strtotime($rows->assigned_on))}}</td>  
              <td>{{$rows->job_desc}}</td> 
             
             <td>
                    
                              <div class="btn-group">
                                              <button type="button" class="label label-default btn-sm dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                                              <ul class="dropdown-menu dropdown-default pull-right" >
                                               <li> 
                                                   
                                                <a href="editforms/{{$rows->id}}"   ><i class="glyphicon glyphicon-edit"></i> Edit</a>
                         
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
</div>
</div>
</div>
</div>
@endsection










