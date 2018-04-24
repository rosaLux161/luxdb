<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function newcustomer(){
        return view('pages.newcustomer');
    }
    public function savecustomer(Request $request){
        $lastname = $request->lastname;
        return view('pages.showcustomer', compact('lastname'));
    }
}
