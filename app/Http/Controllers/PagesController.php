<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Willkommen bei LuxDB';
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }

    // /customer
    public function newcustomer(){
        return view('pages.newcustomer');
    }
    public function savecustomer(Request $request){
        $lastname = $request->lastname;
        return view('pages.showcustomer', compact('lastname'));
    }
}