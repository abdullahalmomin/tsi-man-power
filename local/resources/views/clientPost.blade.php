@extends('master')
@section('main-content')
    <link rel="stylesheet" href="{{ asset('assets/css/custom-project-02.css') }}" type="text/css" />

    <section id="content" class="palace-project-booking-form-section" style="background: url('{{ asset('assets/images/custom-images/section/project/images.jpg')}}'); background-size: cover;">

        <div class="content-wrap" id="palace-project-booking-form-content">

            <div class="container clearfix" id="project-booking-form-container">


                <div class="col_two_third">

                    <p id="palace-booking-form-custom-paragraph">POST YOUR REQUIREMENTS
                    </p>

                    <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">

                        <div class="col_full" id="palace-booking-form-holder-col">
                            <!-- <label for="register-form-name">Name:</label> -->
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Job Title"/>
                            <!-- <label for="register-form-email">Email Address:</label> -->
                            <input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" placeholder="Email"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Number Of Vacancy"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Industry Area"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Key Skills"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Salary (per Annum) "/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Work Experience "/>
                            <textarea id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Job Requirements "/></textarea>

                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Job Country"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Job State / U.T."/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Job City"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Job Address"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Company Name"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Contact Person"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Year Of Estd."/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Address"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="State"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="City"/>
                            <input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" placeholder="Email ID"/>

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
                    
                     <span class="palace-company-profile-span">

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