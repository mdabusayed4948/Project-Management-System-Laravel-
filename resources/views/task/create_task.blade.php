@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Task <a href="view_task"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Task List</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('task/create_task') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">



<div class="form-group">
<label class="col-md-3 control-label">Module</label>
<div class="col-md-6">
<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmModule"   data-size="10">

       
    <?php
	
    foreach ($module as $module) :?>
<option value='{{$module->id}}'>({{$module->id}} ) {{$module->name}}    ||       ({{$module->pid}}) {{$module->project_name}}</option>
	  <?php endforeach;?>
  </select>
  
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Task Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtTname">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Description</label>
<div class="col-md-6">

    <textarea name="txtdesc" class="form-control" cols="20" rows="4"></textarea>
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









