@extends('layouts.dashboard')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

              @if(!$userAccount)

                    <div id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <strong>Account Details Notification</strong>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Hey {{ auth()->user()->fname }}, Use The below link to provide us with your Account Details for Withdrawal. Thanks</p>
                                    <hr>
                                    <a href="{{ route('profile') }}" class="btn btn-primary">Provide Complete Account Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
              @endif

              @if(!auth()->user()->valid_id)
                    <p>Your profile is one step away, Please upload a valid mode of identification and a passport to complete registration.</p>
                @endif


                <div class="row">
                    <div class="col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p>Skote Dashboard</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('public/assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            @if(auth()->user()->passport)
                                            <img src="{{ asset('storage/images/'.auth()->user()->passport ) }}" alt=""
                                                 class="img-thumbnail rounded-circle">
                                            @endif
                                        </div>
                                        <h5 class="font-size-15 text-truncate">{{ auth()->user()->fname }}</h5>
                                        @if(count($depositRequests) > 0)
                                            @foreach($depositRequests as $depositRequest)
                                                <p class="text-muted mb-0"> {{ $depositRequest->amount }} Plan</p>
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="col-sm-8">
                                        <div class="pt-4">

                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="font-size-15">$0</h5>
                                                    <p class="text-muted mb-0">Investment</p>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="font-size-15">$0</h5>
                                                    <p class="text-muted mb-0">Interest</p>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="{{ route('profile') }}" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i
                                                        class="mdi mdi-arrow-right ml-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">{{ auth()->user()->de }} Earning</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="text-muted">This month</p>
                                        <h3>$34,252</h3>
                                        <p class="text-muted"><span class="text-success mr-2"> 12% <i class="mdi mdi-arrow-up"></i>
                            </span> From previous period</p>

                                        <div class="mt-4">
                                            <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i
                                                    class="mdi mdi-arrow-right ml-1"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mt-4 mt-sm-0">
                                            <div id="radialBar-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted font-weight-medium">Orders</p>
                                                <h4 class="mb-0">1,235</h4>
                                            </div>

                                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-copy-alt font-size-24"></i>
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted font-weight-medium">Revenue</p>
                                                <h4 class="mb-0">$35, 723</h4>
                                            </div>

                                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-archive-in font-size-24"></i>
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted font-weight-medium">Average Price</p>
                                                <h4 class="mb-0">$16.2</h4>
                                            </div>

                                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Social Source</h4>
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                            <i class="mdi mdi-facebook text-primary"></i>
                        </span>
                                            </div>
                                            <p class="font-16 text-muted mb-2"></p>
                                            <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a>
                                            </h5>
                                            <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                                                venenatis faucibus tincidunt.</p>
                                            <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                    <i class="mdi mdi-facebook text-white"></i>
                                </span>
                                                    </div>
                                                    <h5 class="font-size-15">Facebook</h5>
                                                    <p class="text-muted mb-0">125 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                    <i class="mdi mdi-twitter text-white"></i>
                                </span>
                                                    </div>
                                                    <h5 class="font-size-15">Twitter</h5>
                                                    <p class="text-muted mb-0">112 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                    <i class="mdi mdi-instagram text-white"></i>
                                </span>
                                                    </div>
                                                    <h5 class="font-size-15">Instagram</h5>
                                                    <p class="text-muted mb-0">104 sales</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

