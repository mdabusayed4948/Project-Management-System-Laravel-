@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Create Active Developer <a href="view_developer"><span style="float: right"><i class="glyphicon glyphicon-eye-open"></i>  Active Developer List</span></a></div>
<div class="panel-body">


 <form class="form-horizontal" action="{{url('developer/create_assign')}}" method="post">
      <input type="hidden" name="_token" value="<?php echo csrf_token()?>" />
     
  
      <div class="form-group">
       <label class="col-md-3 control-label">Project Name</label>
       <div class="col-md-6">
       <select name="cmbProjectId" class="form-control">
               <option>--select--</option>
            <?php
	     
         foreach($project as $project){
	 echo "<option value='$project->id'>$project->description</option>";
	     }
	   ?>
       </select>
       </div>
     </div>
     
     <div class="form-group">
       <label class="control-label col-md-3">Developer Name</label>
       <div class="col-sm-6">
       <select name="cmbdevId" class="form-control">
           <option>--select--</option>
            <?php
	     
         foreach($dev as $dev){
	 echo "<option value='$dev->id'>$dev->name</option>";
	     }
	   ?>
       </select>
       </select>
       </div>
     </div>
     
     
     
      <div class="form-group">
       <label class="control-label col-md-3">Joining Date</label>
       <div class="col-sm-6">
           <input type="date" name="txtStartDate" class="form-control" />
       </div>
     </div>
     
    
       <div class="form-group">
       <label class="control-label col-md-3">Job Description</label>
       <div class="col-sm-6">
           <textarea type="text" name="txtJobDesc" class="form-control"  cols="20" rows="4"></textarea>
       </div>
     </div>
     
     <div class="form-group">
     
       <div class="col-sm-offset-3 col-md-6">
       <input type="submit" name="btnSubmit"  class="btn btn-default" value="Submit" />
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






