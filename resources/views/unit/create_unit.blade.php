@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Unit  <a href="view_unit"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Unit List</span></a></div>
<div class="panel-body">


<form class="form-horizontal" role="form" method="POST" action="{{ url('unit/create_unit') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div class="form-group">
<label class="col-md-3 control-label">Unit Name</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtUnit">
</div>
</div>
<div class="form-group">
<label class="col-md-3 control-label">Unit Code</label>
<div class="col-md-6">
<input type="text" class="form-control" name="txtCode">
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








