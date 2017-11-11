@extends('admin.layout')
@section('content')
   


<div id="dialog" class="dialog dialog-effect-in">

  <div class="dialog-front">
    <div class="dialog-content">
	<div><a href="http://dev.intels.co/sayed/"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>Return to Project Gallery</a></div>
	 <form id="login_form" class="dialog-form" action="{!!url('login')!!}" method="post"> 
            {!!csrf_field()!!}
    
        <fieldset>
          <legend style="text-align:center">Project Management System</legend>
          <div class="form-group">
            <label for="user_username" class="control-label">Username:</label>
            <input type="text" id="user_username" class="form-control" name="username" autofocus/>
          </div>
          <div class="form-group">
            <label for="user_password" class="control-label">Password:</label>
            <input type="password" id="user_password" class="form-control" name="password"/>
          </div>
          <div class="text-center pad-top-20">
           
          </div>
          <div class="pad-top-20 pad-btm-20">
		    <button class="btn btn-default btn-block btn-lg" type="submit">Login</button>
          
          </div>
          <div class="text-center">
            <p>Username & Password <br> For <a href="#" class="link user-actions"><strong>Click Here</strong></a></p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
  <div class="dialog-back">
    <div class="dialog-content">
      <form id="register_form" class="dialog-form" action="" method="POST">
        <fieldset>
          <legend style="text-align:center">Username & Password</legend>
          <div class="form-group">
            <label for="user_username" class="control-label" style="font-size:20px">Username <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span> </label>
           &nbsp<span  style="color:#345A82; font-size:15px">sayedme120 </span>
          </div>
          <div class="form-group">
            <label for="user_password" class="control-label" style="font-size:20px">Password <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>  </label>
           &nbsp<span style="color:#345A82; font-size:15px">admin@123</span>
          </div>
          <div class="form-group">
           
          </div>
          <div class="form-group pad-top-20 form-group-checkbox">
            <div class="checkbox">
             
            </div>
          </div>
          <div class="pad-btm-20">
		   
            <input type="submit" class="btn btn-default btn-block btn-lg" value="Welcome"/>
          </div>
          <div class="text-center">
            <p>Return to <a href="#" class="link user-actions"><strong> log in page</strong></a></p>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
  
   
@endsection()

