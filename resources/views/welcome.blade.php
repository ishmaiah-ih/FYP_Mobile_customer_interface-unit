<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Energy Top Up</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="front/css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="front/css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="front/css/responsive.css" rel="stylesheet"/>
</head>

<body>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="front/images/logo.png" alt="">
                    <span>
              Energy Top-Up System
            </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="s-1"> </span>
                    <span class="s-2"> </span>
                    <span class="s-3"> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#contact">Contact </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}"> Register </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    @if (session('status'))
        <div id="status-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class=" slider_section ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="detail_box">
                        <h1> Mobile
                           Customer<br>
                             Interface Unit
                        </h1>
                        <p>
                            Easily manage your energy tokens online with our user-friendly platform. View invoices,
                            track transactions, and top up your energy tokens
                            seamlessly from anywhere. Simplifying energy management, one click at a time
                        </p>
                        <a href="{{route('login')}}" class="">
                         Get Started
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="img_content">
                        <div class="img_container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="img-box">
                                            <img src="front/images/slider-img.jpg" alt="pic">

                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="front/images/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="img-box">
                                            <img src="front/images/2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
</div>


<!-- contact section -->

<section id="contact" class="contact_section layout_padding">
    <div class="container ">
        <div class="heading_container">
            <h2>
                Contact Admin
            </h2>
            <img src="images/plug.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('contact')}}" method="POST">
                    @csrf
                    <div>
                        <input name="name" type="text" placeholder="Full Name"/>
                    </div>
                    <div>
                        <input name="email" type="email" placeholder="Email"/>
                    </div>
                    <div>
                        <input name="phone" type="text" placeholder="Phone Number"/>
                    </div>
                    <div>
                        <input name="message" type="text" class="message-box" placeholder="Message"/>
                    </div>
                    <div class=" d-flex text-end">
                        <button type="submit" class="" >
                            SEND
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>


<!-- footer section -->
<footer class="container-fluid footer_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
                <p>
                    &copy; 2024 Final year Project| Energy Top Up |

                    <span class="text-danger"><a href="#">The polytechnic </a></span>
                </p>
            </div>
        </div>
    </div>





</footer>
<!-- footer section -->

{{--alerts --}}
{{--<script src="{{ asset('js/info.js') }}"></script>--}}

@include('partials.alert')

<script src="front/js/jquery-3.4.1.min.js"></script>
<script src="front/js/bootstrap.js"></script>

</body>

</html>
