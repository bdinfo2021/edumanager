@extends('admin.master', ['body_class' => 'blog-page blog-archive-page'])
@section('body')


        <!-- ******BLOG LIST****** -->
{{--<div class="blog blog-category blog-archive container">--}}
    {{--<h2 class="page-title text-center"><i class="fa fa-archive"></i> Manage Customers</h2>--}}

    {{--<div class="blog-list blog-category-list">--}}
        {{--@if(Session::get('message'))--}}
            {{--<div class="alert alert-success" role="alert">--}}
                {{--<strong>Well done!</strong> {{Session::get('message')}}--}}
            {{--</div>--}}
        {{--@endif--}}
        {{--<div class="row">--}}

            {{--@foreach($customers as $customer)--}}
                {{--<article class="post mr-lg-auto ml-lg-auto col-12 col-lg-10">--}}
                    {{--<div class="post-inner">--}}
                        {{--<div class="content-head text-right">--}}
                            {{--<a href="{{route('/view-client',[$customer->id])}}" class="btn btn-success btn-xs">--}}
                                {{--<span class="glyphicon glyphicon-zoom-in"></span>--}}
                            {{--</a>--}}
                            {{--<a href="{{route('/send-mail',[$customer->id])}}" class="btn btn-info btn-xs">--}}
                                {{--<span class="glyphicon glyphicon-envelope"></span>--}}
                            {{--</a>--}}
                            {{--<a--}}
                                    {{--class="btn btn-danger btn-xs"--}}
                                    {{--href="{{route('/delete-client',[$customer->id])}}"--}}
                                    {{--onclick="return confirm('Are You Sure ?')">--}}
                                {{--<span class="glyphicon glyphicon-trash"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<div class="content">--}}
                            {{--<div class="date-label">--}}
                                {{--<span class="month">{{$customer->created_at->format('M')}}</span>--}}
                                {{--<span class="date-number">{{$customer->created_at->day}}</span>--}}
                            {{--</div>--}}
                            {{--<h3 class="post-title"><a href="{{route('/view-client',[$customer->id])}}">{{$customer->first_name}} {{$customer->last_name}}</a></h3>--}}
                            {{--<div class="meta">--}}
                                {{--<ul class="meta-list list-inline">--}}
                                    {{--<li class="list-inline-item post-author"><i class="fa fa-envelope"></i>{{$customer->email_address}}</li>--}}
                                    {{--<li class="list-inline-item post-comments-link"><i class="fa fa-phone"></i>{{$customer->mobile_number}}</li>--}}
                                {{--</ul><!--//meta-list-->--}}
                            {{--</div><!--meta-->--}}
                            {{--<div class="post-entry">--}}
                                {{--<p><i class="fa fa-address-book"></i> {{$customer->address}}</p>--}}
                                {{--<a class="read-more" href="{{route('/view-client',[$customer->id])}}">Read more <i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div><!--//content-->--}}
                    {{--</div><!--//post-inner-->--}}
                {{--</article><!--//post-->--}}
            {{--@endforeach--}}
        {{--</div><!--//row-->--}}
    {{--</div><!--//blog-list-->--}}

{{--</div><!--//blog-->--}}





<!-- ******Video Section****** -->
    <section class="contact-section section section-on-bg">
        <div class="container-fluid">
            <h2 class="text-center">Manage Customers</h2>
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
                                    <th scope="col" class="text-center">Name</th>
                                    <th scope="col" class="text-center">E-mail</th>
                                    <th scope="col" class="text-center">Mobile</th>
                                    <th scope="col" class="text-center">SignUp Date</th>
                                    <th scope="col" class="text-center">Mail Status</th>
                                    <th scope="col" class="text-center">Bank Payment</th>
                                    <th scope="col" class="text-center">Online Payment</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($customers as $customer)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td><a href="{{route('/view-client',[$customer->id])}}">{{$customer->first_name}} {{$customer->last_name}}</a></td>
                                        {{--                                    <td><img src="{{asset($customer->product_image)}}" alt="Image" width="50" height="50"></td>--}}
                                        <td>{{$customer->email_address}}</td>
                                        <td>{{$customer->mobile_number}}</td>
                                        @php($date=strtotime($customer->created_at))
                                        <td>{{date("d/m/Y",$date)}}</td>
{{--                                        <td>{{$customer->customer_credentials_id}}</td>--}}
{{--                                        <td>{{$customer->order_details_id}}</td>--}}
                                        <td>{!!$customer->customer_credentials_id >= 1 ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>' !!} </td>
                                        <td>{!!$customer->bank_payments_id >= 1 ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>' !!} </td>
                                        <td>{!!$customer->online_payments_id >= 1 ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>' !!} </td>
                                        <td>
                                            <a href="{{route('/view-client',[$customer->id])}}" class="btn btn-success btn-xs">
                                            <span class="glyphicon glyphicon-user"></span>
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
                                            @if($customer->bank_payments_id >= 1)
                                            <a href="{{route('/download-deposit-slip',['id'=>$customer->last_bank_payments_id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-download-alt"></span>
                                            </a>
                                            @endif
                                            <a
                                            class="btn btn-danger btn-xs"
                                            href="{{route('/delete-client',[$customer->id])}}"
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