@extends('layouts.website')

@section('content')
<script src='https://www.google.com/recaptcha/api.js'></script>


<!--Page Title-->
  <!--  <section class="page-title" style="background-image:url('images/background/3.jpg');">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Careers</h2>
                <ul>
                	<li class="current"><a href="Home">Home</a>
                                </li>
                    <li>Careers</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
     <!--About Section-->
    <section class="about-section">
    	<div class="auto-container">
        	<div class="row clearfix">

                <div class="clearfix"></div>


<div class="form-column pull-right col-md-12 col-sm-12 col-xs-12">

         <form method="post" action ="{{ route('Home.savecareers') }}" enctype="multipart/form-data" >
            @csrf
                    <!-- Contact Form -->
                    <div class="contact-form">

                        <!--Comment Form-->
                        <h2>Current Opening </h2>
                        <h4>Business Development Executive (BDE)</h4>
                        <h4>Qualification</h4>
                        Any degree with 2 wheeler and valid license

                            <div class="row clearfix">
                                <div class="form-group row">
                                <div class ="col-md-2 col-sm-6 col-xs-12 col-lg-2">
                                Name:
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input  class="form-control" required type="text" name="name" placeholder="Name *" >
                                </div>
                            </div>


                                    <div class="form-group row">

                                <div class="col-md-2 col-sm-6 col-xs-12  col-lg-2">
                                Email:
                                </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input class="form-control" required  type="email" name="email" placeholder="Email *" >
                                </div>
                                </div>


                                     <div class="form-group row">

                                <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2">
                                Mobile:
                                </div>
                                  <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input class="form-control"  required type="text" name="mobile" placeholder="Mobile *" >
                                </div>

                              </div>

                                 <div class="form-group row">
                                 <div class="col-md-2 col-sm-6 col-xs-12  col-lg-2">
                                 Upload file:
                                 </div>
                                 <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                    <input class="form-control"  required type="file" name="Resume" accept="application/pdf,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                </div>
                               </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form-group">
                              <div class="g-recaptcha" data-sitekey="6Lc_gOsnAAAAAI58ozcxrjq81_XbRGUD47xkNggM"></div>
                             </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                </div>


                          </div>
                          </div>
                        </form>
						</div>
						</div>
                    <!--End Comment Form -->
                  </div>
			  </section>

                  <script>
    getactivemenu('carrersmenu');
    getactivemenus('carrermenu');
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





