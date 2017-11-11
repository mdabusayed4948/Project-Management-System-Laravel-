
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Task Status form</div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('task_status/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-4 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $row->id?>" readonly="">
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Task Status Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtTsname" value="<?php echo $row->name?>">
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











