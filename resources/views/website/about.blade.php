
    @extends('layouts.website')

@section('content')
    <!--About Section-->
    <section class="about-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                <!--About Column-->
                <div class="about-column col-md-6 col-sm-12 col-xs-12">
                	<div class="sec-title">
                		<h2>About Our Company</h2>
                        <div class="separater"></div>
                    </div>
                    <div class="text">
                    	<p>Homestead Projects and Developers Pvt. Ltd. the renowned and most trusted homemaker in the North Kerala region, boasting a glorious legacy and proven track-record, is a joint venture of Veekay, Kalliyath, Kainikkara and Lillis. Inspired from the belief that 'homes are the most significant purchase anyone will ever make', Homestead focuses on residential developments from villas to high-rise value apartments.</p>
                    </div>

                </div>
                <!--image Column-->
                <div class="chart-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('website/images/gallery/about.jpg.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <!--End About Section-->



	<!--Sponsors Section-->
    <div class="sponsors-section">
        <div class="auto-container">
            <div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="{{ asset('website/images/clients/1.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('website/images/clients/ 2.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('website/images/clients/3.png') }}" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="{{ asset('website/images/clients/4.png') }}" alt=""></a></div></li>

                </ul>
            </div>
        </div>
    </div>
    <!--End Sponsors Section-->
  <script>
    getactivemenu('aboutmenu');
    getactivemenus('aboumenu');
    </script>
   @endsection
