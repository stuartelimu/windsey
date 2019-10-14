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
                        <a href="/products/{{$product->id}}/" class="read-more">Read More</a>
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

    <!-- location-area-start -->
    <div class="addres-area black-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single-address text-center">
                        <div class="addres-icon">
                            <img src="img/icon/1.png" alt="">
                        </div>
                        <h3>Our Location</h3>
                        <p>127, Manchaster city, London <br>
                            86/A, green street, California, USA</p>
                        <a class="underline-hover" href="#">Get Direction</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-address text-center">
                        <div class="addres-icon">
                            <img src="img/icon/2.png" alt="">
                        </div>
                        <h3>Opening hour</h3>
                        <p>Mon-Fri (9.00-19.00) <br>
                            Sat-Sun <a class="underline-hover" href="#">(Closed)</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-address text-center">
                        <div class="addres-icon">
                            <img src="img/icon/3.png" alt="">
                        </div>
                        <h3>Drop a message</h3>
                        <p>support@durg.com <br>
                            456 267 3572</p>
                        <a class="underline-hover" href="#">Mail Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- location-area-end -->

    @endsection