<?php

namespace App\Http\Controllers;

Use DB;

use App\CustomerAuth;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(Request $request)
    {
		return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {	
		//dd($request->all());
		$custID = $request->input('uname');
		$passWord = md5($request->input('psw'));
		
		$getDataList = CustomerAuth::where('username', $custID)->where('customer_password', $passWord)->first();
		
		 return redirect('customer-deatils');
			
    }

    public function customerDeatils(){
		return view('customer.account_details');
	}
}