{{--                            Social ends--}}

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Social Source</h4>
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                            <i class="mdi mdi-facebook text-primary"></i>
                        </span>
                                            </div>
                                            <p class="font-16 text-muted mb-2"></p>
                                            <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a>
                                            </h5>
                                            <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                                                venenatis faucibus tincidunt.</p>
                                            <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                    <i class="mdi mdi-facebook text-white"></i>
                                </span>
                                                    </div>
                                                    <h5 class="font-size-15">Facebook</h5>
                                                    <p class="text-muted mb-0">125 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                    <i class="mdi mdi-twitter text-white"></i>
                                </span>
                                                    </div>
                                                    <h5 class="font-size-15">Twitter</h5>
                                                    <p class="text-muted mb-0">112 sales</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="social-source text-center mt-3">
                                                    <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                    <i class="mdi mdi-instagram text-white"></i>
                                </span>
                                                    </div>
                                                    <h5 class="font-size-15">Instagram</h5>
                                                    <p class="text-muted mb-0">104 sales</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Social Source</h4>
                                <div class="text-center">
                                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-soft-primary font-size-24">
                            <i class="mdi mdi-facebook text-primary"></i>
                        </span>
                                    </div>
                                    <p class="font-16 text-muted mb-2"></p>
                                    <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a>
                                    </h5>
                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero
                                        venenatis faucibus tincidunt.</p>
                                    <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-4">
                                        <div class="social-source text-center mt-3">
                                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                    <i class="mdi mdi-facebook text-white"></i>
                                </span>
                                            </div>
                                            <h5 class="font-size-15">Facebook</h5>
                                            <p class="text-muted mb-0">125 sales</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="social-source text-center mt-3">
                                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                    <i class="mdi mdi-twitter text-white"></i>
                                </span>
                                            </div>
                                            <h5 class="font-size-15">Twitter</h5>
                                            <p class="text-muted mb-0">112 sales</p>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="social-source text-center mt-3">
                                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                    <i class="mdi mdi-instagram text-white"></i>
                                </span>
                                            </div>
                                            <h5 class="font-size-15">Instagram</h5>
                                            <p class="text-muted mb-0">104 sales</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-5">Activity</h4>
                                <ul class="verti-timeline list-unstyled">
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="media">
                                            <div class="mr-3">
                                                <h5 class="font-size-14">22 Nov <i
                                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                                </h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    Responded to need “Volunteer Activities
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="media">
                                            <div class="mr-3">
                                                <h5 class="font-size-14">17 Nov <i
                                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                                </h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    Everyone realizes why a new common language would be desirable... <a href="#">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list active">
                                        <div class="event-timeline-dot">
                                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                                        </div>
                                        <div class="media">
                                            <div class="mr-3">
                                                <h5 class="font-size-14">15 Nov <i
                                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                                </h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    Joined the group “Boardsmanship Forum”
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="event-list">
                                        <div class="event-timeline-dot">
                                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                                        </div>
                                        <div class="media">
                                            <div class="mr-3">
                                                <h5 class="font-size-14">12 Nov <i
                                                        class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i>
                                                </h5>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    Responded to need “In-Kind Opportunity”
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center mt-4"><a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View
                                        More <i class="mdi mdi-arrow-right ml-1"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Top Cities Selling Product</h4>

                                <div class="text-center">
                                    <div class="mb-4">
                                        <i class="bx bx-map-pin text-primary display-4"></i>
                                    </div>
                                    <h3>1,456</h3>
                                    <p>San Francisco</p>
                                </div>

                                <div class="table-responsive mt-4">
                                    <table class="table table-centered table-nowrap">
                                        <tbody>
                                        <tr>
                                            <td style="width: 30%">
                                                <p class="mb-0">San Francisco</p>
                                            </td>
                                            <td style="width: 25%">
                                                <h5 class="mb-0">1,456</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-primary rounded" role="progressbar"
                                                         style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">Los Angeles</p>
                                            </td>
                                            <td>
                                                <h5 class="mb-0">1,123</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-success rounded" role="progressbar"
                                                         style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="mb-0">San Diego</p>
                                            </td>
                                            <td>
                                                <h5 class="mb-0">1,026</h5>
                                            </td>
                                            <td>
                                                <div class="progress bg-transparent progress-sm">
                                                    <div class="progress-bar bg-warning rounded" role="progressbar"
                                                         style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Transaction History</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Refference ID</th>
                                            <th>Amount Invested</th>
                                            <th>Plan</th>
                                            <th>Status</th>
                                            <th>Interest</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        @if(count($depositRequests) > 0)
                                        <tbody>
                                        @foreach($depositRequests as $depositRequest)
                                            <tr>
                                                <td></td>
                                                <td>Not Generated</td>
                                                <td>${{ $depositRequest->amount }}</td>
                                                <td>{{ $depositRequest->plan }}</td>
                                                <td>
                                                    <span class="@if($depositRequest->status == 'pending') badge badge-danger @elseif($depositRequest->status == 'approved') badge badge-primary @elseif($depositRequest->status == 'paid') badge badge-success @endif">{{ $depositRequest->status }}</span>
                                                </td>
                                                <td>${{ $depositRequest->payout }}</td>
                                                <td>
                                                    @if($depositRequest->status == 'approved')
                                                        <a href="{{ route('payDeposit', $depositRequest->id) }}" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"> Pay Now <i class="fab fa-cc-mastercard"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        @else
                                         <p style="text-align: center">No Investment Yet!</p>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
@endsection
