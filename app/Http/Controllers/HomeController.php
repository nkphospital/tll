<?php

namespace App\Http\Controllers;



class HomeController extends Controller
{
	public function getIndex()
    {
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
