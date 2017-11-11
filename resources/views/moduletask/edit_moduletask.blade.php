
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Module Task </div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('moduletask/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-3 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $mtask->id?>" readonly="">
</div>
</div>


<div class="form-group">
<label class="col-md-3 control-label">Module Name</label>
<div class="col-md-6">
 <select name="cmbModule" class="form-control">
    <?php
  foreach ($module as $module) {
      if($mtask->module_id==$module->id){
          echo "<option value='$module->id' selected>$module->name</option>";
      }else{
             echo "<option value='$module->id' >$module->name</option>"; 
      }
  }	
 ?>
  </select>


</div>
</div>
 <div class="form-group">
<label class="col-md-3 control-label">Module Name</label>
<div class="col-md-6">
 <select name="cmbTask" class="form-control">
    <?php
  foreach ($task as $task) {
      if($mtask->task_id==$task->id){
          echo "<option value='$task->id' selected>$task->name</option>";
      }else{
             echo "<option value='$task->id' >$task->name</option>"; 
      }
  }	
 ?>
  </select>


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
















