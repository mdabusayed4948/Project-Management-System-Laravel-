@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Task Status <a href="view_task_status"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Task Status List</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('task_status/create_task_status') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">




<div class="form-group">
<label class="col-md-4 control-label">Task Status Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtTsname">
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







