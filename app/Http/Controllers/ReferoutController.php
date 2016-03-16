<?php

namespace App\Http\Controllers;



class ReferoutController extends Controller
{
	public function getIndex()
    {
    	
    	return view('referouts.index');
    }

    public function getNew()
    {
    	return view('referouts.new');
    }

}
