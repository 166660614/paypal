<?php

namespace App\Http\Controllers\Pay;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayPalController extends Controller
{
    public function payPal(){
        return view('paypal.pay');
    }
}
