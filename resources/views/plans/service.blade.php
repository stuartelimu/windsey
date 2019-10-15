@extends('layouts.app')

@section('content')

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- breadcrumb-start -->
    <section class="breadcrumb breadcrumb_bg banner-bg-1 overlay2 ptb200">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-1">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Pricing Plan</h2>
                            <p> <a href="index.html">Home.</a> <span></span> Plans</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- service-area-start -->
    <div class="service-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65">
                    <span>PRICING PLANS</span>
                    <h3>Choose the best pricing for you</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single-price">
                    <div class="price-head">
                        <h2>FaaS Platform Basic</h2>
                        <p>$0/<span>month</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                        <li><i class="fas fa-check-circle"></i>5GB Space</li>
                        <li><i class="fas fa-check-circle"></i>10GB Bandwith</li>
                        <li><i class="fas fa-times-circle"></i>15 Email Accounts</li>
                        <li><i class="fas fa-times-circle"></i>Unlimited Domain</li>
                        <li><i class="fas fa-times-circle"></i>Unlimited Support</li>
                        </ul>
                    </div>
                    <form action="{{ action('PlansController@store') }}" method="post" class="price-button">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" value="plan_FyGxPNsipLhdEL" class="form-control"  name="plan">
                        </div>
                        <button type="submit" class="button boxed-btn primary">Subscribe</button>
                    </form>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-price">
                    <div class="price-head">
                        <h2>FaaS Platform Standard</h2>
                        <p>$0/<span>month</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                        <li><i class="fas fa-check-circle"></i>5GB Space</li>
                        <li><i class="fas fa-check-circle"></i>10GB Bandwith</li>
                        <li><i class="fas fa-times-circle"></i>15 Email Accounts</li>
                        <li><i class="fas fa-times-circle"></i>Unlimited Domain</li>
                        <li><i class="fas fa-times-circle"></i>Unlimited Support</li>
                        </ul>
                    </div>
                    <form action="{{ action('PlansController@store') }}" method="post" class="price-button">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" value="plan_FyGy0Fv9zsAjzj" class="form-control"  name="plan">
                        </div>
                        <button type="submit" class="button boxed-btn primary">Subscribe</button>
                    </form>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-price">
                    <div class="price-head">
                        <h2>FaaS Platform Premium</h2>
                        <p>$0/<span>month</span></p>
                    </div>
                    <div class="price-content">
                        <ul>
                        <li><i class="fas fa-check-circle"></i>5GB Space</li>
                        <li><i class="fas fa-check-circle"></i>10GB Bandwith</li>
                        <li><i class="fas fa-times-circle"></i>15 Email Accounts</li>
                        <li><i class="fas fa-times-circle"></i>Unlimited Domain</li>
                        <li><i class="fas fa-times-circle"></i>Unlimited Support</li>
                        </ul>
                    </div>
                    <form action="{{ action('PlansController@store') }}" method="post" class="price-button">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" value="plan_kFyGxPNsipLhdEL" class="form-control"  name="plan">
                        </div>
                        <button type="submit" class="button boxed-btn primary">Subscribe</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area-end -->

    <!-- cta-area-start -->
    <div class="cta-area cta-bg-1">
        <div class="container">
            <div class="col-xl-6 col-lg-7">
                <div class="cta-content">
                    <h3>Let’s talk about your <br>
                        agricultural problems</h3>
                    <p>Waters make fish every without firmament saw had. <br> Morning air subdue very one. Whales grass
                        is
                        fish <br> whales winged.</p>
                    <div class="cta-btn">
                        <a class="boxed-btn2 black-bg" href="#">Discuss now <i
                                class="Flaticon flaticon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta-area-end -->

    @endsection