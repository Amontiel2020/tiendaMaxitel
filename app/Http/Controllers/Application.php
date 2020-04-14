<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Producto;

class Application extends Controller
{
    public function index(){
     $productos=Producto::all();
    	return view('Application.index',compact('productos'));
    }

    public function show($slug){
    	$producto=Producto::where('slug',$slug)->first();
    	//dd($producto);
    	return view('Application.show',compact('producto'));
    }
}
