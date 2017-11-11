
@extends('admin.layout')

@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<div class="panel panel-default">
<div class="panel-heading">Edit Developer Task </div>
<div class="panel-body">

<form class="form-horizontal" role="form" method="POST" action="{{ url('devtask/update') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
<label class="col-md-4 control-label">Id</label>
<div class="col-md-6">
    <input type="text" class="form-control" name="txtId" value="<?php echo $dtask->id ;?>" readonly="">
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label">Task Name</label>
<div class="col-md-6">
  <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbTname"   data-size="10">

       <?php
	
    foreach ($task as $task){
        if($dtask->task_id==$task->id){
    echo   " <option value='$task->id' selected>($task->id ,T) $task->name  ||  ($task->mid, M) $task->module_name  ||  ($task->pid, P) $task->project_name</option>";
         //  echo "<option value='$task->id' selected >$task->id || $task->name </option>";
        }else{
              echo   " <option value='$task->id' >($task->id, T) $task->name  ||  ($task->mid, M) $task->module_name  ||  ($task->pid, P) $task->project_name</option>";
             //echo "<option value='$task->id'  >$task->id || $task->name </option>";
        }
    }

?>
   
  </select>


</div>
</div>
 <div class="form-group">
<label class="col-md-4 control-label">Developer Name</label>
<div class="col-md-6">
  <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbDev"   data-size="10">


    <?php
	
    foreach ($dev as $dev){
        if($dtask->dev_id==$dev->id){
            echo "<option value='$dev->id' selected >$dev->id || $dev->name </option>";
        }else{
               echo "<option value='$dev->id'>$dev->id || $dev->name </option>";  
        }
    }

?>	
  </select>


</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Task Status</label>
<div class="col-md-6">
  <select class="selectpicker form-control" data-show-subtext="true" data-live-search="true"  name="cmbStatus"   data-size="10">

        
            <option ><?php echo $dtask->status; ?></option>
              <option value="Open">Open</option>
              <option value="Approved">Approved</option>
              <option value="In Progress">In Progress</option>
              <option value="Closed">Closed</option>
 
  </select>
  
    
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Start Date</label>
<div class="col-md-6">

    <input type="date" class="form-control" name="txtSdate" placeholder="yyyy-mm-dd" value="<?php echo $dtask->start_date; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Due Date</label>
<div class="col-md-6">

    <input type="date" class="form-control" name="txtDudate" placeholder="yyyy-mm-dd" value="<?php echo $dtask->due_date ;?>">
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Completed task </label>
<div class="col-md-6">

    <input type="text" class="form-control" name="txtPercent" placeholder="only number" value="<?php echo $dtask->percent ;?>">


</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">Remark </label>
<div class="col-md-6">

  <textarea name="txtRemark" class="form-control" cols="20" rows="4"><?php echo $dtask->remark?></textarea>
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















