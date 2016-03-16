<?php

namespace App\Http\Controllers\Administrators;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdministratorController extends Controller
{
	public function getIndex()
    {
    	return view('patients.index');
    }

}
