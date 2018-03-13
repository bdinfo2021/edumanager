@extends('front.master')
@section('body')
    <div class="headline-bg">
    </div><!--//headline-bg-->

    <!-- ******Video Section****** -->
    <section class="contact-section section section-on-bg">
        <div class="container-fluid">
            <h2 class="title text-center">Manage Customers</h2>
            <div class="row text-center">
                <div class="col-sm-12 mx-auto">
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
                            <table class="table table-bordered table-hover table-light">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Adddress</th>
                                    {{--<th scope="col">Status</th>--}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($customers as $customer)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{$customer->first_name}} {{$customer->last_name}}</td>
                                        {{--                                    <td><img src="{{asset($customer->product_image)}}" alt="Image" width="50" height="50"></td>--}}
                                        <td>{{$customer->email_address}}</td>
                                        <td>{{$customer->mobile_number}}</td>
                                        <td>{{$customer->address}}</td>
                                        {{--                                    <td>{{$customer->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>--}}
                                        <td>
                                            <a href="{{route('/view-customer',[$customer->id])}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                            </a>
                                            {{--@if($customer->publication_status == 1)--}}
                                            {{--<a href="{{route('unpublished-product',['id'=>$customer->id])}}" class="btn btn-info btn-xs">--}}
                                            {{--<span class="glyphicon glyphicon-arrow-up"></span>--}}
                                            {{--</a>--}}
                                            {{--@else--}}
                                            {{--<a href="{{route('published-product',['id'=>$customer->id])}}" class="btn btn-warning btn-xs">--}}
                                            {{--<span class="glyphicon glyphicon-arrow-down"></span>--}}
                                            {{--</a>--}}
                                            {{--@endif--}}
                                            <a href="{{route('/send-mail',[$customer->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-envelope"></span>
                                            </a>
                                            <a
                                            class="btn btn-danger btn-xs"
                                            href="{{route('/delete-customer',[$customer->id])}}"
                                            onclick="return confirm('Are You Sure ?')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <!--<div class="video-container">-->
            <!--<iframe src="https://player.vimeo.com/video/90299717" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
            <!--</div>&lt;!&ndash;//video-container&ndash;&gt; -->
        </div><!--//container-->
    </section><!--//feature-video-->

@endsection