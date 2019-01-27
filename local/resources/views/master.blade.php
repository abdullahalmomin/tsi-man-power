<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TSI MANPOWER" />


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Crete+Round:400i" rel="stylesheet" type="text/css" />


    <!-- <link rel="stylesheet" type="text/css" href="css/styles-minify.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles-minify.css') }}">


    <!-- <link rel="stylesheet" href="css/custom.css" type="text/css" /> -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    
    <!-- <link rel="stylesheet" href="css/custom-project-02.css" type="text/css" /> -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-project-02.css') }}">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>TSI MANPOWER</title>

    <!-- <link rel="icon" href="images/custom-images/logo/favi-logo-palace.png"> -->
    <link rel="stylesheet" href="{{ asset('assets/images/custom-images/logo/favi-logo-palace.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <style>
       /* *{
            margin: 0px !important;
            padding: 0px !important;
            }*/
        </style>


<!-- External JavaScripts
    ============================================= -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- <script src="js/plugins.js"></script> -->
</head>

<!-- <body data-loader-html="<img src='images/custom-images/logo/GPL-LOGO-animation-3.gif' alt='Loading Page' class='custom-loader'/>" class="stretched"> -->
<body data-loader-html="<img src='{{asset('assets/vdo/preloader@2x.gif')}}' alt='Loading Page' class='custom-loader'/>" class="stretched">


<nav class="cd-vertical-nav">
    <ul>
        <li><a href="{{ url('jobs') }}" id="intro-nav"><span class="label">Hot Jobs</span></a></li>
        <li><a href="{{ url('candidate') }}" id="location"><span class="label">Candidate Post Your Resume</span></a></li>
        <li><a href="{{ url('clientPost') }}" id="plan"><span class="label">Client post your Resume</span></a></li>
       <!--  <li><a href="#top-left-img-booking-form" id="booking"><span class="label">Booking</span></a></li>
        <li><a href="#top-left-img-term" id="term"><span class="label">Conditions</span></a></li>
    -->


</ul>
</nav><!-- .cd-vertical-nav -->

<div id="wrapper" class="clearfix animated bounceInLeft delay-2s">
    <div class="address" style="background-color: #03a9f4;padding: 10px; z-index: 9999;color: #fff;position: relative;" >
        <div class="container">
           <div class="row">
            <div class="col-md-4">
                <i class="fas fa-envelope-square"></i>
                <font>Mail: info@tsimanpowerbd.com</font>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-mobile-alt"></i>
                <font>Mobile: +880 29820730.</font>
            </div>
            <div class="col-md-4 text-right" >
                <span>
                    <i class="fas fa-clock"></i>
                    <font>Saturday-Thursday : 9am-5pm</font>
                </span>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="comtainer">
        <div class="row">

        </div>
    </div>
</div>
</div>


<header id="header" class="transparent-header dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <div id="logo">
                <!-- <a href="{{ url('/assets/img/mp_logo.png') }}"><h3 style="margin-top: 30px;"></h3></a> -->
                <a href="{{ url('/') }}"><img src="{{ url('/assets/img/mp_logo.png') }}"></a>
                <!-- <img src="{{ url('/assets/img/mp_logo.png') }}" alt=""> -->
            </div><!-- #logo end -->

            
            <nav id="primary-menu">

                <ul>
                    <li class="current"><a href="{{ url('/') }}"><div class="primary-menu-ul-li-a-div"><i><img src="{{asset('assets/images/custom-images/icon/Green-Planet-Lands-Ltd.png')}}" id="home-icon"></i>Home</div></a>

                    </li>

                    <li><a href="#"><div class="primary-menu-ul-li-a-div">About us </div></a>
                        <ul>
                            <li><a href="{{ url('intro') }}"><div class="primary-menu-ul-li-a-div">Introduction</div></a></li>
                            <li><a href="{{ url('who-we-are#company-profile') }}"><div class="primary-menu-ul-li-a-div">Company Profile</div></a> </li>

                        
                        </ul>
                    </li>
                    <li><a href="{{ url('#') }}"><div class="primary-menu-ul-li-a-div"> Services</div></a>
                        <ul>
                            <li><a href="{{ url('strength') }}"><div class="primary-menu-ul-li-a-div">Strength</div></a></li>
                            <li><a href="{{ url('howitworks') }}"><div class="primary-menu-ul-li-a-div">How It Works</div></a> </li>

                        </ul>
                    </li>
                    <li><a href="{{ url('clients') }}"><div class="primary-menu-ul-li-a-div"> Cleints</div></a></li>
                    <li><a href="{{ url('galary') }}"><div class="primary-menu-ul-li-a-div"> Galary</div></a></li>
                    <!-- <li><a href="#"><div class="primary-menu-ul-li-a-div">Govt. Services Division</div></a></li> -->




                    <li><a href="{{ url('contact') }}"><div class="primary-menu-ul-li-a-div">Contact</div></a>

                    </li>

                </ul>

            </nav><!-- #primary-menu end -->

        </div>

    </div>


</header><!-- #header end -->

@yield('main-content')

<!-- Palace #footer Starts -->
<footer style="margin-top: 0px !important; background-color: #03a9f4 !important;" >
    <div class="container" style="padding: 50px;color: #fff;">
        <div class="row">
            <div class="col-md-6">
                <span>Designed and developed by: <a href="http://unifoxdigitalmedia.com">Unifox Digital Media</a></span>
            </div>
            <div class="col-md-6 text-right" >
                <a href=""><i class="fab fa-facebook-f" style="color:#fff;" ></i></a> &nbsp; &nbsp;
                <a href=""><i class="fab fa-twitter" style="color:#fff;"></i></a>
            </div>
        </div>
        
    </div>

</footer>
<!-- #footer end -->


</div><!-- #wrapper end -->

<!-- Go To Top ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>



<!-- Footer Scripts
    ============================================= -->
    <script src="js/functions.js"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>




    <!-- Modernizr -->
    <script src="js/modernizr.js"></script> 
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>


    <!-- Resource jQuery -->
    <script src="js/main.js"></script> 
    <script src="{{ asset('assets/js/main.js') }}"></script>

    

    <script>
            // For Demo purposes only (show hover effect on mobile devices)
            [].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
                el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
            } ); 

        </script>


    </body>
    
    <!-- Mirrored from palaceres.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 13:32:31 GMT -->
    </html>