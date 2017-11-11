@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Developer Task <a href="view_devtask"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Developer Task List</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('devtask/create_devtask') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">




<div class="form-group">
<label class="col-md-3 control-label">Task Name</label>
<div class="col-md-6">

         <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbTname"   data-size="10">
      <option>--select--</option>
    <?php
	
    foreach ($task  as $task) :?>
<option value='{{$task->id}}'>({{$task->id}} T) {{$task->name}}  ||  ({{$task->mid}} M){{$task->module_name}}  ||  ({{$task->pid}} P){{$task->project_name}}</option>
	  <?php endforeach;?>
  </select>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Developer Name</label>
<div class="col-md-6">
  
              <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbDev"   data-size="10">
              <option>--select--</option>
    <?php
	
    foreach ($dev as $dev) :?>
<option value='{{$dev->id}}'>{{$dev->id}} || {{$dev->name}}</option>
	  <?php endforeach;?>
  </select>
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Task Status</label>
<div class="col-md-6">
     <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbtstatus"   data-size="10">
     
              <option>--select--</option>
              <option value="Open">Open</option>
              <option value="Approved">Approved</option>
              <option value="In Progress">In Progress</option>
              <option value="Closed">Closed</option>
 
  </select>
    
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Start Date</label>
<div class="col-md-6">

    <input type="date" class="form-control" name="txtSdate" placeholder="">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Due Date</label>
<div class="col-md-6">

    <input type="date" class="form-control" name="txtDudate" placeholder="">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Complete Task </label>
<div class="col-md-6">

    <input type="text" class="form-control" name="txtPercent" placeholder="only number">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Remark </label>
<div class="col-md-6">

  <textarea name="txtRemark" class="form-control" cols="20" rows="4"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
    <input type="submit" name="btnSubmit" value="Submit" class="btn btn-default"/>

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









