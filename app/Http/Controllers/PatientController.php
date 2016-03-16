<?php

namespace App\Http\Controllers;



class PatientController extends Controller
{
	public function getIndex()
    {
    	return view('patients.index');
    }

}
