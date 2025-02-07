@extends('Layout_admin')
@section('title','Contacts')    

@section('content') 

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9">
                <h2>Địa chỉ 2</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Địa chỉ admin</strong>
                    </li>
                </ol>
            </div>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                @foreach ($admin as $row)
                <div class="col-lg-3">
                    <div class="contact-box center-version">

                        <a href="">

                            <img alt="image" class="rounded-circle" src="{{ asset('uploads/profile/'.$row->image_user) }}">


                            <h3 class="m-b-xs"><strong>{{$row->name}}</strong></h3>

                            <div class="font-bold"><small>Nick: {{$row->user_name}}</small></div>
                            <address class="m-t-md">
                                <strong>Mr.Nam</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">Sđt: 0377517895</abbr> {{$row->phone}}
                            </address>

                        </a>
                        <div class="contact-box-footer">
                            <div class="m-t-xs btn-group">
                                <a href="tel:{{$row->phone}}"  class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Gọi </a>
                                <a href="mailto:{{$row->email}}"  class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                <a href=""  class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Theo dõi</a>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>

@endsection
