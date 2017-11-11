
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Module form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('module/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group" hidden>
<label class="col-md-3 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $module->id?>" readonly="">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Project Name</label>
<div class="col-md-6">
<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbProject"   data-size="10">

    
    <?php
foreach ($project as $project){
    if($module->project_id==$project->id){
        echo "<option value='$project->id' selected>id= $project->id || $project->name</option>";
    }else{
           echo "<option value='$project->id' >id= $project->id || $project->name</option>";
    }
}	
 ?>
  </select>
  
</div>
</div>

<div class="form-group">
<label class="col-md-3  control-label">Module Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtMname" value="<?php echo $module->name?>">
</div>
</div>

<div class="form-group">
<label class="col-md-3  control-label">Start Date</label>
<div class="col-md-6">
    <input type="date" class="form-control" name="txtSDate" placeholder="yyyy-mm-dd" value="<?php echo $module->start_date?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3  control-label">Due Date</label>
<div class="col-md-6">

    <input type="date" class="form-control" name="txtDudate" placeholder="yyyy-mm-dd"  value="<?php echo $module->due_date?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Completed Task</label>
<div class="col-md-6">

    <input type="number" class="form-control" name="txtCtask" placeholder="Only number" value="<?php echo $module->completed_task?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Status</label>
<div class="col-md-6">
<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbStatus"   data-size="10">

         
            <option ><?php echo $module->status; ?></option>
              <option value="Open">Open</option>
              <option value="Approved">Approved</option>
              <option value="In Progress">In Progress</option>
              <option value="Closed">Closed</option>
 
  </select>
  
</div>
</div>



<div class="form-group">
<label class="col-md-3  control-label">Description</label>
<div class="col-md-6">
    <textarea name="txtdesc" class="form-control" cols="20" rows="4" ><?php echo $module->description?></textarea>
 
</div>
</div>

<div class="form-group">
<div class="col-md-6 col-md-offset-3">
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








