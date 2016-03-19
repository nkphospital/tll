<?php

namespace App\Http\Controllers;

use Sentinel;

class HomeController extends Controller
{
	public function getIndex()
    {
        // $user = Sentinel::findById(1);

        // Sentinel::loginAndRemember($user);
        
        return dd(Sentinel::getUser());
    	return view('welcome');
    }

    public function getPatient()
    {
    	return view('patients.index');
    }

    public function getEmpty()
    {
    	return view('templates.blank');
    }
}
