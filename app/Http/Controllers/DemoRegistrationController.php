<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class DemoRegistrationController extends Controller
{
    public function index(){
        return view('front.customers.signup');

    }
    public function addCustomer(Request $request){
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->mobile_number = $request->mobile_number;
        $customer->location = $request->location;
        $customer->name_of_institution = $request->name_of_institution;
        $customer->institution_type = $request->institution_type;
        $customer->role_in_institution = $request->role_in_institution;
        $customer->website_link = $request->website_link;
        $customer->message = $request->message;
        $customer->save();

        return redirect('/sign-up/demo')->with('message','Registration Successfully. You will get a mail soon.');

    }
}
