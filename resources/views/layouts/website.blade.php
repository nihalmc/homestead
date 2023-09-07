<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Homestead Projects and Developers Pvt. Ltd</title>


<!-- Stylesheets -->
<link href="{{ asset('website/css/bootstrap.css') }}" rel="stylesheet" >
<link href="{{ asset('website/css/bootstrap-select.css') }}" rel="stylesheet" >
<link href="{{ asset('website/css/bootstrap-slider.css') }}" rel="stylesheet" >
<link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('website/css/font-awesome.css') }}" rel="stylesheet" >
<link href="{{ asset('website/css/responsive.css') }}" rel="stylesheet">


<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('website/images/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="{{ asset('website/image/png') }}" sizes="32x32" href="{{ asset('website/images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="{{ asset('website/image/png') }}" sizes="16x16" href="{{ asset('website/images/favicon/favicon-16x16.png') }}">
<script src="{{ asset('website/js/jquery.js') }}"></script>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- Responsive -->
</head>
<body>
<div class="page-wrapper">

    <!-- Main Header-->
    <header class="main-header">


        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">

                	<div class="pull-left logo-outer">
                    	<div class="logo"><a href="{{ route('website.index') }}"><img src="{{ asset('website/images/logo1.png') }}" alt="" title=""></a></div>
                    </div>

                    <div class="pull-right upper-right clearfix">

                        <!--Info Box-->

                          <!--Info Box-->
                        <div class="upper-column info-box">
                        	 <li><div class="icon"><span class="call"></span></div><span class="title"><strong>Call Us :</span>+91 9847540000</strong></li>

                    </div>
                        <!--Info Box-->
                        <div class="upper-column info-box mb">
                        	<div id="fb-root"><iframe src="http://www.facebook.com/plugins/like.php?app_id=167398216667909&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FHomestead-Projects-Developers-Pvt-Ltd%2F156560797759607&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:82px; height:38px; margin:0px 0 0 0;" allowTransparency="true"></iframe></fb:like></div>
</span> </div>




                </div>
            </div>
        </div>
        <!--End Header Upper-->

        @include("partials.navbar")

    </header>
    <!--End Main Header -->


    @yield('content')


  @include("partials.footer")

    <!-- Back to top start -->

    <!-- *Scripts* -->
    <script src="{{ asset('website/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('website/js/revolution.min.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fancybox.pack.js') }}"></script>
    <script src="{{ asset('website/js/jquery.fancybox-media.js') }}"></script>
    <script src="{{ asset('website/js/owl.js') }}"></script>
    <script src="{{ asset('website/js/appear.js') }}"></script>
    <script src="{{ asset('website/js/wow.js') }}"></script>
    <script src="{{ asset('website/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('website/js/script.js') }}"></script>
    <script src="{{ asset('website/js/bootstrap-select.js') }}"></script>
<!--Graph Script-->
     <script src="{{ asset('website/js/chart.js') }}"></script>
    <script src="{{ asset('website/js/graph.js') }}"></script>



</body>
</html>
<script>
    function showdesclamermodal()
    {
        $('#disclaimerModal').modal('show');
    }

    </script>
