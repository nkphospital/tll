<?php

namespace App\Http\Controllers\Administrators;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
	public function getIndex()
    {
    	return view('administrators.index');
    }

    public function getNew()
    {
    	return view('administrators.user.new');
    }

}
