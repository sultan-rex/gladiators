<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Beneficiary;
use App\CustomerDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $beneficiery = new Beneficiary();
	    $customer = new CustomerDetail();
	    $data['from_account'] = $customer->where('id', '=', 1)->get();
	    $data['to_account'] = $beneficiery->where('customer_id', '=', 1)->get();
	    return view('customer/fund_transfer', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $transaction = new Transaction();
	    $transaction->origin_cust_id = $request->get('origin_cust_id');
	    $transaction->beneficiary_id = $request->get('beneficiary_id');
	    $transaction->type = 'Debit';
	    $transaction->amount = $request->get('amount');
	    $transaction->comments = $request->get('comments');
	    $transaction->mode_payment = $request->get('mode_payment');
	    $transaction->save();
	    return redirect('transaction/create');
	    return $transaction->id;
	 //   redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
