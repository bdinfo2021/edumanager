@extends('admin.master', ['body_class' => 'blog-page blog-archive-page'])
@section('body')

        <!-- ******BLOG LIST****** -->
<div class="blog blog-category blog-archive container">
    <h2 class="page-title text-center"><i class="fa fa-archive"></i> Customers Details</h2>
        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-sm-8 mx-auto">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="text-success text-center">Information</h3>
                        </div>
                        <div class="panel-body">
                            @if(Session::get('message'))
                                <div class="alert alert-success" role="alert">
                                    <strong>Well done!</strong> {{Session::get('message')}}
                                </div>
                            @endif
                            {{--<div class="card-body">--}}
                            <table class="table table-bordered table-light">
                                <tr>
                                    <th scope="col">Full Name</th>
                                    <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Email Address</th>
                                    <td>{{$customer->email_address}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Mobile Number</th>
                                    <td>{{$customer->mobile_number}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Billing Address</th>
                                    <td>{{$customer->address}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Name of Institution</th>
                                    <td>{{$customer->name_of_institution}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Institution Type</th>
                                    <td>{{$customer->institution_type}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Role in Institution</th>
                                    <td>{{$customer->role_in_institution}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Website Link</th>
                                    <td>{{$customer->website_link}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Message</th>
                                    <td>{{$customer->message}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Date</th>
                                    <td>{{$customer->created_at->format('d/m/Y g:ia')}}</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="text-success text-center">Credential</h3>
                        </div>
                        <div class="panel-body">
                            @foreach($customer_credentials as $customer_credential)
                            <table class="table table-bordered table-light">
                                <tr>
                                    <th scope="col">Demo URL</th>
                                    <td colspan="2">{{$customer_credential->demo_url}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Admin</th>
                                    <td>{{$customer_credential->admin_id}}</td>
                                    <td>{{$customer_credential->admin_pass}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Employee</th>
                                    <td>{{$customer_credential->employee_id}}</td>
                                    <td>{{$customer_credential->employee_pass}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Student</th>
                                    <td>{{$customer_credential->student_id}}</td>
                                    <td>{{$customer_credential->student_pass}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Parent</th>
                                    <td >{{$customer_credential->parent_id}}</td>
                                    <td>{{$customer_credential->parent_pass}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Date</th>
                                    <td colspan="2">{{$customer_credential->created_at->format('d/m/Y g:ia')}}</td>
                                </tr>
                            </table>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="text-success text-center">Order Details</h3>
                        </div>
                        <div class="panel-body">
                            @foreach($order_details as $order_detail)
                            <table class="table table-bordered table-light">
                                <tr>
                                    <th scope="col">Order Total</th>
                                    <td>{{$order_detail->order_total}}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Shipping Address</th>
                                    <td>{{$order_detail->shipping_address}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Country</th>
                                    <td>{{$order_detail->country}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">State</th>
                                    <td>{{$order_detail->state}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Zip</th>
                                    <td>{{$order_detail->zip}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Payment Type</th>
                                    <td>{{$order_detail->payment_type}}</td>
                                </tr>

                                <tr>
                                    <th scope="col">Deposit Slip</th>
                                    <td><img src="{{ asset($order_detail->deposit_slip) }}" alt=""/></td>
                                </tr>

                                <tr>
                                    <th scope="col">Date</th>
                                    <td>{{$order_detail->created_at->format('d/m/Y g:ia')}}</td>
                                </tr>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="video-container">-->
            <!--<iframe src="https://player.vimeo.com/video/90299717" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <!--</div>&lt;!&ndash;//video-container&ndash;&gt; -->
        </div><!--//container-->
    </div><!--//feature-video-->

@endsection