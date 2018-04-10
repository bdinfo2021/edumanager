<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetails;

class CheckoutController extends Controller
{

    public function saveShippingInfo(Request $request){
        $this->validate($request, [
            'customer_id' => 'required|string|max:10',
            'orderTotal' => 'required|string|max:10',
            'shippingAddress' => 'required|string|max:200',
            'country' => 'required|string|max:20',
            'state' => 'required|max:20',
            'zip' => 'required|max:20',
            'paymentType' => 'max:20'
        ]);
        if($request->paymentType == 'bank_payment'){
            $this->validate($request, [
                'depositSlip' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $imageUrl = $this->productImageUpload($request);
            $order_details = new OrderDetails();
            $order_details->customer_id = $request->customer_id;
            $order_details->order_total = $request->orderTotal;
            $order_details->shipping_address = $request->shippingAddress;
            $order_details->country = $request->country;
            $order_details->state = $request->state;
            $order_details->zip = $request->zip;
            $order_details->payment_type = $request->paymentType;
            $order_details->deposit_slip = $imageUrl;
            $order_details->save();
//        return redirect('/product/add')->with('message','Product Info Save Successfully');
            return view('front.checkout.shipping-confirmation-message');
        }else{
            $declineURL = 'http://aamraactive.com/active/member_payments/cancelpayment/';
            $redirect_url = 'http://aamraactive.com/active/member_payments/successpayment/';
            $cart_final = array(
                'amount' => $request->orderTotal,
                'extra' => "",
                'notify_mobile' => '',
                'notify_email' => $request->emailAddress,
                'cancel_url' => "",
                'transactionid' => "123456",
                'fail_url' => "{$declineURL}",
                'token' => "nV6M6Qi4EYNMP6dLMsTSbfV1PXpZVRaYo7Kv2Ts+h90=",
                'success_url' => "{$redirect_url}"
            );
            $json = json_encode($cart_final);
            $url_encode_data = urlencode($json);
            $url = "http://ecom.aamrainfotainment.com/msp_test/PUBLIC_API/AccessToken.jsp?data={$url_encode_data}";
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $data = curl_exec($ch);
            curl_close($ch);
            //$get_access_token = file_get_contents($url);
            $get_access_token = $data;
            $get_access_token = json_decode($get_access_token);
            $access_token_url = "http://ecom.aamrainfotainment.com/msp_test/payment2.jsp?atoken=".urlencode($get_access_token->access_token);
            return redirect($access_token_url);
        }
    }

    protected function productImageUpload($request){
        $productImage = $request->file('depositSlip');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'deposit_slip/'.$request->customer_id.'/';
        $imageUrl = $directory.$imageName;
//        $productImage->move($imageUrl);
        $productImage->move($directory,$imageName);
        return $imageUrl;
    }

}
