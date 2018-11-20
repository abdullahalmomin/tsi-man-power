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



    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <title>TSI MANPOWER</title>

    <!-- <link rel="icon" href="images/custom-images/logo/favi-logo-palace.png"> -->
    <link rel="stylesheet" href="{{ asset('assets/images/custom-images/logo/favi-logo-palace.png') }}">


</head>

<!-- <body data-loader-html="<img src='images/custom-images/logo/GPL-LOGO-animation-3.gif' alt='Loading Page' class='custom-loader'/>" class="stretched"> -->
<body data-loader-html="<img src='{{asset('assets/vdo/preloader@2x.gif')}}' alt='Loading Page' class='custom-loader'/>" class="stretched">


<nav class="cd-vertical-nav">
    <ul>
        <li><a href="{{ url('intro') }}" id="intro-nav"><span class="label">Hot Jobs</span></a></li>
        <li><a href="candidatesResume.html" id="location"><span class="label">Candidate Post Your Resume</span></a></li>
        <li><a href="#top-left-img-layout-plan" id="plan"><span class="label">Client post your Resume</span></a></li>
       <!--  <li><a href="#top-left-img-booking-form" id="booking"><span class="label">Booking</span></a></li>
        <li><a href="#top-left-img-term" id="term"><span class="label">Conditions</span></a></li>
    -->


</ul>
</nav><!-- .cd-vertical-nav -->

<div id="wrapper" class="clearfix">



    <header id="header" class="transparent-header dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <div id="logo">
                    <h3>TSI Manpower</h3>


                </div><!-- #logo end -->


                <nav id="primary-menu">

                    <ul>
                        <li class="current"><a href="#"><div class="primary-menu-ul-li-a-div"><i><img src="{{asset('assets/images/custom-images/icon/Green-Planet-Lands-Ltd.png')}}" id="home-icon"></i>Home</div></a>

                        </li>

                        <li><a href="#"><div class="primary-menu-ul-li-a-div">About us </div></a>
                            <ul>
                                <li><a href="{{ url('who-we-are#company-profile') }}"><div class="primary-menu-ul-li-a-div">Introduction</div></a></li>
                                <li><a href="{{ url('intro') }}"><div class="primary-menu-ul-li-a-div">Company Profile</div></a> </li>

                                <li><a href="{{ url('who-we-are#sister-concern') }}"><div class="primary-menu-ul-li-a-div">Team</div></a></li>
                            </ul>
                        </li>
                            <li><a href="contact"><div class="primary-menu-ul-li-a-div"> Services</div></a></li>
                            <li><a href="contact.html"><div class="primary-menu-ul-li-a-div"> Cleints</div></a></li>
                            <li><a href="contact.html"><div class="primary-menu-ul-li-a-div">Govt. Services Division</div></a></li>
                   



                        <li><a href="contact.html"><div class="primary-menu-ul-li-a-div">Contact</div></a>

                        </li>

                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>


    </header><!-- #header end -->

    @yield('main-content')
    <!-- Palace #footer Starts -->
    <footer id="footer" class="dark">

        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_one_third palace-footer-logo-col" id="palace-footer-logo-col">
                    <img src="images/custom-images/section/footer/gpl_footerl_logo_new.png" id="palace-footer-logo" alt="" >
                </div>

                <div class="col_one_third palace-footer-power-by-col" >
                    <a href="#" class="powerby" ><small id="palace-power-by" style="font-family: 'Poppins'; color: grey ">Powered By :</small>&nbsp;<small id="power-by-company-name-in-footer" style="font-family: 'Poppins'; ">Unifox Digital Media.</small></a>
                </div>

                <div class="col_one_third palace-footer-social-icons-col col_last tright">
                    <div class="fright clearfix" id="palace-footer-social-icons" style="">
                        <a href="#" class="social-icon si-small si-rounded si-colored si-facebook" >
                            <i class="icon-facebook" ></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-rounded si-colored si-youtube">
                            <i class="icon-youtube"></i>
                            <i class="icon-youtube"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->


</div><!-- #wrapper end -->

<!-- Go To Top ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>


<!-- External JavaScripts
    ============================================= -->
    <!-- <script src="js/jquery.js"></script> -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- <script src="js/plugins.js"></script> -->

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