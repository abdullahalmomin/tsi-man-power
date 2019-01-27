@extends('master')
@section('main-content')
<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix"  style="/*background: url('{{asset('assets/images/custom-images/section/slider/Green-Planet-Lands-Ltd.jpg')}}'); */background-size: cover;"  data-height-md="700" data-height-sm="500" data-height-xs="500">

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
    background: url('images/bg.webp') no-repeat;
    background:#f8f8f8 url(images/pattern.jpg) repeat
    background-size: cover;
    transition: 1s opacity;
  }
</style>

<video id="slider_bg_vdo" poster="images/bg.webp" id="bgvid" playsinline autoplay muted loop>
  <source src="{{asset('assets/vdo/bg.webm')}}" type="video/webm">
    <source src="{{asset('assets/vdo/Cr3.mp4')}}" type="video/mp4">
    </video>

    <div class="slider-parallax-inner">

      <div class="slider-parallax-inner">
        <div class="">
          <div class="">
            <div class="swiper-slide dark" >
              <div class="container clearfix" id="custom-welcome-slider-container">

                <div class="slider-caption slider-caption-center" id="custom-slider-caption-for-welcome-slider">



                </div>
              </div>
            </div>

          </div>


        </div>

      </div>

      <a href="#" data-scrollto="#content" data-offset="0" class="dark one-page-arrow"><img class="infinite animated fadeInDown" src="asset{{('assets/demos/business/images/mouse.svg')}}}" alt="" ></a>

    </section>

    <!--************** INTRODUCTION ************************-->
    <section id="content" style="background: #D0D0D0"> 
     <div class="container">
       <div class="row">
        <div class="col-md-12">
         <div style="background-color: white;padding: 20px;border-radius: 5px;">
           <h2 class="palace-luxury-resort-h2" style="text-align: center;font-weight: 700;font-family: 'Muli';font-size: 45px;color: #03a9f4;margin-bottom: 30px;">INTRODUCTION</h2><hr>

           <p class="our-projects-p">We Trade Services International (TSI) Manpower take this opportunity to introduce ourselves as a reputed human resources company from Bangladesh.
           </p>
           <p class="our-projects-p">TSI Manpower was founded in 2008 to meet the increasing global demand for human resources with a view to becoming a hounarable member in the recruitment industry. Our company emphasizes the highest priority of quality and not in quantity. The management has consistently endeavoured to maintain this without comprise. Our recruiting license (Recruiting License Number# RL-1000) is issued by the Bureau of Manpower, Employment and Training (BMET), Government of the People’s republic of Bangladesh.
           </p>
           <a href="{{ url('intro') }}" class="button button-rounded button-reveal button-large button-border tright" id="palace-luxury-resort-button"><i class="icon-play"></i><span>Learn More</span></a>
         </div>
       </div>
     </div>
   </div>
 </section><!-- Our Projects #content end -->




 <section id="content" style="padding-left: 0px; padding-right: 0px;padding-top: 0px; padding-bottom: 0px;">
  <div class="grid" id="palace-residence-grid">
   <figure class="effect-lily palace-residence-effect-lily">
    <img src= "{{asset('assets/images/custom-images/section/Palace/B1.jpg')}}" id="palace-residence-background-img" alt="img12"/>
    <figcaption>
      <div id="palace-residence-lily-fig-caption-div">
        <h2 style="color: white;">Mission</h2>
        <p>Mission of TSI Manpower is to be the leading and most reliable source of placements of human resources at the lowest possible migration cost.</p>
      </p>
    </div>
  </figcaption>   
</figure>
<figure class="effect-lily palace-residence-effect-lily">
  <img src="{{asset('assets/images/custom-images/section/Palace/A1.jpg')}}" id="palace-residence-background-img" alt="img1"/>
  <figcaption>
    <div id="palace-residence-lily-fig-caption-div">
      <h2 style="color: white;">VISSION</h2>
      <p>To get involved in the expectations to be the leading human resource company, focusing on professional human resources and supplying quality skilled and semi-skilled manpower to our partners/clients.</p>

    </p>
  </div>

</figcaption>           
</figure>
</div>
</section>

<section id="content" style="background: white"> 
 <div class="container">

   <div style="padding: 20px;border-radius: 5px;">
     <h2 class="palace-luxury-resort-h2" style="text-align: center;font-weight: 700;font-family: 'Muli';font-size: 45px;color: #03a9f4;margin-bottom: 30px;">Important Links</h2> <hr>

     <div class="row" style="margin:20px 0px;">
      <div class="col-md-4 text-center animated flipInX" style="border-right: 3px solid #b3b8bc;">

        <a href="https://probashi.gov.bd/">
          <i class="far fa-star" style="font-size: 70px; color: #03a9f4;"></i><br><br>
        Ministry of Expatriates’ Welfare and Overseas Employment</a></span>
      </div>

      <div class="col-md-4 text-center animated flipInX"  style="border-right: 3px solid #b3b8bc;">

       <span style="color: #206931;"><a href="http://www.bmet.gov.bd/">
         <i class="far fa-star" style="font-size: 70px; color: #03a9f4;"></i><br><br>
       Bureau of Manpower, Employment and Training</a></span>
     </div>
     <div class="col-md-4 text-center  animated flipInX">
       <span style="color: #206931;"><a href="http://www.baira.org.bd/">
         <i class="far fa-star" style="font-size: 70px; color: #03a9f4;"></i><br><br>
       Bangladesh Association of International Recruiting Agencies</a></span>
     </div>
   </div>
 </div>
</div>
</section>

<section id="content" class="palace-project-section" style="background: url('{{asset('assets/images/custom-images/section/project/images.jpg')}}'); background-size: cover; color: #000;">

  <div class="content-wrap" id="palace-project-content">

    <div class="container clearfix">



      <div class="heading-block palace-project-heading-block center" id="palace-project-heading-block">

        <h2 class="palace-project-h2" style="color:#03a9f4;">WHY US!</h2><hr>

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

  <div class="content-wrap" style="padding-bottom: 0px; padding-top: 60px">

    <!-- Contact form -->
    <div class="section nobg nomargin nopadding clearfix" id="section-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="container clearfix" style="text-align: center;">
              <div class="heading-block center palace-residence-contact-custom-heading-block">
                <h3 class="nott" id="palace-contact-header" style="color: #03a9f4;">CONTACT US</h3><hr>
                <span class="palace-contact-us-span" style="font-size: 18px;">Get in touch with us today for any queries or to schedule a site visit with our team.</span>
              </div>

              <div class="clear"></div>

              <div class="center bottommargin" id="address-text">

                <!-- <abbr><span style="color: #206931; font-weight: 600;">Hotline:</span></abbr><br> -->
                <!-- <abbr title="Phone Number"></abbr> Lorem ipsum. <br><br> -->
                <div class="row">
                  <div class="col-md-3" style="border-right: 3px solid #b3b8bc;">
                    <abbr title="Phone Number"></abbr><span style="color: #206931; font-weight: 600;">Landline:</span><br> +880 29820730 <br>+880 1783426132
                  </div>
                  <div class="col-md-3" style="border-right: 3px solid #b3b8bc;">
                    <abbr title="Email Address"></abbr><span  style="color: #206931; font-weight: 600;">Email:</span><br> <span>info@tsimanpower.com</span> <br>
                  </div>
                  <div class="col-md-3" style="border-right: 3px solid #b3b8bc;">
                    <address style="text-align: center;margin-top: 0px !important">
                      <span style="color: #206931; font-weight: 600;" >Dhaka Office:<br></span>
                      Road:17; House: 07;  Flat : 12/C <br>Rupsha Tower <br> Banani, Dhaka, Bangladesh
                    </address>
                  </div>

                                    <div class="col-md-3">
                    <address style="text-align: center;margin-top: 0px !important">
                      <span style="color: #206931; font-weight: 600;" >Chattogram Office:<br></span>
                      68, Agrabad  <br>P.S: Double Mooring <br> chattogram, Bangladesh
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Google Map ============================================= -->
      <div class="col-md-12" style="padding: 0">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7059285270416!2d90.40108941498218!3d23.793483984568198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e1c62c007%3A0xca5b3c0291a7c156!2sBashati+Rupsha+Tower%2C+Dhaka+1212!5e0!3m2!1sen!2sbd!4v1547980005647"  width="100%" height="400" style="border:none;" ></iframe>
      </div><!-- Google Map End -->

    </div>

  </div>

</section>


@endsection
