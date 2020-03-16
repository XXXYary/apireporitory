<?php

namespace App\Http\Controllers;
use App\caso;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class controllercaso extends Controller
{
    public function index()
    {
    	$Casos = caso::all();
        return view('casos', compact('Casos'));
    }
}
