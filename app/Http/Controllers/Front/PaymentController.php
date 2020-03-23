<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Tzsk\Payu\Facade\Payment as payuPayment;
use App\Models\CoursePayment;
use App\Models\CourseSubscription;
use App\Models\Course;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $course = Course::find(1);
        $amount = rand(100, 999); # Amount to be charged.

        $user = auth()->authenticate();


        $courseSubscription = CourseSubscription::subscribeUser($user, $course);


        // $courseSubscription = CourseSubscription::firstOrCreate([
        //     'user_id' => $user->id,
        //     'course_id' => $course->id,
        // ]);

        // if($courseSubscription->amount == 0)
        //    $courseSubscription->amount =  '30000';


        //dd($courseSubscription);
        return $this->payment($courseSubscription, $amount, 'payumoney');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment($courseSubscription, $amount, $provider = 'payumoney')
    {
        //
        $user = auth()->authenticate();
        if($amount<=0)
            return null;

        $coursePayment = CoursePayment::create([
                        'user_id' => $user->id,
                        'subscription_id' => $courseSubscription->id,
                        'amount' => $amount,
                        ]);

        if($provider == 'payumoney')
            return $this->payumoney($coursePayment);
    }


    public function paymentStatus($coursePayment)
    {
        //
        $coursePayment->save();
        dd($coursePayment);
    }


    public function payumoney($coursePayment)
    {
        //

        //User phone is compulsary
        if($coursePayment->user->phone)
            $userPhone = $coursePayment->user->phone;
        else
            $userPhone = '9326060480';

        //dd($coursePayment->courseSubscription);
        $attributes = [
            'txnid' => strtoupper(str_random(8)), # Transaction ID.
            'amount' => $coursePayment->amount, # Amount to be charged.
            'productinfo' => $coursePayment->courseSubscription->course->name,
            'firstname' => $coursePayment->user->name, # Payee Name.
            'email' => $coursePayment->user->email, # Payee Email Address.
            'phone' => $userPhone, # Payee Phone Number.
        ];

        return payuPayment::with($coursePayment)->make($attributes, function ($then) {
            $then->redirectAction('Front\PaymentController@payuResponse');
        });
    }

    public function payuResponse()
    {
        //
        $payment = payuPayment::capture();
        //dd($payment);
        $coursePayment = coursePayment::find($payment->payable_id);

        $coursePayment['mode'] = $payment->mode;
        $coursePayment['status'] = $payment->status;
        $coursePayment['local_trx_id'] = $payment->transaction_id;
        $coursePayment['gtw_trx_id'] = $payment->payment_id;
        $coursePayment['bank_reference_number'] = $payment->bank_reference_number;
        //$coursePayment['bank_code'] = $payment->bankcode;
        $coursePayment['card_number'] = $payment->card_number;
        $coursePayment['name_on_card'] = $payment->name_on_card;
        $coursePayment['issuing_bank'] = $payment->issuing_bank;
        $coursePayment['card_type'] = $payment->card_type;
        $coursePayment['status'] = $payment->status;
        $coursePayment['status_detail'] = $payment->unmappedstatus;
        $coursePayment['gateway'] = 'online_payumoney';
        return $this->paymentStatus($coursePayment);
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
