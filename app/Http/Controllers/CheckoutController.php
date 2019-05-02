<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function store()
    {
        // charge the user
        Stripe::setApiKey(config('services.stripe.secret'));

        $charge = Charge::create([
            'amount' => request('amount'),
            'currency' => 'usd',
            'description' => 'blah blah',
            'source' => request('token'),
        ]);

        Cart::destroy();


        // create an order for that user.
        Order::create([
            'email' => request('stripeEmail'),
            'amount' => number_format($charge->amount / 100, 2)
        ]);

        return 'done';
    }
}
