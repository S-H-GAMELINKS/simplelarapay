<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function token(Request $request)
    {
        $pay_jp_secret = env('PAYJP_SECRET_KEY');

        \Payjp\Payjp::setApiKey($pay_jp_secret);

        \Payjp\Charge::create(array(
            "card" => request('payjp-token'),
            "amount" => 3500,
            "currency" => "jpy",
            // "tenant" => "ten_xxx" // PAY.JP Platformでは必須
        ));
    }
}
