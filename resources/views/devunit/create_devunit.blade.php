@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Developer Unit <a href="view_devunit"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Developer Unit List</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('devunit/create_devunit') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="form-group">
<label class="col-md-4 control-label">Developer Name</label>
<div class="col-md-6">

         <select name="cmbDev" class="form-control">
    <?php
	
    foreach ($dev as $dev) :?>
<option value='{{$dev->id}}'>{{$dev->id}} || {{$dev->name}}</option>
	  <?php endforeach;?>
  </select>
  
    
   
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Unit Name</label>
<div class="col-md-6">
 <select name="cmbUnit" class="form-control">
    <?php
	
    foreach ($unit as $unit) :?>
<option value='{{$unit->id}}'>{{$unit->id}} || {{$unit->name}}</option>
	  <?php endforeach;?>
  </select>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Assigned On</label>
<div class="col-md-6">
    <input type="date" class="form-control" name="txtAssign" placeholder="yyyy-mm-dd">
</div>
</div>


<div class="form-group">
<div class="col-md-6 col-md-offset-4">
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







