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
                            <h2>Our Services</h2>
                            <p> <a href="{{ url('/') }}">Home.</a> <span></span> Services</p>
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
                    <span>OUR SERVICES</span>
                    <h3>We provide all of your <br>
                        agricultural solution</h3>
                </div>
            </div>
            @if(count($products) > 0)
            <div class="row">
                @foreach($products as $product)
                <div class="col-xl-4 col-md-4">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img src="img/service/1.jpg" alt="">
                        </div>
                        <h3>{{$product->title}}</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href="/services/details/" class="read-more">Read More</a>
                    </div>
                </div>
                @endforeach
                <div class="col-xl-4 col-md-4">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img src="img/service/2.jpg" alt="">
                        </div>
                        <h3>Mechanical engineering</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img src="img/service/1.jpg" alt="">
                        </div>
                        <h3>Bridge construction</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- service-area-end -->

    <!-- cta-area-start -->
    <div class="cta-area cta-bg-1">
        <div class="container">
            <div class="col-xl-6 col-lg-7">
                <div class="cta-content">
                    <h3>Let’s talk about your <br>
                        industrial problems</h3>
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