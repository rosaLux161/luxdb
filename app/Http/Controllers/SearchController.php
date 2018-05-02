<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Response;

class SearchController extends Controller
{
public function autocomplete(){
	$term = Input::get('term');
	
	$results = array();
	
	// this will query the users table matching the first name or last name.
	// modify this accordingly as per your requirements
	
	$queries = DB::table('customers')
		->where('firstname', 'LIKE', '%'.$term.'%')
		->orWhere('lastname', 'LIKE', '%'.$term.'%')
		->take(5)->get();
	
	foreach ($queries as $query)
	{
	    $results[] = [ 'id' => $query->id, 'value' => $query->firstname.' '.$query->lastname ];
	}
return Response::json($results);
}
}