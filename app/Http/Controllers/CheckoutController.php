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
            return 'On Processing';
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
