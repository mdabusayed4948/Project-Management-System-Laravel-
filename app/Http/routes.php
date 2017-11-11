<?php

Route::get('/','Adminauth\AuthController@showLoginForm');
Route::post('login' ,'Adminauth\AuthController@login');

Route::group(['middleware'=>['admin']],  function (){
Route::get('/dashboard','Admin\AdminController@dashboard');  

Route::get('/logout','Adminauth\AuthController@logout');
});
Route::get('/create',function(){
    App\User::create([
        'name'=>'sayed',
           'username'=>'sayedme120',
           'email'=>'sayedme120@gmail.com',
          'password'=>bcrypt('samiha@123'),
        
    ]);
});


//----------------------------------------------------------------------------------------------------------------------------------------
//-------------------Start project Area----------------------------
Route::get('project/create_project','ProjectController@project_form_view');
Route::post('project/create_project','ProjectController@create');
Route::get('project/view_project','ProjectController@index');
Route::get('project/delete/{id}','ProjectController@destroy');
Route::get('project/editform/{id}','ProjectController@edit');
Route::post('project/update','ProjectController@update');

//-------------------End project Area----------------------------

//-------------------------------------------------------------------------------------------------------------------

//------------------Start Developer Area----------------------------------------

Route::get('developer/create_developer','DeveloperController@developer_form_view');
Route::post('developer/create_developer','DeveloperController@create');
Route::get('developer/view_developer','DeveloperController@index');
Route::get('developer/delete/{id}','DeveloperController@destroy');
Route::get('developer/editform/{id}','DeveloperController@edit');
Route::post('developer/update','DeveloperController@update');

//------------------End Developer Area----------------------------------------

//-----------------------------------------------------------------------------------------------

//----------------Start Dev Assign On Area---------------------------------------------------------

//Route::get('developer/create_assign','DeveloperController@assign_form_view');
//Route::post('developer/create_assign','DeveloperController@assigncreate');
//Route::get('developer/view_assign','DeveloperController@assign_index');
//Route::get('developer/delete/{id}','DeveloperController@assign_destroy');
//Route::get('developer/editforms/{id}','DeveloperController@assign_edit');
//Route::post('developer/assign_update','DeveloperController@assign_update');

Route::get('developer/view_aactivedev','DeveloperController@active_dev');

//------------------End Dev Assign On Area----------------------------------------
//
//-----------------------------------------------------------------------------------------------

//----------------Start Module Area---------------------------------------------------------

Route::get('module/create_module','ModuleController@module_form_view');
Route::post('module/create_module','ModuleController@create');
Route::get('module/view_module','ModuleController@index');
Route::get('module/delete/{id}','ModuleController@destroy');
Route::get('module/editform/{id}','ModuleController@edit');
Route::post('module/update','ModuleController@update');


//----------------End Module Area--------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------

//-------------Start Module Task---------------------------------------------------------------------

Route::get('moduletask/create_moduletask','ModuletaskController@moduletask_form_view');
Route::post('moduletask/create_moduletask','ModuletaskController@create');
Route::get('moduletask/view_moduletask','ModuletaskController@index');
Route::get('moduletask/delete/{id}','ModuletaskController@destroy');
Route::get('moduletask/editform/{id}','ModuletaskController@edit');
Route::post('moduletask/update','ModuletaskController@update');
Route::get('moduletask/view_modulereport','ModuletaskController@modulereport');
//-------------End Module Task---------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------

//----------------Start Task Area---------------------------------------------------------

Route::get('task/create_task','TaskController@task_form_view');
Route::post('task/create_task','TaskController@create');
Route::get('task/view_task','TaskController@index');
Route::get('task/delete/{id}','TaskController@destroy');
Route::get('task/editform/{id}','TaskController@edit');
Route::post('task/update','TaskController@update');

//------------------End Task Area----------------------------------------

//-----------------------------------------------------------------------------------------------

//-----------------Start Task Status----------------------------------------------------------

Route::get('task_status/create_task_status','TaskstatusController@taskstatus_form_view');
Route::post('task_status/create_task_status','TaskstatusController@create');
Route::get('task_status/view_task_status','TaskstatusController@index');
Route::get('task_status/delete/{id}','TaskstatusController@destroy');
Route::get('task_status/editform/{id}','TaskstatusController@edit');
Route::post('task_status/update','TaskstatusController@update');

//-----------------End Task Status----------------------------------------------------------
//----------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------
//-----------------Start Unit Area-------------------------------------------------------------

Route::get('unit/create_unit','UnitController@unit_form_view');
Route::post('unit/create_unit','UnitController@create');
Route::get('unit/view_unit','UnitController@index');
Route::get('unit/delete/{id}','UnitController@destroy');
Route::get('unit/editform/{id}','UnitController@edit');
Route::post('unit/update','UnitController@update');

//----------------End Unit Area---------------------------------------------------------------
//------------------------------------------------------------------------------------------------

//---------------Start Developer Unit Area--------------------------------------------------------------

Route::get('devunit/create_devunit','DevunitController@devunit_form_view');
Route::post('devunit/create_devunit','DevunitController@create');
Route::get('devunit/view_devunit','DevunitController@index');
Route::get('devunit/delete/{id}','DevunitController@destroy');
Route::get('devunit/editform/{id}','DevunitController@edit');
Route::post('devunit/update','DevunitController@update');

//---------------End Developer Unit Area--------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------

//-------------Start Developer Task---------------------------------------------------------------------
Route::get('devtask/create_devtask','DevtaskController@devtask_form_view');
Route::post('devtask/create_devtask','DevtaskController@create');
Route::get('devtask/view_devtask','DevtaskController@index');
Route::get('devtask/delete/{id}','DevtaskController@destroy');
Route::get('devtask/editform/{id}','DevtaskController@edit');
Route::post('devtask/update','DevtaskController@update');
Route::get('devtask/totalinv_devtask','DevtaskController@dev_ttask');

//---------------End Developer Task Area--------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------

//----------------Start Client Area--------------------------------------------------------------------------------
Route::get('client/create_client','ClientController@client_form_view');
Route::post('client/create_client','ClientController@create');
Route::get('client/view_client','ClientController@index');
Route::get('client/delete/{id}','ClientController@destroy');
Route::get('client/editform/{id}','ClientController@edit');
Route::post('client/update','ClientController@update');

//---------------End Developer Task Area--------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------

//----------------Start Dashboard Area--------------------------------------------------------------------------------
Route::get('dashboard/view_dashboard','DashboardController@dashboard_view');

//---------------End Developer Task Area--------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------

//----------------Start Dashboard Area--------------------------------------------------------------------------------
Route::get('header/view_header','HeaderController@index');