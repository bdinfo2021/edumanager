<?php

namespace App\Http\Controllers;

use App\BankPayment;
use Illuminate\Http\Request;
use App\OnlinePayment;

class CheckoutController extends Controller
{
    private $merchant_token = "e/ElHdFXTaKwmN6HKHUV0bNMI7HBQaxWRL3siBZZ1y5PvLCbMWDvjA==";

    public function saveShippingInfo(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required|string|max:10',
            'orderTotal' => 'required|string|max:10',
            'shippingAddress' => 'required|string|max:200',
            'country' => 'required|string|max:20',
            'state' => 'required|max:20',
            'zip' => 'required|max:20',
            'paymentType' => 'max:20'
        ]);
        if ($request->paymentType == 'bank_payment') {
            $this->validate($request, [
                'depositSlip' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $imageUrl = $this->productImageUpload($request);
            $bank_payments = new BankPayment();
            $bank_payments->customer_id = $request->customer_id;
            $bank_payments->order_total = $request->orderTotal;
            $bank_payments->shipping_address = $request->shippingAddress;
            $bank_payments->country = $request->country;
            $bank_payments->state = $request->state;
            $bank_payments->zip = $request->zip;
            $bank_payments->payment_type = $request->paymentType;
            $bank_payments->deposit_slip = $imageUrl;
            $bank_payments->save();
            return redirect('/customer/checkout/success_notice');
        } else {
            $cart_final = array(
                'amount' => $request->orderTotal,
                'extra' => "",
                'notify_mobile' => $request->mobileNumber,
                'notify_email' => $request->emailAddress,
                'cancel_url' => route('/cancel-url'),
                'transactionid' => $request->customer_id,
                'fail_url' => route('/fail-url'),
                'token' => $this->merchant_token,
                'success_url' => route('/success-url')
            );
            $json = json_encode($cart_final);
            $url_encode_data = urlencode($json);
//            return $url_encode_data;
            $url = "http://ecom.aamrainfotainment.com/msp/PUBLIC_API/AccessToken.jsp?data={$url_encode_data}";
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $data = curl_exec($ch);
            curl_close($ch);
//            $get_access_token = file_get_contents($url);
//            return gettype($data);
//            $get_access_token = $data;
            $get_access_token = json_decode($data);
//            return response()->json($get_access_token);
//            return $get_access_token->data->amount;
            $access_token_url = "http://ecom.aamrainfotainment.com/msp/payment2.jsp?atoken=" . urlencode($get_access_token->access_token);
            return redirect($access_token_url);
        }
    }

    protected function productImageUpload($request)
    {
        $productImage = $request->file('depositSlip');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'deposit_slip/' . $request->customer_id . '/';
        $imageUrl = $directory . $imageName;
//        $productImage->move($imageUrl);
        $productImage->move($directory, $imageName);
        return $imageUrl;
    }

    public function cancelMessage()
    {
        return view('front.checkout.cancel-message');
    }

    public function failMessage()
    {
        return view('front.checkout.fail-message');
    }

    public function successMessage(Request $request)
    {

    }

    public function onlinePaymentResponse(Request $request)
    {
        $return_token = $request->return_token;
        $payment_final = array(
            'return_token' => "" . $return_token . "",
            'token' => "" . $this->merchant_token . ""
        );

        $json = json_encode($payment_final);

        $url_encode_data = urlencode($json);

        $url = "http://ecom.aamrainfotainment.com/msp/PUBLIC_API/TokenInfo.jsp?data={$url_encode_data}";
        //echo '<br><br><br>';

        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);

//        $get_data = file_get_contents($url);
//        return $get_data;
//        $get_data = $data;
        $get_data = json_decode($data);


        $get_data2 = '{
            "transaction_id" : "Sat Sep 12 13:30:11 BDT 201569341.50042373298",
            "amount" : "90",
            "bank_transaction_id" : "j6v1qpcb3l",
            "data" :
                {
                    "return_token" : "pPUCEktoCHI7uojmk7GaBRnfm6OXGyRVpvHk5gDagc2BD9VwCutcmq6BB6nrHJN8"
                },
            "ip" : "182.160.120.178",
            "access_token" : "Ytd4W55oQBja8iIsYCmjk7bKbw10GUt6wrj3F1PfzBKBD9VwCutcmtfnKswfmVrw",
            "success" : true,
            "domain" : "www.newdomain.com",
            "bank_transaction_details" : {
                "banktransactionid" : "j6v1qpcb3l",
                "transactionid" : "n\/nkjL\/tB1rZ8FDg3gcVtNuq7ess5FbXa7kb1jCWfz6BD9VwCutcmgbw23\/DLKNK"
            },
            "bank_name" : "TestBank",
            "time" : "2015-09-12 13:30:10.257",
            "hit_count" : "0",
            "status" : "SUCCESS"
        }';
//        $get_data = json_decode($get_data2);
//        $get_data = response()->json($get_data2);
//        return $get_data->status;


        if ($get_data->success == false) {
            return redirect('/customer/checkout/fail_url');
        } elseif ($get_data->status == 'SUCCESS') {
            $online_payment = new OnlinePayment();
            $online_payment->transaction_id = $get_data->transaction_id;
            $online_payment->amount = $get_data->amount;
            $online_payment->bank_transaction_id = $get_data->bank_transaction_id;
            $online_payment->ip = $get_data->ip;
            $online_payment->domain = $get_data->domain;
            $online_payment->banktransactionid = $get_data->bank_transaction_details->banktransactionid;
            $online_payment->transactionid = $get_data->bank_transaction_details->transactionid;
            $online_payment->bank_name = $get_data->bank_name;
            $time = strtotime($get_data->time);
            $online_payment->created_time = date("m-d-y H:i:s",$time);// $time->format('m-d-y H:i:s');;
            $online_payment->save();
            return redirect('/customer/checkout/success_notice');
        } else {
            return redirect('/customer/checkout/cancel_url');
        }
    }
}
