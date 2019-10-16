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
                            <h2>Our Company</h2>
                            <p> <a href="/">Home.</a> <span></span> About</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-end -->

    <!-- about start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('img/about/about.jpg') }}" alt="">
                        <a class="video-icon popup-video" href="https://www.youtube.com/watch?v=vb9uYBtqmeM">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="section-title mb-65">
                        <span>About Company</span>
                        <h3>Deliver inovative
                            Agricultural solution</h3>
                        <p class="para-text">
                            Waters makte fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.
                        </p>
                        <div class="name">
                            <img src="{{ asset('img/about/name.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- counter-start -->
    <div class="counter-area gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single-counter">
                        <div class="icon">
                            <img src="{{ asset('img/icon/conunter-icon.png') }}" alt="">
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">400</span><span>+</span></h3>
                            <p>Business <span>Completed</span> </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-counter">
                        <div class="icon">
                            <img src="{{ asset('img/icon/conunter-icon2.png') }}" alt="">
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">30</span><span>+</span></h3>
                            <p><span>Dedicated team</span> Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-counter">
                        <div class="icon">
                            <img src="{{ asset('img/icon/conunter-icon3.png') }}" alt="">
                        </div>
                        <div class="counter-number">
                            <h3><span class="counter">350</span><span>+</span></h3>
                            <p>Positive <span>review</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-start -->

    <!-- about start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-12 col-lg-6">
                    <div class="section-title mb-65 p-0">
                        <span>About Company</span>
                        <h3>Deliver inovative
                            Agricultural solution</h3>
                        <p class="para-text">
                            Waters makte fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 col-md-12 col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('img/about/1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

    <!-- team-start -->
    <div class="team-area section-padding gray-bg">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65">
                    <span>OUR INDUSTRIAL EXPERTS</span>
                    <h3>Meet with our Agricultural experts</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('img/team/2.jpg') }}" alt="">
                            <div class="team-hover">
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center">
                            <h3>Kamal Dowlat</h3>
                            <p>Agricultural engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('img/team/3.jpg') }}" alt="">
                            <div class="team-hover">
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center">
                            <h3>Miller Jonson</h3>
                            <p>Agricultural engineer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-team">
                        <div class="team-thumb">
                            <img src="{{ asset('img/team/4.jpg') }}" alt="">
                            <div class="team-hover">
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="team-info text-center">
                            <h3>Aristetol Smith</h3>
                            <p>Agricultural engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team-end -->

    <!-- about start -->
    <div class="about-area section-padding">
        <div class="container">
            <div class="about-pro-active owl-carousel">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6 col-lg-6 ">
                        <div class="about-info-text">
                            <div class="quote">
                                <i class="Flaticon flaticon-quote"></i>
                            </div>
                            <div class="about-ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="about-text">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                            <div class="about-author">
                                <div class="autor-thumb">
                                    <img src="{{ asset('img/about/about-author.jpg') }}" alt="">
                                </div>
                                <div class="auhor-text">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-md-6">
                        <div class="about-review">
                            <img src="{{ asset('img/about/about-project.jpg') }}" alt="">
                            <div class="project-review">
                                <h3>350+</h3>
                                <p>Positive review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row  align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="about-info-text">
                            <div class="quote">
                                <i class="Flaticon flaticon-quote"></i>
                            </div>
                            <div class="about-ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="about-text">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                            <div class="about-author">
                                <div class="autor-thumb">
                                    <img src="{{ asset('img/about/about-author.jpg') }}" alt="">
                                </div>
                                <div class="auhor-text">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-md-6">
                        <div class="about-review">
                            <img src="{{ asset('img/about/about-project.jpg') }}" alt="">
                            <div class="project-review">
                                <h3>350+</h3>
                                <p>Positive review</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="about-info-text">
                            <div class="quote">
                                <i class="Flaticon flaticon-quote"></i>
                            </div>
                            <div class="about-ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="about-text">Waters make fish every without firmament saw had. Morning air subdue
                                very one. Whales grass is fish whales winged.</p>
                            <div class="about-author">
                                <div class="autor-thumb">
                                    <img src="{{ asset('img/about/about-author.jpg') }}" alt="">
                                </div>
                                <div class="auhor-text">
                                    <span>Jon Snow</span>
                                    <p>Business ownner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-md-6">
                        <div class="about-review">
                            <img src="{{ asset('img/about/about-project.jpg') }}" alt="">
                            <div class="project-review">
                                <h3>350+</h3>
                                <p>Positive review</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about end -->

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