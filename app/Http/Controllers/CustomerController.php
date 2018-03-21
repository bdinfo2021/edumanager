<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    private $packageDetails = [
        1 => [
            'name' => 'CORE',
            'price' => 150000
        ],
        2 => [
            'name' => 'ADVANCED',
            'price' => 300000
        ],
        3 => [
            'name' => 'ENTERPRISE',
            'price' => 500000
        ]
    ];
    public function signUp(){
        if($this->checkLogin()){
            return redirect('/pricing/all');
        }else{
            return view('front.customers.sign-up');
        }
//        return view('front.mails.registration-mail');
    }
    public function addCustomer(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email_address' => 'required|string|email|max:50|unique:customers',
            'password' => 'required|string|min:6|confirmed',
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
        $customer->password = bcrypt($request->password);
        $customer->mobile_number = $request->mobile_number;
        $customer->address = $request->address;
        $customer->name_of_institution = $request->name_of_institution;
        $customer->institution_type = $request->institution_type;
        $customer->role_in_institution = $request->role_in_institution;
        $customer->website_link = $request->website_link;
        $customer->message = $request->message;
        $customer->save();
        Session::put('CustomerId',$customer->id);
        Session::put('CustomerName',$customer->first_name);
        $data = $customer->toArray();
        $data['edumanager_url'] = route('/');
        $data['info_mail_address'] = 'sales.infotainment@aamra.com.bd';


        Mail::send('front.mails.registration-mail',$data, function ($message) use ($data){
            $message->to($data['info_mail_address']);
            $message->subject('Get started with your EduManager Demo!');
        });

//        return redirect('/sign-up/demo')->with('message','Registration Successfully. You will get a mail soon.');
        return redirect('/customer/confirmation-message');

    }

    public function message(){
        return view('front.customers.confirmation-message');
    }

    public function signInForm(){
        if($this->checkLogin()){
            return redirect('/');
        }else{
            return view('front.customers.sign-in');
        }
    }

    public function signInCustomer(Request $request){
//        return $request;
        $email = $request->email;
        $password = $request->password;
        $customer = Customer::where(['email_address' => $email, 'is_deleted' => 0])->first();
        if ($customer)
        {
            if (Hash::check($password, $customer->password))
            {
                Session::put('CustomerId',$customer->id);
                Session::put('CustomerName',$customer->first_name);
                return redirect('/pricing/all');
            }else{
                return redirect('/customer/sign-in/new')->with('message','Password not match');
            }
        }else{
            return redirect('/customer/sign-in/new')->with('message','User is not available');
        }
    }

    public function signOutCustomer(){
        Session::forget('CustomerId');
        Session::forget('CustomerName');
        return redirect('/');
    }

    public function customerEmailCheck($email){
        $customer = Customer::where('email_address',$email)->first();
        if($customer){
            echo 'Email is not Available';
        }else{
            echo 'Email Available';
        }
    }

    private function checkLogin(){
        $customer = Customer::find(Session::get('CustomerId'));
        if($customer){
            return $customer;
        }else{
            return false;
        }
    }

    public function shippingInfo($package_id){
        if($this->checkLogin()){
//            return $this->packageDetails[$package_id];
            return view('front.checkout.show-shipping',['customer'=>$this->checkLogin(),'package'=> $this->packageDetails[$package_id]]);
        }else{
            return redirect('/customer/sign-up')->with('message','You have to registration first');

        }
    }

    public function saveShippingInfo($package_id){
        if($this->checkLogin()){
//            return $this->packageDetails[$package_id];
            return view('front.checkout.show-shipping',['customer'=>$this->checkLogin(),'package'=> $this->packageDetails[$package_id]]);
        }else{
            return redirect('/customer/sign-up')->with('message','You have to registration first');

        }
    }


}
