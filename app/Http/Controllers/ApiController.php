<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function methodName(){
    // Your logic here
    return response()->json(['key' => 'value']);
	}
	
	// Example of fetching data from a database
	/*public function getData(){
    $data = YourModel::all();
    return response()->json($data);
	}*/
}
