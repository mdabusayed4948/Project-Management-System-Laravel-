
@extends('admin.layout')

@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Project form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('developer/assign_update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-4 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $row->id?>" readonly="">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Project Name</label>
<div class="col-md-6">
   <select name="cmbProjectId" class="form-control">
         
            <?php
	     
         foreach($project as $project){
             if($row->project_id==$project->id){
                  echo "<option value='$project->id' selected>$project->name</option>";
             }else{
                      echo "<option value='$project->id'>$project->name</option>";   
             }
	
	     }
	   ?>
       </select>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Developer Name</label>
<div class="col-md-6">
    <select name="cmbdevId" class="form-control">
  
            <?php
	     
         foreach($dev as $dev){
         if( $row->dev_id==$dev->id){
              echo "<option value='$dev->id' selected >$dev->name</option>";
         }else{
                       echo "<option value='$dev->id' >$dev->name</option>";
         }
	
	     }
	   ?>
       </select>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Joining Date</label>
<div class="col-md-6">
    <input type="date" class="form-control" name="txtStartDate"  value="<?php echo $row->assigned_on?>">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Job Description</label>
<div class="col-md-6">
    <textarea name="txtJobDesc" class="form-control" cols="20" rows="4" ><?php echo $row->job_desc?></textarea>
 
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-4">
    <input type="submit" name="btnSubmit" value="Save Change" class="btn btn-default"/>

</div>
</div>
</form>
</div>
      <div class="panel-footer"> </div>
</div>
</div>
</div>
</div>
@endsection







