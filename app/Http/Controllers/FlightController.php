<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class FlightController extends Controller
{
    public function view(){

  	 $flights = Flight::all;
  
        return view('flights.index')->with('flights',$flights);    	
    }
}
