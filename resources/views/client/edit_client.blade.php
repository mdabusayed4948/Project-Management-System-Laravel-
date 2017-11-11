
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Client  form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('client/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-3 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $client->id?>" readonly="">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Client Name</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtCname" value="<?php echo $client->name?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">E-mail</label>
<div class="col-md-6">
    <input type="email" class="form-control" name="txtEmail" value="<?php echo $client->email?>">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Mobile </label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtMobile" value="<?php echo $client->mobile?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Status</label>
<div class="col-md-6">
    <select class="form-control" name="cmbStatus">
          <option ><?php echo $client->status?></option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
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








