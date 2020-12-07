<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Requests\StorePaymentMethod;
use App\PaymentMethod;
use App\Person;
use Faker\Provider\ar_SA\Payment;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
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
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create(Client $client)
    {
        return view('payments.create', [
            'client' => $client,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePaymentMethod $request
     * @param Client $client
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePaymentMethod $request, Client $client)
    {

        $payment = new PaymentMethod();
        $payment->fill($request->validated());
        $client->paymentMethods()->save($payment);
        return redirect()->route('clients.show', [
            $client
        ]);
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
     * @param Client $client
     * @param PaymentMethod $paymentMethod
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Client $client, PaymentMethod $paymentMethod)
    {
        try {
            $paymentMethod->delete();
            return redirect()->route('clients.show', [$client]);
        } catch (\Exception $e) {
            throw new \DomainException($e->getMessage());
        }
    }
}
