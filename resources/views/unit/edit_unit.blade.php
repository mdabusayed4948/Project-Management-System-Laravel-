
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Unit form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('unit/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-3 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $row->id?>" readonly="">
</div>
</div>


<div class="form-group">
<label class="col-md-3 control-label">Unit Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtTUnit" value="<?php echo $row->name?>">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Unit Code</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtCode" value="<?php echo $row->code?>">
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











