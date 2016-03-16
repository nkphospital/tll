<?php

namespace App\Http\Controllers\Administrators;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdministratorController extends Controller
{
	public function index()
    {
    	return view('administrators.index');
    }

    public function getNew()
    {
    	return view('administrators.user.new');
    }

}
