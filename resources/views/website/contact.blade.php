@extends('layouts.website')

@section('content')
<!--Page Title-->
 <!--   <section class="page-title" style="background-image:urlimages/background/3.jpg);">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Contact</h2>
                <ul>
                	<li><a href="Home">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>-->
    <!--End Page Title-->

    <!--Contact Section-->

<script src='https://www.google.com/recaptcha/api.js'></script>
    <section class="contact-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Get in Touch with us</h2>
                <!--div class="text">These days are all share them with me oh inspect more than a hunch.</div-->
                <div class="separater"></div>
            </div>
            <div class="row clearfix">




<div class="contact-info-column pull-left col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    	 <ul class="contact-info">

                           <li><div class="icon"></div><span class="title">CORPORATE OFFICE:</span>Door No. EP / VII - 691, E - L,
Opp. Govt. Rest House, Changuvetty,
Kottakkal, Malappuram Dt. <br> Pin-676 501 Kerala, India<br>
T : <a href= "tel:+914832750600"> +91 483 2750600</a>, <a href= "tel:+914832750250"> +91 483 2750250</a>, <a href= "tel:+914832750200"> +91 483 2750200</a><br />
M : <a href="tel:+919847540000">+91 98475 40000</a>,<a href="tel:+919605600550">+91 96056 00550</a>, <a href="tel:+919846740000">+91 9846740000 </a>
</li>
                        </ul>
                    </div>
                </div>





<!--<div class="contact-info-column pull-left col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-box" style="padding-bottom: 10px !important">
                    	 <ul class="contact-info">

                           <li ><div class="icon"></div><span class="title">MARKETING OFFICE:</span>1st Floor, Aysha Complex,
Perinthalmanna, Malappuram Dist.<br> Pin-679 322
Kerala, India<br>
M : <a href="tel:+919847540000">+91 98475 40000</a>,<a href="tel:+919605600550"> 96056 00550</a>, <a href="tel:+919846740000"> 9846740000 </a>
</li>


                        </ul>
                    </div>
                </div>-->



<div class="form-column pull-right col-md-12 col-sm-12 col-xs-12">

                    <!-- Contact Form -->
                    <div class="contact-form">

                        <!--Comment Form-->
                        <form method="post" action="{{ route('contact.submit') }}" onsubmit = "return validaterecaptcha()">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" required placeholder="Name *">
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" required placeholder="Email *" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="phone" required placeholder="Phone *" required>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="subject"  placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" required placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
                                <div class="g-recaptcha" data-sitekey="6Lc_gOsnAAAAAI58ozcxrjq81_XbRGUD47xkNggM"></div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                </div>

                            </div>


                    </div>
                    </form>
                    <!--End Comment Form -->

                </div>


            </div>
        </div>
    </section>
    <!--End Contact Section-->

    <!--Map Section-->
    <section class="map-section">
    	<!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
	<!--End Map Section-->
  <script>
    getactivemenu('contactmenu');
     getactivemenus('contacmenu');
      function validaterecaptcha()
    {

        if(validateform()== true)
        {

        return true; // submit the form
        }
        else
        {
            alert('Captcha not validate');
            return false; // don't submit the form
        }

    }
     function validateform(){
        var captcha_response = grecaptcha.getResponse();
        if(captcha_response.length == 0)
        {
            // Captcha is not Passed
            return false;
        }
        else
        {
            // Captcha is Passed
            return true;
        }
    }
    </script>
   @endsection
