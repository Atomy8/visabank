<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $transactions =  Transaction::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('transactions.addnew');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $full_name = $request->input('fullname');
        $email = auth()->user()->email;
        $transaction = new Transaction;
        $transaction->payref = 'VISA-' . date('dmyHis');
        $transaction->amount = $request->input('amount');
        $transaction->paystatus = 'initialized';
        $transaction->gresponse = 'initialized';
        $transaction->user_id = auth()->user()->id;
        $transaction->save();
        $this->gotopaystack($transaction->id, $full_name, $email, $transaction->payref, $transaction->amount);
    }



    //go to paystack for payment
    public function gotopaystack($transactionid, $fullname, $email, $payref, $amount) {
        $baseurl = "http://visabank/transactions/";
        $newurl = md5(date('Now'));
        //$subacc = 'ACCT_qyal8r4kg6pc6jc'; // sub-account code, you get this when you set up a split account.
        $cancel_url = $baseurl . 'cancelpayment/' . $payref . '/' . $newurl;
        //base url
        $baseUrl = "http://visabank/";
        //arrange and go to paystack

        /*         * *********************************** */
        /* initialize transaction */
        /*         * ********************************** */
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'callback_url' => $baseUrl . 'transactions/paymentverification/' . $payref,
                'amount' => $amount . '00',
                'email' => $email,
                'name' => $name = $fullname,
                // 'subaccount'=> $subacc,
                //'phone' => $phone,
                'reference' => $payref,
                'metadata' => json_encode([
                    'cancel_action' => $cancel_url,
                    'name' => $name = $fullname,
                    //'fname' => $fname,
                    'email' => $email,
                    //'phone' => $phone,
                    'transaction_id' => $transactionid,
                    'payref' => $payref,
                ]),
            ]),
            CURLOPT_HTTPHEADER => [
                "authorization: Bearer sk_test_28d3aed6abf47ea60aad6b113d6b11e0502eb592",
                "content-type: application/json",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        // debug(json_encode( $response, JSON_PRETTY_PRINT));exit;

        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response);

        if (!$tranx->status) {
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }
        //print_r($tranx);
        return redirect()->to($tranx->data->authorization_url)->send();
    }



    //verify payment and assign value - paystack
    public function paymentverification($ref) {
        //print_r($ref);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_test_28d3aed6abf47ea60aad6b113d6b11e0502eb592",
                "cache-control: no-cache"
            ],
        ));

        //sk_test_7d5d515418c31cf203abbe3f753b1487b7d2a5e2

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response);
        // debug( $tranx);
        if (!$tranx->status) {
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }
        if ($tranx->data->status != "success") {
            return redirect('home')->with('error', 'The Transaction failed.');
        }

        $trans_id = $tranx->data->metadata->transaction_id;
        $email = $tranx->data->metadata->email;
        $name = $tranx->data->metadata->name;
        //update transaction record
        $transaction = Transaction::find($trans_id);
        $transaction->amount = $tranx->data->amount / 100;
        $transaction->paystatus = 'completed';
        $transaction->gresponse = $tranx->data->status;
        $transaction->save();

        return redirect('home')->with('success', 'Your payment was successful.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
