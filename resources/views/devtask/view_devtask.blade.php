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
                <th>Project Name</th> <th>Module Name</th><th>Task Name</th><th>Developer Name</th><th>Start Date</th><th>Due Date</th> <th>Task Status </th><th style="width: 150px">% Done </th><th>Remark </th><th>Options</th>
            </tr>
        </thead>
        <tbody>
         
              <?php
           $token=csrf_token(); 
              foreach
                  ($dtask as $rows ) 
          
                  : ?>
               
            <tr>
          
                        <td>({{$rows->pid}}){{$rows->project_name}}</td>
                       <td>({{$rows->mid}}){{$rows->module_name}}</td>
                <td>({{$rows->task_id}}){{$rows->task_name}}</td>
              <td>({{$rows->dev_id}}){{$rows->dev_name}}</td>
                 <td> {{$rows->date=date("d M Y",strtotime($rows->start_date))}}</td>
                   <td> {{$rows->date=date("d M Y",strtotime($rows->due_date))}}</td>
            
              <td>
                <?php
                                       
                      $var=$rows->status;
                           
                      
                    if($var=='Open'){
                        echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-info  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:100%'>
            Open
               </div>
                   </div>";
                    }elseif($var=='In Progress'){
                    echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-warning  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:100%'>
            In Progress
               </div>
                   </div>";
                    }elseif($var=='Approved'){
                    echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-success  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:100%'>
           Approved
               </div>
                   </div>";
                    }elseif($var=='Closed'){
                    echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped   active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:100%'>
          Closed
               </div>
                   </div>";
                    }
                       ?>
            
                    
              </td>
                   <td>
                       <?php
                            $a=$rows->percent;
                     /*      echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-info  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$a%'>
             $a  %
               </div>
                   </div>";      */
                                  if($a>=80 && $a<=100){
                                     echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-warning  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$a%'>
             $a  %
               </div>
                   </div>";
                              } elseif($a>=70 && $a<=79){
                             echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-info  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$a%'>
             $a  %
               </div>
                   </div>";
                              }elseif($a>=50 && $a<=69){
                             echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped progress-bar-success  active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$a%'>
             $a  %
               </div>
                   </div>";
                              }elseif($a>=0 && $a<=49){
                             echo "<div class='progress'>
        <div class='progress-bar progress-bar-striped   active' role='progressbar' aria-valuenow='40' aria-valuemin='0' aria-valuemax='100' style='width:$a%'>
             $a  %
               </div>
                   </div>";
                          
                              }          
                       ?>
                  
                   </td>
                <td>{{$rows->remark}}</td>
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
      <div class="panel-footer"></div>
	   <span style="float:right"> {!! $dtask->render() !!}</span>
</div>
</div>
</div>
</div>
@endsection














