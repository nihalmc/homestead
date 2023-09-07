@extends('layouts.website')

@section('content')

  <!--Main Slider-->
 <div class="preloader"></div>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <section class="main-slider" data-start-height="400" data-slide-overlay="yes">
       <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    @foreach($homeslider as $slider)

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset('storage/' . $slider->image) }}" data-saveperformance="off" data-title="{{ $slider->Title }}">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="overlay-slide"></div>
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="115"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>{{ $slider->title }}<br>{{ $slider->title2 }} </h2></div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="115"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="{{ $slider->Url }}" class="theme-btn btn-style-one">Read More</a></div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="1100"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"> <a style=""  href="Contact" class="theme-btn btn-style-one">CONTACT US</a>
                    </li>

                    @endforeach



                </ul>

            </div>
        </div>
    </section>


  	<!--End Main Slider-->


    <!-- welcome section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="top-title">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-5 col-xs-12">
                        <h2>Homestead Projects</h2>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12">
                        <div class="text"><p>Homestead Projects and Developers Pvt. Ltd. the renowned and most trusted homemaker in Malabar region having glorious legacy and proven track-record, is a joint venture of the Veekay, Kalliyath, Kainikkara and Lillis. Inspired from the belief that 'homes are the most significant purchase anyone will ever make', Homestead focuses on commercial, residential development from luxury villas to high-rise premium apartments. having close association with renowned business conglomerates, and with a wide network of operations across India, Middle East and Asian countries, Homestead comes with an international exposure.</p></div>
                    </div>
                </div>
            </div>


    </section>



    <!--Cases Section-->
    <section class="cases-section grey-bg">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title">
            	<h2>Projects</h2>
                <div class="separater"></div>
            </div>
            <div class="row clearfix">
            	<!--Case Block-->

                	        @foreach($projectshomepage as $up)



                <div class="case-block col-lg-3 col-md-6 col-sm-6 col-xs-12 bottom10">

                <div class="inner-box">
                <div id="portfolio" class="row">

                <div id="portfolio-184" class="portfolio-item pf-illustration pf-web-design col-sm-4">
                <figure> <div class="onsale">{{ $up->category->name }}  </div>
                </div>
                </div>
                        <div class="image">
                            <img src="{{ asset('storage/' . $up->image) }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">

                                    <a href="{{ route('projects.detail',  $up->id) }}"><span class="icon fa fa-link"></span></a>

                                </div>
                            </div>
                        </div>

                        <div class="lower-box clearfix">
                            <h3><a href="{{ route('projects.detail',  $up->id) }}">{{ $up->name }}  <br>{{ $up->location  }}  </a></h3>
                            <a class="arrow" href="{{ route('projects.detail',  $up->id) }}"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>

                @endforeach

                   </div>
                    <div class="text-right">
            	<a href="{{ route('projects.index') }}"  class="theme-btn btn-style-one">View All</a>
            </div>
				   </div>
                   </section>

    <!--Cases Section-->



<section class="default-section">
    	<div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title">
                <h2>Latest News</h2>
                <div class="separater"></div>
            </div>
        	<div class="row clearfix">

            	<!--News Column-->


                                <!--News Block Two-->
                         @foreach($news as $new)

	<div class="content-side col-lg-4 col-md-6 col-sm-12 col-xs-12">

                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">

                                    <a href="#"><img src="{{ asset('storage/' . $new->image ) }}" alt="" /></a>
                                 <!-- <div class="post-date"><<!--?php $originalDate = "$new->created_date";
                                              $newDate = date("d M Y", strtotime($originalDate));

                                                 echo $newDate;?>
                                    </div>  -->
                                           </div>
                                <div class="lower-box">
                                	<ul class="post-meta">
                                       <!-- <li><span class="icon fa fa-user"></span>By Admin</li>-->
                                       <!-- <li><span class="icon fa fa-commenting"></span>10 Comments</li>-->
                                    </ul>
                                    <h3><a href="{{ route('website.news2',$new->id) }}">{{ $new->title }} </a></h3>
                                    <div class="text">{!! $new->text !!}
                                    <a href="{{ route('website.news2',$new->id) }}"class="read-more">Read More <span class="fa fa-angle-double-right"></span></a>
                             </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        @endforeach

                        </div>

                          </div>



    </section>
    <!--End Default Section-->












    <!--Services Section-->
    <section class="services-section">
        <div class="auto-container">
            <!--Sec Title-->



            <div class="row clearfix">
                <!--Form Column-->
                <div class="form-column col-md-5 col-sm-12 col-xs-12">

                    <div class="inner-box">
                        <div class="form-title" style="background-image:url(images/background/form-bg.html)">
                            <h3>Quick Enquiry</h3>
                        </div>
                        @if ($errors->has('captcha'))
    <div class="alert alert-danger">{{ $errors->first('captcha') }}</div>
@endif

                        <!--services Form-->
                        <div class="donate-form">
                            <div class="form-box">
                                <form method="post" action="{{ route('quickenquiry.submit') }}" >
                                    @csrf

                                    <!--Form Group-->
                                    <div class="form-group">
                                        <input type="text" name="name" required placeholder="Name *" required>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group">
                                        <input type="text" name="mobile"  required placeholder="Mobile *" required>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group">
                                    Select project
                                        <select class="selectpicker form-control" name="selectproject" data-live-search="true" size="2">
                                            @foreach ($projectshomepage as $proj)
                                            <option value="{{ $proj->name }}">{{ $proj->name }}</option>
                                        @endforeach

                                        </select>

                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group">
                                        <textarea placeholder="Message" name="Message" required ></textarea>
                                    </div>
                                    <div class="form-group">
                                     <div class="g-recaptcha" data-sitekey="6Lc_gOsnAAAAAI58ozcxrjq81_XbRGUD47xkNggM"></div>
                                    </div>
                                    <!--Form Group-->
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one">Submit Now</button>
                                    </div>
                                    <!--Services Form-->
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Services Column-->
                <div class="services-column col-md-7 col-sm-12 col-xs-12">

                    <div class="row clearfix">

                        <!--Services Block Two-->

<iframe width="100%" height="450" src="https://www.youtube.com/embed/q_sBDQ8dtmM" frameborder="0" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->


    <script>
 $(window).on('load',function(){
    showdesclamermodal();
 });
    getactivemenu('homemenu');
     getactivemenus('hommenu');
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
