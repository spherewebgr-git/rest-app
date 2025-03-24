@extends('layouts.dashboards')
@section('page_title') Reservation Requests Page @endsection
@section('content')
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader4"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('components.dashboards.dashboard-global-header')
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            @include('components.dashboards.dashboard-global-sidebar')
            <div class="page-body">
                @include('components.dashboards.hashboard-title-breadcrumb')
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row size-column">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header card-no-border total-revenue">
                                    <h4>Reservation Requests</h4>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="table-order table-responsive custom-scrollbar">
                                        <table class=" w-100 tranaction-table">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Seats</th>
                                                <th>Customer</th>
                                                <th>Customer Email</th>
                                                <th>Customer Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($reservation_requests as $res)
                                            <tr>
                                                <td>{{date('d M, Y', strtotime($res->reservation_date))}}</td>
                                                <td>{{date('H:i', strtotime($res->reservation_time))}}</td>
                                                <td class="f-14 f-w-500">{{{$res->members}}}</td>
                                                <td>{{$res->customer_name}}</td>
                                                <td><a href="mailto:{{$res->customer_email}}">{{$res->customer_email}}</a></td>
                                                <td><a href="tel:{{$res->customer_phone}}">{{$res->customer_phone}}</a></td>
                                                <td><a href="{{route('decline', ['id' => $res->id])}}" title="Decline Reservation"><i class="fa fa-times"></i></a></td>
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            @include('components.dashboards.dashboard-footer')
        </div>
    </div>
@endsection

