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
                            <h2>Our Projects</h2>
                            <p> <a href="index.html">Home.</a> <span></span> Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- main-project-area-start -->
    <div class="main-project-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="single-project">
                        <div class="project-thumb">
                            <img src="{{ asset('img/project/project-1.png') }}" alt="">
                        </div>
                        <div class="project-info">
                            <span>Industrial construction</span>
                            <h3>Research and development center</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single-project">
                        <div class="project-thumb">
                            <img src="{{ asset('img/project/project-2.png') }}" alt="">
                        </div>
                        <div class="project-info">
                            <span>Machine engineering</span>
                            <h3>Project of technological park</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single-project">
                        <div class="project-thumb">
                            <img src="{{ asset('img/project/project-3.png') }}" alt="">
                        </div>
                        <div class="project-info">
                            <span>Industrial construction</span>
                            <h3>Research and development center</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single-project">
                        <div class="project-thumb">
                            <img src="{{ asset('img/project/project-4.png') }}" alt="">
                        </div>
                        <div class="project-info">
                            <span>Machine engineering</span>
                            <h3>Project of technological park</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single-project">
                        <div class="project-thumb">
                            <img src="{{ asset('img/project/project-5.png') }}" alt="">
                        </div>
                        <div class="project-info">
                            <span>Industrial construction</span>
                            <h3>Research and development center</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="single-project">
                        <div class="project-thumb">
                            <img src="{{ asset('img/project/project-6.png') }}" alt="">
                        </div>
                        <div class="project-info">
                            <span>Machine engineering</span>
                            <h3>Project of technological park</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main-project-area-end -->

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