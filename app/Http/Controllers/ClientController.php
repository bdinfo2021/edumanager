<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\CustomerCredential;
use Illuminate\Support\Facades\Mail;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allClients(){
        $customers = Customer::all();
        return view('admin.clients.manage-clients',['customers'=>$customers]);
    }

    public function viewClientInfo($id){
        $customer = Customer::find($id);
        return view('admin.clients.view-client',['customer'=>$customer]);

    }

    public function sendMainToClient($id){
        $customer = Customer::find($id);


        return view('admin.clients.client-mail',['customer'=>$customer]);

    }

    public function saveClientMailInfo(Request $request){
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
        $data['bcc_email_address'] = ['sanaulla.ict@gmail.com','fazle.rabbi@aamra.com.bd'];
        $data['pricing_url'] = route('/pricing');
        $data['about_us_url'] = route('/about-us');
        $data['contact_us_url'] = route('/contact');
        $data['features_url'] = route('/features');
//        return $data;
        Mail::send('admin.mails.congratulation-mail',$data, function ($message) use ($data){
            $message->to($data['email_address']);
            $message->bcc($data['bcc_email_address']);
            $message->subject('Get started with your EduManager Demo!');
        });

        return redirect('client/view-client/'.$customer_credential->customer_id)->with('message','Mail Send Successfully.');
//        return redirect('/customer/confirmation-message');

    }

    public function deleteClient($id){
        $customer = Customer::find($id);
        $customer->is_deleted = true;
        $customer->save();
//        $customer->delete();
        return redirect('/client/all')->with('message','Client Inactivated successfully');

    }

}
