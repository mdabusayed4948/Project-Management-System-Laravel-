@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Client <a href="view_client"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Client List</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('client/create_client') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
<label class="col-md-3 control-label">Client Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtCname">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">E-mail</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtEmail">
</div>
</div>

<div class="form-group">
<label class="col-md-3 control-label">Mobile</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtMobile" >
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Status</label>
<div class="col-md-6">
    <select class="form-control" name="cmbStatus">
        <option>--select--</option>
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
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






