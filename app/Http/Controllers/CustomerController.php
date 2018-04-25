<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      return view('pages.newcustomer');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $insert = new Customer;
      $insert->lastname = $request->lastname;
      $insert->firstname = $request->firstname;
      $insert->company = $request->company;
      $insert->phonenumber = $request->telephonenumber;
      $insert->email = $request->email;
      $insert->officialid = $request->officialid;
      $insert->save();
      
      echo '<head> 
      <meta http-equiv="refresh" content="0; URL=http://luxdb.me/customers/show/'.$insert->id.'" />
    </head>';
    }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      
    }
    
  }
