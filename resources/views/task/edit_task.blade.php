
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Task form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('task/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-3 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $row->id?>" readonly="">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Module Name</label>
<div class="col-md-6">
<select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbModule"   data-size="10">


       <?php
	
    foreach ($module as $module){
        if($row->module_id==$module->id){
            echo "<option value='$module->id' selected >$module->id || $module->name </option>";
        }else{
              echo "<option value='$module->id'  >$module->id || $module->name </option>";
        }
    }

?>
   
  </select>


</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Task Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtTname" value="<?php echo $row->name?>">
</div>
</div>


<div class="form-group">
<label class="col-md-3 control-label">Description</label>
<div class="col-md-6">
    <textarea name="txtdesc" class="form-control" cols="20" rows="4" ><?php echo $row->description?></textarea>
 
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










