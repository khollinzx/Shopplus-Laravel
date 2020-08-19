<?php

namespace App\Http\Controllers;

use App\Model\Cart;
use App\Model\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Paystack;

class PaymentController extends Controller
{
    //
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name"  => 'required',
            "email" => 'required',
            "phone_no" => 'required',
            "shipping_address" => 'required'
        ]);


        if ($validator->fails()) {
            // dd($validator->errors()->all()[0]);
            return back()->with('toast_error', $validator->errors()->all()[0])->withInput();
        }

        $fields = [
            'name' => $request->name,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'shipping_address' => $request->shipping_address,
        ];

        $request->session()->put('userData', $fields);

        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if (!Session::has('cart')) {
            return view('pages.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        if (Session::has('userData')) {
            $userData =  Session::get('userData');
        }
        try {
            if ($paymentDetails['data']['status'] === 'success' && $paymentDetails['data']['gateway_response'] === "Successful") {
                $order = new Order();
                $order->name = $userData["name"];
                $order->email = $userData["email"];
                $order->phone_no = $userData["phone_no"];
                $order->shipping_address = $userData["shipping_address"];
                $order->payment_id = $paymentDetails["data"]["reference"];
                $order->cart_items = serialize($cart);
                $order->amount = substr($paymentDetails['data']['amount'], 0, (strlen($paymentDetails['data']['amount'])) - 2);

                Auth::user()->orders()->save($order);
            }
        } catch (\Exception $e) {
            return redirect()->route('product.checkouts')->with('errors', $e->getMessage());
        }


        Session::forget('userData');
        Session::forget('cart');
        return redirect()->route('product.index')->with('alert_success', 'Purcahse was successfully made');
    }
}
