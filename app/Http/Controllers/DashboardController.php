<?php

namespace clinica\Http\Controllers;

use Illuminate\Http\Request;

use clinica\Http\Requests;

class DashboardController extends Controller
{
    public function index(){
    	return view('dashboards');
    }
}
