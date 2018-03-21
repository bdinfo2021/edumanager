@extends('admin.master', ['body_class' => 'blog-page blog-archive-page'])
@section('body')

        <!-- ******BLOG LIST****** -->
<div class="blog blog-category blog-archive container">
    <h2 class="page-title text-center"><i class="fa fa-archive"></i> Client Details</h2>
        <div class="container-fluid">
            <div class="row text-left">
                <div class="col-sm-8 mx-auto">
                    <div class="panel">
                        {{--<div class="panel-head">--}}
                        {{--<h3 class="text-success text-center">Manage Customers</h3>--}}
                        {{--</div>--}}
                        @if(Session::get('message'))
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong> {{Session::get('message')}}
                            </div>
                        @endif
                        {{--<div class="card-body">--}}
                        <table class="table table-bordered table-light">
                            <tr>
                                <th scope="col">Full name</th>
                                <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                            </tr>
                            <tr>
                                <th scope="col">E-mail</th>
                                <td>{{$customer->email_address}}</td>
                            </tr>

                            <tr>
                                <th scope="col">Mobile</th>
                                <td>{{$customer->mobile_number}}</td>
                            </tr>

                            <tr>
                                <th scope="col">Address</th>
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

                        </table>

                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <!--<div class="video-container">-->
            <!--<iframe src="https://player.vimeo.com/video/90299717" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <!--</div>&lt;!&ndash;//video-container&ndash;&gt; -->
        </div><!--//container-->
    </div><!--//feature-video-->

@endsection