<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerCredential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function signUp(){
        return view('front.customers.sign-up');
//        return view('front.mails.registration-mail');
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
        $customer->password = $request->password;
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
        $data['edumanager_url'] = route('/home');
        $data['info_mail_address'] = 'info@edumanager.net';


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
        return view('front.customers.sign-in');
    }

    public function signInCustomer(Request $request){
//        return $request;
        $email = $request->email;
        $customer = Customer::where('email_address',$email)->first();
        if($customer){
            Session::put('CustomerId',$customer->id);
            Session::put('CustomerName',$customer->first_name);
            return redirect('/');
        }else{
            return redirect('/customer/sign-in/new')->with('message','E-mail Error');
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

    public function allCustomers(){
        $customers = Customer::all();
        return view('front.customers.manage-customers',['customers'=>$customers]);
    }

    public function viewCustomerInfo($id){
        $customer = Customer::find($id);
        return view('front.customers.view-customer',['customer'=>$customer]);

    }

    public function sendMainToCustomer($id){
        $customer = Customer::find($id);


        return view('front.customers.customer-mail',['customer'=>$customer]);

    }

    public function saveCustomerMailInfo(Request $request){
        $this->validate($request, [
            'demo_url' => 'required|max:50',
            'admin_id' => 'required|max:50',
            'admin_pass' => 'required|max:50',
            'employee_id' => 'required|max:50',
            'employee_pass' => 'required|max:50',
            'student_id' => 'required|max:50',
            'student_pass' => 'required|max:50',
            'parent_id' => 'required|max:50',
            'parent_pass' => 'required|max:50'
        ]);
//        return $request;
        $customer_credential = new CustomerCredential();
        $customer_credential->customer_id = $request->customer_id;
        $customer_credential->demo_url = $request->demo_url;
        $customer_credential->admin_id = $request->admin_id;
        $customer_credential->admin_pass = $request->admin_pass;
        $customer_credential->employee_id = $request->employee_id;
        $customer_credential->employee_pass = $request->employee_pass;
        $customer_credential->student_id = $request->student_id;
        $customer_credential->student_pass = $request->student_pass;
        $customer_credential->parent_id = $request->parent_id;
        $customer_credential->parent_pass = $request->parent_pass;
        $customer_credential->save();
        $data = $customer_credential->toArray();
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email_address'] = $request->email_address;
        $data['pricing_url'] = route('/pricing');
        $data['about_us_url'] = route('/about-us');
        $data['contact_us_url'] = route('/contact');
        $data['features_url'] = route('/features');
//        return $data;
        Mail::send('front.mails.congratulation-mail',$data, function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('Get started with your EduManager Demo!');
        });

        return redirect('customer/view-customer/'.$customer_credential->customer_id)->with('message','Mail Send Successfully.');
//        return redirect('/customer/confirmation-message');

    }

    public function deleteCustomer($id){
        $customer = Customer::find($id);
        $customer->is_deleted = true;
        $customer->save();
//        $customer->delete();
        return redirect('/customer/all')->with('message','Customer Inactivated successfully');

    }


}
