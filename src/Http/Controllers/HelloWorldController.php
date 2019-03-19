<?php 

namespace Taitt\HelloWorld\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
	
	public function getIndex()
    {
        return view('taitt-hello-world::index');
    }
}