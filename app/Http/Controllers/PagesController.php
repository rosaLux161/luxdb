<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Willkommen bei LuxDB';
        return view('pages.index')->with('title', $title);
    }
    public function services(){
        return view('pages.services');
    }
}