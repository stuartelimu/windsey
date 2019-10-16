

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
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="billing-tab" data-toggle="tab" href="#billing" role="tab"
                                    aria-controls="billing" aria-selected="false">Billing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab"
                                    aria-controls="support" aria-selected="false">Support</a>
                            </li>
                        </ul>
                    </nav>
                    <a href="#" class="download-brouser">Download broucher</a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="single-details">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="details-wrap">
                            <div class="section-top-border">
                                <h3 class="mb-30">Table</h3>
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Name</div>
                                            <div class="visit">Email</div>
                                            <div class="percentage">Plan</div>
                                        </div>
                                        @foreach($users as $user)
                                        @if($user->subscribed('Windsey FaaS Platform'))
                                        <div class="table-row">
                                            <div class="serial">01</div>
                                            <div class="country"> <img src="img/elements/f1.jpg" alt="flag">{{$user->id}}</div>
                                            <div class="visit">645032</div>
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
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="details-wrap">
                            <div class="section-top-border">
                                <h3 class="mb-30">Table</h3>
                                <div class="progress-table-wrap">
                                    <div class="progress-table">
                                        <div class="table-head">
                                            <div class="serial">#</div>
                                            <div class="country">Name</div>
                                            <div class="visit">Email</div>
                                            <div class="percentage">Plan</div>
                                        </div>
                                        @foreach($users as $user)
                                        @if($user->subscribed('Windsey FaaS Platform'))
                                        <div class="table-row">
                                            <div class="serial">01</div>
                                            <div class="country"> <img src="img/elements/f1.jpg" alt="flag">{{$user->id}}</div>
                                            <div class="visit">645032</div>
                                            <div class="percentage">
                                                <div class="progress">
                                                    <div class="progress-bar color-1" role="progressbar" style="width: 80%"
                                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        None
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="details-wrap">
                                <div class="details-info">
                                    <h3>Account</h3>
                                    <p>Two midst that won't place waters likeness. Them place good. 
                                    </p>

                                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row">
                                        
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control valid" name="telephone" id="telephone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telephone'" placeholder="Telephone">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input class="form-control" name="Address" id="Address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Address'" placeholder="Enter Address">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
            
                                                <textarea class="form-control w-100" name="bio" id="bio" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter bio'" placeholder=" Bio"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" class="button button-contactForm boxed-btn">Update</button>
                                    </div>
                                </form>
                                </div>
                                <div class="details-info">
                                    <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                        moved creeping whales firmament light so were from and given saying light
                                        was his fruitful two. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="billing-tab">
                            <div class="details-wrap">
                                <div class="details-info">
                                    <h3>Payment methods</h3>
                                    <p>Please enter your preferred payment method below. You can use a credit / debit card. 
                                    </p>
                                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name On Card'" placeholder="Enter Name On Card">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group" id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                                </div>
                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                                <input type="hidden" name="plan" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="details-info">
                                    <h3>Billing details</h3>
                                    <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                        moved creeping whales firmament light so were from and given saying light
                                        was his fruitful two. Creature saying in was heaven appear in dominion can't
                                        sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                        lights. That had you're stars. You subdue form days years likeness female.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                            <div class="details-wrap">
                                
                                <div class="details-info">
                                    <h3>Contact Support</h3>
                                    <p>Have a question? Send us a note and someone from the Windsey & Associates team will be in touch soon.
                                    </p>
                                </div>
                                <div class="details-info">
                                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
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
