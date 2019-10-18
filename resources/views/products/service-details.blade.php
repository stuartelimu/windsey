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
                            <h2>Service details</h2>
                            <p> <a href="index.html">Home.</a> <span></span> Services details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- service-details-start -->
    <div class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="details-nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                @foreach($products as $product)
                                <li class="nav-item">
                                    <a class="nav-link" id="service-{{$product->id}}-tab" data-toggle="tab" href="#service-{{$product->id}}" role="tab"
                                        aria-controls="home" aria-selected="true">{{$product->title}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="single-details">
                        <div class="tab-content" id="myTabContent">
                            @foreach($products as $product)
                            <div class="tab-pane fade @if($loop->index == 0) show active @endif" id="service-{{$product->id}}" role="tabpanel" aria-labelledby="service-{{$product->id}}-tab">
                                <div class="details-wrap">
                                    <div class="details-thumb">
                                        <img src="{{ asset('img/service/service-details.jpg') }}" alt="">
                                    </div>
                                    <div class="details-info">
                                        <h3>Description</h3>
                                        <p>{{$product->description}}
                                        </p>
                                    </div>
                                    <div class="details-info">
                                        <h3>Speciality</h3>
                                        <p>Two midst that won't place waters likeness. Them place good. Darkness meat
                                            moved creeping whales firmament light so were from and given saying light
                                            was his fruitful two. Creature saying in was heaven appear in dominion can't
                                            sixth heaven winged lights bearing evening likeness. Above man thing. Fourth
                                            lights. That had you're stars. You subdue form days years likeness female.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-details-end -->


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