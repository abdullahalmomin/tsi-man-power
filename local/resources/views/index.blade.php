@extends('master')
@section('main-content')
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix"  style="background: url('{{asset('assets/images/custom-images/section/slider/Green-Planet-Lands-Ltd.jpg')}}'); background-size: cover;"  data-height-md="700" data-height-sm="500" data-height-xs="500">

    <style>
    #slider_bg_vdo {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
        transform: translateX(-50%) translateY(-50%);
        /*background: url('images/bg.webp') no-repeat;*/
        background:#f8f8f8 url(images/pattern.jpg) repeat
        background-size: cover;
        transition: 1s opacity;
    }
</style>


<div class="slider-parallax-inner">
    <video id="slider_bg_vdo" poster="images/bg.webp" id="bgvid" playsinline autoplay muted loop>
        <source src="{{asset('assets/vdo/bg.webm')}}" type="video/webm">
            <source src="{{asset('assets/vdo/bg.mp4')}}" type="video/mp4">
            </video>
            <div class="slider-parallax-inner">
                <div class="">
                    <div class="">
                        <div class="swiper-slide dark" >
                            <div class="container clearfix" id="custom-welcome-slider-container">

                                <div class="slider-caption slider-caption-center" id="custom-slider-caption-for-welcome-slider">

                                    <div class="heading-block center" id="welcome-slider-heading-block" style="width:40%; float: right;  background: rgba(0, 0, 0, 0.7); padding: 20px;">

                                        <h5>Elevator Technician</h5>

                                        <p>Elevator service technicians are primarily responsible for all preventative maintenance and repair work on elevators and similar people-moving machinery. They also install various components of the elevator system, such as the railings on which the elevator car travels, its supporting motors and cables and the electrical wiring and microprocessors that power the equipment.</p>

                                    <!-- <h3 id="welcome-slider-h2-01"><span style="color: #fff;">YOU </span> DESERVE <span style="color: #fff;">A BETTER WAY</span> TO INVEST</h3> -->

                                    <!-- <h3 class="welcome-slider-h2-02">Secure your future by investing today with the right people</h3> -->


                                    <!-- <a href="http://www.blueplanetgroup.com/" class="button button-rounded button-reveal button-large button-border tright" id="meet-our-button"><i class="icon-play"></i><span>VISIT BLUE PLANET GROUP</span></a> -->

                                </div>

                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

        <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="asset{{('assets/demos/business/images/mouse.svg')}}}" alt="" ></a>

    </section>






    <!--************** Our Projects ************************-->
    <section id="content"> 

        <div class="content-wrap our-projects-content-wrap">

            <div class="container our-project-custom-container clearfix" id="">


                <div class="row our-project-custom-row">



                    <div class="col-md-12 our-project-holding-column">
                       <h2 class="palace-luxury-resort-h2" style="text-align: center;font-weight: 700;font-family: 'Muli';font-size: 45px;color: #77b12c;margin-bottom: 30px;">INTRO</h2>

                       <p class="our-projects-p">We Trade Services International (TSI) Manpower take pleasure to introduce ourselves as a reputed human resources consulting organization from Bangladesh
                       </p>
                       <p class="our-projects-p">TSI Manpower was founded in 2008 to meet the increasing global demand for human resources with a view to becoming a leader in the recruitment industry. Our company emphasizes the highest priority of quality and not in quantity. The management has consistently endeavored to maintain this without comprise. Our recruiting license (Recruiting License Number# RL-1000) is issued by Bureau of Manpower, Employment and Training (BMET), Government of the People’s republic of Bangladesh.
                       </p>
                       <a href="intro.html" class="button button-rounded button-reveal button-large button-border tright" id="palace-luxury-resort-button"><i class="icon-play"></i><span>Learn More</span></a>






                   </div>




               </div>


           </div>

       </div>

   </section><!-- Our Projects #content end -->


   <section id="content" style="padding-left: 0px; padding-right: 0px;padding-top: 0px; padding-bottom: 0px;">
    <div class="grid" id="palace-residence-grid">
       <!-- "{{asset('assets/ ')}}" -->
       <figure class="effect-lily palace-residence-effect-lily">
        <img src= "{{asset('assets/images/custom-images/section/Palace/B1.jpg')}}" id="palace-residence-background-img" alt="img12"/>
        <figcaption>
            <div id="palace-residence-lily-fig-caption-div">
                <h2 style="color: white;"><!-- <img src="images/custom-images/logo/Palace_Residence1.png" alt="Palace_Residence1" id="palace-residence-logo-01"  /> --> Mission</h2>
                <p>The mission of TSI Manpower is to be the leading and most reliable source of placements of human resources at the lowest possible cost.</p>
                <!-- <p><a href="palace-residence-1.html" class="button button-rounded button-reveal button-large button-border tright" id="palace-residence-button"><i class="icon-play"></i><span>VIEW PROJECT</span></a> -->
                </p>
            </div>

        </figcaption>   

        <!-- "{{asset('assets/images/custom-images/section/Palace/palace-1jpg')}}"         -->
    </figure>
    <figure class="effect-lily palace-residence-effect-lily">
        <img src="{{asset('assets/images/custom-images/section/Palace/A1.jpg')}}" id="palace-residence-background-img" alt="img1"/>
        <figcaption>
            <div id="palace-residence-lily-fig-caption-div">
                <h2 style="color: white;">VISSION</h2>
                <p>“To get involved in the expectations to be the leading human resource company, focusing on professional human resources and supplying quality human resource services to our partners/clients”.</p>

            </p>
        </div>

    </figcaption>           
</figure>
</div>
</section>


<!-- Palace Feature-Amenities Section -->

<section id="content" class="palace-project-section" style="background: url('{{asset('assets/images/custom-images/section/project/project-feature-background.jpg')}}'); background-size: cover;">


    <!-- <img src="images/custom-images/section/project/project-feature-top-left-img.png" id="top-left-img"> -->


    <div class="content-wrap" id="palace-project-content">

        <div class="container clearfix">



            <div class="heading-block palace-project-heading-block center" id="palace-project-heading-block">

                <h2 class="palace-project-h2">WHY US!</h2>

            </div>
            <div class="row">
                <div class="postcontent clearfix" id="project-feature-custom-postcontent">

                    <div class="col_full">

                        <ul class="iconlist" id="project-feature-icon-list">

                            <li>
                                <i>
                                  <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
                              </i>
                              As leading manpower providers from Bangladesh, we are aware of the fact that Bangladesh possesses with high levels of technical qualifications and career specialization topped by hands on experience.

                          </li>

                          <li>
                            <i>

                                <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
                            </i>
                            Our staff works with dedication in delivering the best of their responsibilities thus confirming to a dedicated team work.

                        </li>

                        <li>
                            <i>
                             <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
                         </i>
                         We maintain a proactive and ethical approach in identifying and understanding the expectations of our client.
                     </li>

                     <li>
                        <i>
                         <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
                     </i>
                 We provide better services within the stipulated time frame for the satisfaction of our client.                                </li>
                 <li>
                    <i>
                     <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
                 </i> 
                 We have a team of well qualified and experienced technical personnel and professionals to expedite execution of all formalities.
             </li>
             <li>
                <i>
                 <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
             </i> 
             We are the most reliable source of manpower providing our services at the lowest possible cost.
         </li>
         <li>
            <i>
             <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
         </i> 
         Our team members are always available to listen to and answer any queries of our clients with sincerity, reliability and dependability.
     </li>
     <li>
        <i>
         <img src="{{asset('assets/images/custom-images/section/project/project-feature-list-icon.png')}}" class="img-feature-custom-list-icon">
     </i> 
     By maintain a code of conduct we bring in transparency in our operations and professionalism thus ensuring quality with confidence.
 </li>

</ul>
</div>

</div>
</div>





</div>

</div>

</section><!-- #content end -->



<section>
    <div class="modal fade bs-example-modal-lg-01" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_02.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade bs-example-modal-lg-02" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_05.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade bs-example-modal-lg-03" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_03.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="modal fade bs-example-modal-lg-04" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"> <!-- Large modal -->
        <div class="modal-dialog modal-lg">
            <div class="modal-body">
                <div class="modal-content">


                    <div class="modal-body" style="padding: 0">

                        <img src="images/custom-images/section/palace-about-us/Post_04.jpg">


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!--  Palace-Contact-us Section-->
<section id="content" style="padding: 0px; padding-bottom: 0px">

    <div class="content-wrap" style="padding-bottom: 0px; padding-top: 50px">

        <!-- Contact form -->
        <div class="section nobg nomargin nopadding clearfix" id="section-contact">
            <div class="container clearfix" style="text-align: center;">

                <div class="heading-block center">
                    <h3 class="nott" id="palace-contact-header">CONTACT US</h3>
                    <span class="palace-contact-us-span">Get in touch with us today for any queries or to schedule a site visit with our team.</span>
                </div>

                <div class="clear"></div>

                <div class="center bottommargin" id="address-text">

                    <abbr><span style="color: #206931; font-weight: 600;">Hotline:</span></abbr><br>
                    <abbr title="Phone Number"></abbr> Lorem ipsum. <br><br>

                    <abbr title="Phone Number"></abbr><span style="color: #206931; font-weight: 600;">Landline:</span><br> Lorem ipsum.<br><br>

                    <abbr title="Email Address"></abbr><span style="color: #206931; font-weight: 600;">Email:</span><br> <span>info@tsimanpower.com</span> <br><br>

                    <address style="text-align: center;">
                        <span style="color: #206931; font-weight: 600;">Corporate Office:</span><br>
                        Lorem ipsum. <br>Lorem ipsum.<br> Dhaka-1213, Bangladesh. 
                    </address>
                </div>
            </div>
            <!-- Google Map ============================================= -->
            <div class="col-md-12" style="padding: 0">



                <iframe src="https://snazzymaps.com/embed/51979" width="100%" height="600px" style="border:none;"/></iframe>

            </div><!-- Google Map End -->

        </div>

    </div>

</section>


@endsection
