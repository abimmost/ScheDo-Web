<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="">

    <title> ScheDo </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    

</head>

<body class="sub_page">
    @guest()
        
    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="{{ asset('images/hero-bg.png') }}" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <span>
                            ScheDo
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                                <x-nav-link href="{{ route('home') }}">Home<span class="sr-only">(current)</span></x-nav-link>
                            </li>
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <x-nav-link class="" href="{{ route('about') }}">About</x-nav-link>
                            </li>
                            <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                                <x-nav-link href="{{ route('register') }}">Register</x-nav-link><!-- Before "Login" <i class="fa fa-user" aria-hidden="true"></i>  -->
                            </li>
                            <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
                                <x-nav-link href="{{ route('login') }}">Login</x-nav-link><!-- Before "Login" <i class="fa fa-user" aria-hidden="true"></i>  -->
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        {{ $sliding }}
        <!-- end slider section -->
    </div>

    @endguest

    @auth
    <div class="hero_area">
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <span>
                            ScheDo
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <!-- <li class="nav-item {{ request()->is('register') ? 'active' : '' }}">
                                <x-nav-link href="{{ route('register') }}">Register</x-nav-link>
                            </li> -->
                            <li class="nav-item {{ request()->is('tasks') ? 'active' : '' }}">
                                <x-nav-link href="{{ route('tasks.index') }}">Tasks<span class="sr-only">(current)</span></x-nav-link>
                            </li>
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <x-nav-link class="" href="{{ route('about') }}">About</x-nav-link>
                            </li>
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;" onsubmit="return confirmDelete();">
                                    @csrf
                                </form>
                                <button type="submit" class="btn nav-link text-danger" onclick="confirmLogout()">Logout</button>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    </div>
        
    @endauth

    {{ $slot }}

    <!-- info section -->

    <!-- <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="info_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_detail">
                        <h4>
                            Info
                        </h4>
                        <p>
                            necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto info_col">
                    <div class="info_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="info_links">
                            <a class="active" href="index.html">
                                Home
                            </a>
                            <a class="" href="about.html">
                                About
                            </a>
                            <a class="" href="service.html">
                                Services
                            </a>
                            <a class="" href="why.html">
                                Why Us
                            </a>
                            <a class="" href="team.html">
                                Team
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col ">
                    <h4>
                        Subscribe
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Enter email" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- end info section -->

    <!-- footer section -->
    <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">ScheDo</a>
      </p>
    </div>
  </section>
    <!-- footer section -->

    <!-- jQery -->
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!-- End Google Map -->

</body>

</html>