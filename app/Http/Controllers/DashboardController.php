<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
     public function dashboard_view()
	{
        
               
                               return view('view_dashboard');
	}
}
