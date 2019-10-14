<!-- header-start -->
<header>
    <div class="header-area ">
        @guest
        <div class="header-top black-bg d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="header-contact">
                            <a href="#"><i class="fa fa-phone"></i> +880 256 356 256</a>
                            <a href="#"><i class="fa fa-envelope"></i> support24@durg.com</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="header-top-menu">
                            <nav>
                                <ul>
                                    <li><a href="blog.html">News & media</a></li>
                                    <li><a href="review.html">Review</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endguest
        <div id="sticky-header" class="main-header-area white-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{ url('/') }}">
                                <img src="img/logo.png" alt="{{ config('app.name', 'Laravel') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    
                                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                                    @guest
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="/services">Services</a></li>
                                    <li><a href="project.html">Projects</a></li>
                                    <li><a href="/plans">Plans</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    @endguest
                                </ul>
                            </nav>
                            
                        </div>
                        
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        @guest
                        <div class="quote-area">
                            <a class="underline-hover" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                            <div class="get-quote d-none d-lg-block">
                                <a class="boxed-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                            @endif
                        </div>
                        @else
                        <div class="quote-area">
                            {{ Auth::user()->name }} 
                            <div class="get-quote d-none d-lg-block">
                                <a class="boxed-btn" href="{{ route('logout') }}" onclick="event.preventDefault();                         document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>

                        @endguest
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
                <div class="search_input" id="search_input_box">
                    <div class="container ">
                        <form class="d-flex justify-content-between search-inner">
                            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                            <button type="submit" class="btn"></button>
                            <span class="fa fa-close" id="close_search" title="Close Search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->