
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Developer form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('developer/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-3 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $row->id?>" readonly="">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Developer Name</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtDname" value="<?php echo $row->name?>">
</div>
</div>


<div class="form-group">
<label class="col-md-3 control-label">Designation </label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtDesign" value="<?php echo $row->designation?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Status</label>
<div class="col-md-6">
    <select class="form-control" name="cmbStatus">
          <option ><?php echo $row->status?></option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Job Description</label>
<div class="col-md-6">
    <textarea name="txtdesc" class="form-control" cols="20" rows="4" ><?php echo $row->job_desc?></textarea>
 
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








