@extends('master')
@section('main-content')
    <link rel="stylesheet" href="{{ asset('assets/css/custom-project-02.css') }}" type="text/css" />

    <section id="content" class="palace-project-booking-form-section" style="background: url('{{ asset('assets/images/custom-images/section/booking-form/background-palace-booking-form.jpg')}}'); background-size: cover;">


        <!-- <img src="{{ asset('assets/images/custom-images/section/booking-form/palace-booking-form-top-left-img.png') }}" id="top-left-img-booking-form"> -->


        <div class="content-wrap" id="palace-project-booking-form-content">

            <div class="container clearfix" id="project-booking-form-container">


                <div class="col_two_third">

                    <p id="palace-booking-form-custom-paragraph">POST YOUR RESUME</p>

                    <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

                        <div class="col_full" id="palace-booking-form-holder-col">
                            <!-- <label for="register-form-name">Name:</label> -->
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Your Name"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Qualification"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Area of Interest"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Experience (No. of Years)"/>
                            <textarea id="register-form-name" name="register-form-name" value="" class="form-control" placeholder=" Address"/></textarea>

                            <!-- <label for="register-form-email">Email Address:</label> -->
                            <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" placeholder="Email"/>

                            <!-- <label for="register-form-phone">Phone:</label> -->
                            <input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" placeholder="Phone No"/>

                            <br>
                            <p style="color: white;">Post Your Resume</p>
                            <input type="file" name="" id="register-form-phone" >

                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <button class="button" id="register-form-submit" name="register-form-submit" value="register">Submit</button>
                        </div>

                    </form>

                </div>


                <div class="col_one_third col_last">

                 <div class="heading-block palace-project-booking-form-download-heading-block center">

                     <h2 class="palace-project-booking-form-download-h2">DOWNLOAD COMPANY PROFILE</h2>
                        
                     <span class="palace-company-profile-span" style="width: auto !important;">

                         <a href="Booking-form.pdf"  download="Booking-form.pdf">

                             <img src="{{ asset('assets/images/custom-images/section/booking-form/palace-booking-form-download-icon.png') }}" id="booking-down-arrow-img">

                         </a>

                     </span>

                 </div>

             </div>




         </div>

     </div>

    </section>

@endsection