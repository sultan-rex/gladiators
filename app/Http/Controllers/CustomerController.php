<?php

namespace App\Http\Controllers;

Use DB;

use App\CustomerAuth;
use App\CustomerDetail;
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
		if($request->session()->get('auth_id')){
			return redirect('customer-details');
		}
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
		if($getDataList){
			$request->session()->put('auth_id', $getDataList->id);
		}
		
		 return redirect('customer-details');
			
    }

    public function customerDetails(Request $request){
		$getDataList = CustomerDetail::where('cust_id', $request->session()->get('auth_id'))->first();
		return view('customer.account_details')->with('data', $getDataList);
	}
}
