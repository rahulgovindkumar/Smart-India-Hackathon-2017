<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer as Customer;

class CustomerController extends Controller
{
    public function Customer($id){
    	$customer=Customer::find($id);
	return view('customer',array('customer' => $customer ));

    }
}
