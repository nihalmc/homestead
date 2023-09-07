@extends('layouts.website')

@section('content')

<script src='https://www.google.com/recaptcha/api.js'></script>


<!--Page Title-->
  <!--  <section class="page-title" style="background-image:url(images/background/3.jpg);">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Projects</h2>
                <ul>
                	<li><a href="index-2.html">Home</a></li>
                    <li>Project Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Cases Section-->
    <section class="cases-section cases-single-page">
    	<div class="auto-container">
        	<div class="cases-single">
            	<div class="inner-box">
                	<!--Cases Images-->
                	<div class="cases-images">
                    	<div class="row clearfix">
                        	<!--Column-->
                        	<div class="column col-md-4 col-sm-4 col-xs-12">
                            	<div class="image">
                                	<img src="{{ asset('website/images/gallery/15.pg') }}" alt="" />
                                </div>
                                <div class="image">
                                	<img src="{{ asset('website/images/gallery/16.jg') }}" alt="" />
                                </div>
                            </div>
                            <!--Column-->
                            <div class="column col-md-8 col-sm-8 col-xs-12">
                            	<div class="image">
                                	<img src="{{ asset('website/images/gallery/17.jp') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">


                        <!--Cases Info column-->
                    	<div class="cases-info-column col-md-6 col-sm-12 col-xs-12">

                            <!--Project Info Widget-->
                            <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">
                                	<div class="blog-carousel owl-carousel owl-theme">
                        	   @foreach($images as $im)

                                    	<div class="blog-slide">
                                            <a href="blog-single.html"><img src="{{ asset('storage/' . $im->image) }}"  alt="" /></a>

                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                                <div class="lower-box">


                                </div>
                            </div>
                        </div>
                </div>



                        <!--Cases Detail column-->
                    	<div class="cases-detail-column col-md-6 col-sm-12 col-xs-12">

                        	<div class="text">
                              <div class="content">
                                  <h3>{{ $project->name }}  </h3>
                             <img src ="{{ asset('storage/' . $project->logo) }}" align = "left"> </img>{!! $project->txtDescription !!}
                                </div>



                                </div>
                                </div>








<div class="cases-detail-column col-md-12 col-sm-12 col-xs-12">

<div class="row">

                        <div class="col-md-12">
                            <div class="product-tab-box">
                                <ul class="nav nav-tabs tab-menu">
                                    <li class="active"><a href="#spec" data-toggle="tab">Specifications</a></li>
                                    <li><a href="#amen" data-toggle="tab">Amenities</a></li>
                                     <li><a href="#floor" data-toggle="tab">Floor Plan</a></li>
                                       <li><a href="#gall" data-toggle="tab">Gallery</a></li>
                                       <li><a href="#pvideo" data-toggle="tab">Project Video</a></li>
                                     <li> <a href="#stat" data-toggle="tab">Current Status</a></li>

                                       <li><a href="#loc" data-toggle="tab">Location Map</a></li>
                                       <li><a href="#pro" data-toggle="tab">Project Enquiry</a></li>


                                </ul>
      <div class="tab-content">
                                    <div class="tab-pane active" id="spec">

                                     @foreach($specifications as $det)



                                        <div class="product-details-content">
                                            <div class="desc-content-box">

<h4><strong>{{ $det->specification->title }} </strong> :{{ $det->value }}    </h4>

                                               </div>

                                        </div>

                                        @endforeach
{{ $project["specification"] }}

                        </div>

                                    <div class="tab-pane" id="amen">

   <div class="amineties">
     <div class="column col-md-6 col-sm-6 col-xs-12">
   <ul>

   @foreach($aminities as $key=>$am)

       @if($key%2 == 0)


   <li><img src="{{ asset('website/images/icons/icon.jpg') }}">{{ $am->aminities->title }}</li>

@endif

@endforeach

</ul>
</div>
<div class="column col-md-6 col-sm-6 col-xs-12">
<ul>


    @foreach($aminities as $key=>$am)

       @if($key%2 == 1)


   <li><img src="{{ asset('website/images/icons/icon.jpg') }}">{{ $am->aminities->title }}</li>

@endif

@endforeach


 </ul>
 </div>


   </div>

   </div>







                                  <div class="tab-pane" id="floor">
            @foreach($floorplans as $floor)

             <div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('storage/' .$floor->image) }} "alt="" />
                            <div class="overlay-box">
                                <div class="content">

                                    <a class="lightbox-image" href="{{ asset('storage/' .$floor->image) }}" data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="lower-box clearfix">
                            <h3><a class="lightbox-image" href="{{ asset('website/images/gallery/e.jpg') }}"> {{ $floor->title }}
                                @if($floor->area)
                                    <br>{{ $floor->area }}
                                @endif </a></h3>
                            <a class="arrow" href="cases-single.html"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>
@endforeach
</div>



                                    <div class="tab-pane" id="stat">



<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('storage/' . $project->status) }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">

                                    <a class="lightbox-image" href="{{ asset('storage/' . $project->status) }}" title="title " data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<div class="tab-pane" id="pvideo">
<style>
      .video-container {
	position:relative;
	padding-bottom:56.25%;
	padding-top:30px;
	height:0;
	overflow:hidden;
}

.video-container iframe, .video-container object, .video-container embed {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
}
</style>

   @foreach($walkthroughs as $walk)

   <div class="case-block col-md-6 col-sm-6 col-xs-12">
             <div class="video-container">
                <iframe  src="https://www.youtube.com/embed/{{ $walk->url }}">
                </iframe>
            </div>

    </div>
   @endforeach


</div>
<div class="tab-pane" id="gall">
           @foreach($galleries as $gal)

                <div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('storage/' . $gal->image) }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">

                                <a class="lightbox-image" href="{{ asset('storage/' . $gal->image) }}" title="{{ $gal->title }}" data-fancybox-group="gallery"><span class="icon fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
 </div>
 <div class="tab-pane" id="loc">

                                    <div class="case-block col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('storage/' . $project->map) }}" alt="" />

                        </div>

                                    </div>
                                </div>
</div>
<div class="tab-pane" id="pro">
     <div class="form-column pull-right col-md-12 col-sm-12 col-xs-12">

            <form method ="post" action = "{{ route('project.submit') }}" >
                @csrf
                    <!-- Contact Form -->
                <div class="contact-form">

                        <!--Comment Form-->
                    <h4>Yes I am interested to know more about{{ $project->name }}  , Please get in touch with me</h4><br>
                    <h4><strong>Call Us +91 98475 40000</strong></h4>
                        <div class="row clearfix">
                                <input type="hidden" name= "hiddenproject" value = "{{ $project->name }}">
                                <div class="form-group row">
                                <div class ="col-md-2 col-sm-6 col-xs-12 col-lg-2"><br>
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
                                    <input class="form-control" required  type="text" name="mobile" placeholder="Mobile *" >
                                </div>

                              </div>


                                <div class="form-group row">

                                <div class="col-md-2 col-sm-6 col-xs-12 col-lg-2">
                                Requirements:
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 ">
                                <textarea required name="requirement"></textarea>
                                </div>

                              </div>

                              <div class="form-group row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="g-recaptcha" data-sitekey="6Lc_gOsnAAAAAI58ozcxrjq81_XbRGUD47xkNggM"></div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                              </div>






                          </div>
                          </div>
                        </form>
						</div>
						</div>
                    <!--End Comment Form -->
                  </div>



                                    </div>
                                       </div>
                                </div>
                            </div>
                        </div>
                    </div>
					</div>
					</div>
   </section>

   <script>
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

    <!--Cases Section-->
    @endsection
