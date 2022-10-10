<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}">


    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="shortcut icon" type="imgse/ x-con" href="frontend/img/work1.jpg">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body>

    <div class="scroll-up-btn">
        <i class="las la-arrow-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">Portfo<span>lio.</span></a>
            </div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#work" class="menu-btn">work</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->

    <style>
        .home {
            display: flex;
            background: url("frontend/img/update.png"), no-repeat center;
            height: 100vh;
            min-height: 500px;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Ubuntu', sans-serif;
            right: 0px;
            bottom: 0px;
        }
    </style>

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
                    Hello, my name is</div>
                <div class="text-2">
                    Kamrul Hassan</div>
                <div class="text-3">
                    And I am a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">
                About me</h2>


  @include('frontend.pages.about')

        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">
                My services</h2>

@include('frontend.pages.service')



        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
                My skills</h2>
           @include('frontend.pages.skill')
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">
                My teams</h2>


@include('frontend.pages.team')

        </div>
    </section>

    <!-- Blog section start -->
    <section class="work" id="work">
        <h2 class="title">My Work</h2>

        <!-- images hover effect strat  -->

@include('frontend.pages.work')
        <!-- images hover effect end -->
    </section>


    <!-- blog end -->

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">
                Contact Me</h2>


             @include('frontend.pages.contact')
        </div>
    </section>



{{--  start google map  --}}
    <div class="container-fluid">

        <div class="row">

            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1680" height="423" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=hello%20coders&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://fmovies-online.net">fmovies</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 423px;
                            width: 1580px;
                        }
                    </style><a href="https://www.embedgooglemap.net">build custom google map</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 423px;
                            width: 1580px;
                        }
                    </style>
                </div>
            </div>



        </div>
    </div>

{{--  end  google map  --}}





    <br>


    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.facebook.com/profile.php?id=100007120715015">MD.Kamrul Hassan</a> | <span
                class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>


    <!-- <script src="script.js"></script> -->

    <script type="text/javascript" src="{{ asset('frontend/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/fontawesome.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/custom.js') }}"></script>

    @yield('script')

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


</script>


</body>

</html>
