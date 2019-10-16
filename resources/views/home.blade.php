

@extends('layouts.app')

@section('content')

    <!-- service-details-start -->
<div class="service-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="details-nav">
                    <nav>
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Active Subscriptions</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Cancelled Subscriptions</a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="single-details">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="details-wrap">
                            <div class="section-top-border">
                                <h3 class="mb-30">Active Subscriptions</h3>
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Name</div>
                                            <div class="visit">Email</div>
                                            <div class="percentage">Plan</div>
                                        </div>
                                        @foreach($users as $user)
                                        @if($user->subscribed('Windsey FaaS Platform') && $user->role == 'client')
                                        <div class="table-row">
                                            <div class="serial">{{ $loop->index }}</div>
                                            <div class="country"> {{$user->name}}</div>
                                            <div class="visit">{{$user->email}}</div>
                                            <div class="percentage">
                                                plan
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="details-wrap">
                            <div class="section-top-border">
                                <h3 class="mb-30">Cancelled Subscriptions</h3>
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Name</div>
                                            <div class="visit">Email</div>
                                            <div class="percentage">Plan</div>
                                        </div>
                                        @foreach($users as $user)
                                        @if($user->subscription('Windsey FaaS Platform')->onGracePeriod())
                                        <div class="table-row">
                                            <div class="serial">{{ $loop->index }}</div>
                                            <div class="country"> {{$user->name}}</div>
                                            <div class="visit">{{$user->email}}</div>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- service-details-end -->

@endsection
