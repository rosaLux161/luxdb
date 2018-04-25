<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Address;

class CustomerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      return view('pages.customer.search');
    }
  
        /**
     * Kundensuche
     *
     * @return Response
     */
    public function search(Request $request)
    {
      $customers = Customer::where('lastname', $request->lastname)->get();
      return view('pages.customer.search', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
      return view('pages.customer.create');
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
      $insert->phonenumber = $request->phonenumber;
      $insert->email = $request->email;
      $insert->officialid = $request->officialid;
      $insert->save();
      $id = $insert->id;

      $insert = new Address;
      $insert->street = $request->street;
      $insert->housenumber = $request->housenumber;
      $insert->zip = $request->zip;
      $insert->city = $request->city;
      $insert->customerid = $id;
      $insert->save();
      
      echo '<head> 
      <meta http-equiv="refresh" content="0; URL=http://luxdb.me/customers/'.$id.'" />
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
      $customers = Customer::where('id', $id)->get();
      $addresses = Address::where('customerid', $id)->get();
      foreach($customers as $customer){
        $lastname = $customer->lastname;
        $firstname = $customer->firstname;
        $company = $customer->company;
        $phonenumber = $customer->phonenumber;
        $email = $customer->email;
        $officialid = $customer->officialid;
      }
      foreach($addresses as $address){
        $street = $address->street;
        $housenumber = $address->housenumber;
        $zip = $address->zip;
        $city = $address->city;
      }

      return view('pages.customer.show', compact('id', 'lastname','firstname','company','phonenumber','email','officialid', 'street', 'housenumber', 'zip', 'city'));
      
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $customers = Customer::where('id', $id)->get();
      $addresses = Address::where('customerid', $id)->get();
      foreach($customers as $customer){
        $lastname = $customer->lastname;
        $firstname = $customer->firstname;
        $company = $customer->company;
        $phonenumber = $customer->phonenumber;
        $email = $customer->email;
        $officialid = $customer->officialid;
      }
      foreach($addresses as $address){
        $street = $address->street;
        $housenumber = $address->housenumber;
        $zip = $address->zip;
        $city = $address->city;
      }

      return view('pages.customer.edit', compact('id','lastname','firstname','company','phonenumber','email','officialid', 'street', 'housenumber', 'zip', 'city'));
    }     
    
  
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id){
      $insert = Customer::find($id);
      $insert->lastname = $request->lastname;
      $insert->firstname = $request->firstname;
      $insert->company = $request->company;
      $insert->phonenumber = $request->phonenumber;
      $insert->email = $request->email;
      $insert->officialid = $request->officialid;
      $insert->save();
      $id = $insert->id;

      $gets = Address::where('customerid', $id)->get();
      foreach($gets as $get){
        $addressid = $get->id;
      }

      $insert = Address::find($addressid);
      $insert->street = $request->street;
      $insert->housenumber = $request->housenumber;
      $insert->zip = $request->zip;
      $insert->city = $request->city;
      $insert->customerid = $id;
      $insert->save();
      
      echo '<head> 
      <meta http-equiv="refresh" content="0; URL=http://luxdb.me/customers/'.$id.'" />
    </head>';

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
