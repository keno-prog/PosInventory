<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){

    	return view('inventory.index');
    }    

    public function calc(){

    	return view('inventory.calculator');
    }
}
