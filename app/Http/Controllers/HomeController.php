<?php

namespace App\Http\Controllers;

use App\Entity;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

    	return view( 'home', [ 
    		'entities' => Entity::all()
    	] );  
    }
}
