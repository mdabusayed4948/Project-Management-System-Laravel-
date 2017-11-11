@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Module Task <a href="view_moduletask"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Module Task</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('moduletask/create_moduletask') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="form-group">
<label class="col-md-3 control-label">Module Name</label>
<div class="col-md-6">

         <select name="cmbModule" class="form-control">
    <?php
	
    foreach ($module as $module) :?>
<option value='{{$module->id}}'>{{$module->id}} || {{$module->name}}</option>
	  <?php endforeach;?>
  </select>
  
    
   
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Task Name</label>
<div class="col-md-6">

         <select name="cmbTask" class="form-control">
    <?php
	
    foreach ($task as $task) :?>
<option value='{{$task->id}}'>{{$task->id}} || {{$task->name}}</option>
	  <?php endforeach;?>
  </select>
  
    
   
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







