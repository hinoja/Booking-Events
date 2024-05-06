<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
	public  function checkout()
	{
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
		// \Stripe\Stripe::setApiKey('sk_test_51Kp5tJGRaOhIEKLtouPZzW5F8bA3Dfr1IZzvVnMs7OPGgNYFRBO76yFnmY0m8NYPaFsGr1vqjtK7X2LGdLNpwPdT00wSBnBjMP');


		$amount = 1000;
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount, //correctement formater avant d'envoyer,imperatif valeur en cents (A faire)
			'currency' => 'XAF',
			// "source" => $request->stripeToken,
			'description' => 'Booking Payment',
			'payment_method_types' => ['card'],
		]);
		// $search = $payment_intent;
		// $intent = $payment_intent->client_secret;
		if($payment_intent->status == 'succeeded'){

			// return redirect()->route('payment.success');
		}else{
           
			return redirect()->back()->withErrors(['payment_error'=>"Payment  failed,please try again"]);
		}
		//
        $search=$payment_intent;
        $intent = $payment_intent->client_secret;

		return view('front.checkout', ['intent' => $payment_intent]);

	}
	public function after(Request $request)
	{
		$paymentIntent=$request->json()->all();//a verifier si la recuperation est effective à via REQUEST
            dd($paymentIntent);

	}
}
