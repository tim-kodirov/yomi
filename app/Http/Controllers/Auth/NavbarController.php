<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavbarController extends Controller
{
    public function __construct(){
    	$this->middleware("auth");
    }


    public function index(){

    	
    }
}
