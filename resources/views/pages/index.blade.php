@extends('layouts.app')

@section('content')
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    

    <!-- slider-area-start -->
    <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider bg-img-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-1 col-lg-7">
                            <div class="slider-content">
                                <p>Quality work. Trustable service. Dedicated team</p>
                                <h3>We provide your Industrial solution</h3>
                                <div class="slider-btn">
                                    <a class="boxed-btn2" href="#">Our Services <i
                                            class="Flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider bg-img-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-1 col-lg-7">
                            <div class="slider-content">
                                <p>Quality work. Trustable service. Dedicated team</p>
                                <h3>We provide your Industrial solution</h3>
                                <div class="slider-btn">
                                    <a class="boxed-btn2" href="#">Our Services <i
                                            class="Flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider bg-img-1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 offset-xl-1 col-lg-7">
                            <div class="slider-content">
                                <p>Quality work. Trustable service. Dedicated team</p>
                                <h3>We provide your Industrial solution</h3>
                                <div class="slider-btn">
                                    <a class="boxed-btn2" href="#">Our Services <i
                                            class="Flaticon flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- brand-area-start -->
    <div class="brand-area gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-active owl-carousel">
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/1.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/2.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/3.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/4.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/5.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/6.png') }}" alt="">
                        </div>
                        <div class="single-brand">
                            <img src="{{ asset('img/brand/4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- service-area-start -->
    <div class="service-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="section-title text-center mb-65">
                    <span>OUR SERVICES</span>
                    <h3>We provide all of your <br>
                        industrial solution</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('img/service/1.jpg') }}" alt="">
                        </div>
                        <h3>Industrial construction</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('img/service/2.jpg') }}" alt="">
                        </div>
                        <h3>Mechanical engineering</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single-service">
                        <div class="service-thumb">
                            <img src="{{ asset('img/service/1.jpg') }}" alt="">
                        </div>
                        <h3>Bridge construction</h3>
                        <p>Waters make fish every without firmament saw had. Morning air subdue.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service-area-end -->

    <!-- project-area-start -->
    <div class="project-area bg-img-2 overlay">
        <div class="container-fluid p-lg-0">
            <div class="row justify-content-end no-gutters">
                <div class="col-xl-4 col-md-6">
                    <div class="section-title text-white mb-65 ml-80">
                        <h3>Take a look around <br>
                            our projects</h3>
                        <p>Waters make fish every without firmament saw had. <br> Morning air subdue.</p>
                        <div class="more-project">
                            <a href="#">More Projects</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="project-active owl-carousel">
                        <div class="single-project">
                            <div class="project-thumb">
                                <img src="{{ asset('img/project/1.jpg') }}" alt="">
                            </div>
                            <div class="project-info">
                                <span>Industrial construction</span>
                                <h3>Research and development center</h3>
                            </div>
                        </div>
                        <div class="single-project">
                            <div class="project-thumb">
                                <img src="{{ asset('img/project/1.jpg') }}" alt="">
                            </div>
                            <div class="project-info">
                                <span>Machine engineering</span>
                                <h3>Project of technological park</h3>
                            </div>
                        </div>
                        <div class="single-project">
                            <div class="project-thumb">
                                <img src="{{ asset('img/project/1.jpg') }}" alt="">
                            </div>
                            <div class="project-info">
                                <span>Industrial construction</span>
                                <h3>Research and development center</h3>
                            </div>
                        </div>
                        <div class="single-project">
                            <div class="project-thumb">
                                <img src="{{ asset('img/project/1.jpg') }}" alt="">
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
    </div>
    <!-- project-area-end -->

    <!-- about start -->
    <div class="about-area section-padding">
        <div class="pattent-bg-img">
            <img src="{{ asset('img/about/pattern.png') }}" alt="">
        </div>
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
                            Industrial solution</h3>
                        <p class="para-text">
                            Waters makte fish every without firmament saw had. Morning air subdue very one. Whales grass
                            is fish whales winged.
                        </p>
                        <a href="#" class="boxed-btn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="about-pro-active owl-carousel pt-120">
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

    

