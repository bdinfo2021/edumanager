<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoRegistrationController extends Controller
{
    public function index(){
        return view('front.customers.signup-form');

    }
    public function addCustomer(Request $request){
        $this->validate($request, [
            'first_name' => 'required|alpha|max:50',
            'last_name' => 'required|alpha|max:50',
            'email_address' => 'email|max:50',
            'mobile_number' => 'required|max:20',
            'address' => 'required|max:200',
            'name_of_institution' => 'max:254',
            'institution_type' => 'max:254',
            'role_in_institution' => 'max:254',
            'website_link' => 'max:254',
            'message' => 'max:254',
        ]);
//        return $request;
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->mobile_number = $request->mobile_number;
        $customer->address = $request->address;
        $customer->name_of_institution = $request->name_of_institution;
        $customer->institution_type = $request->institution_type;
        $customer->role_in_institution = $request->role_in_institution;
        $customer->website_link = $request->website_link;
        $customer->message = $request->message;
        $customer->save();
        $data = $customer->toArray();


        Mail::send('front.mails.congratulation-mail',$data, function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('Get started with your EduManager Demo!');
        });

//        return redirect('/sign-up/demo')->with('message','Registration Successfully. You will get a mail soon.');
        return redirect('/customer/confirmation-message');

    }

    public function message(){
        return view('front.customers.confirmation-message');
    }
}
