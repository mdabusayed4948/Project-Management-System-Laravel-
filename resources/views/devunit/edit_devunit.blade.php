
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Unit form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('devunit/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-4 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $ud->id?>" readonly="">
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Developer Name</label>
<div class="col-md-6">
 <select name="cmbDev" class="form-control">
   <?php
	     
         foreach($dev as $dev){
             if($ud->dev_id==$dev->id){
                  echo "<option value='$dev->id' selected>$dev->name</option>";
             }else{
                      echo "<option value='$dev->id'>$dev->name</option>";   
             }
	
	     }
	   ?>
	

  </select>


</div>
</div>
 <div class="form-group">
<label class="col-md-4 control-label">Unit Name</label>
<div class="col-md-6">
 <select name="cmbUnit" class="form-control">
       <?php
	     
         foreach($unit as $unit){
             if($ud->unit_id==$unit->id){
                  echo "<option value='$unit->id' selected>$unit->name</option>";
             }else{
                      echo "<option value='$unit->id'>$unit->name</option>";   
             }
	
	     }
	   ?>
  
  </select>


</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Assigned On</label>
<div class="col-md-6">
    <input type="date" class="form-control" name="txtAssign"  value="<?php echo $ud->assinged_on?>" placeholder="yyyy-mm-dd">
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












