@extends('layouts.website')

@section('content')
	<!--Page Title-->
    <!--<section class="page-title" style="background-image:url(mages/background/3.jpg');">
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Projects</h2>
                <ul>
                	<li class="current"><a href="<Home">Home</a>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Cases Section-->
   <section class="about-section">
    	<div class="auto-container">
        	<div class="row clearfix">

              <section class="page-title">
            <div class="auto-container">
        	<div class="title-box">

                <ul>
                	<li><a href="{{ route('website.index') }}">Home</a></li>
                    <li><a href="Project">Projects</a></li>

                </ul>
            </div>
        </div>
        </section>

    <!--News Block Two-->
    @foreach($projects as $com)



            <div class="case-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="inner-box">
            <div id="portfolio" class="row">

            <div id="portfolio-184" class="portfolio-item pf-illustration pf-web-design col-sm-4">
            <figure> <div class="onsale">{{ $com->category->name }}</div>
            </div>
            </div>
                        <div class="image">
                            <img src="{{ asset('storage/' . $com->image) }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                                    <a href="{{ route('projects.detail', ['id' => $com->id]) }}"><span class="icon fa fa-link"></span></a>

                                </div>
                            </div>
                        </div>
                        <div class="lower-box clearfix">
                            <h3><a href="{{ route('projects.detail', ['id' => $com->id]) }}">{{ $com->name }} <br>{{ $com->location }}  </a></h3>
                            <a class="arrow" href="{{ route('projects.detail', ['id' => $com->id]) }}"><span class="icon fa fa-angle-right"></span></a>
                        </div>
                    </div>
                </div>

               @endforeach



            </div>
			   </div>



    </section>
    <!--Cases Section-->
<script>
    getactivemenu('projectmenu');
     getactivemenus('projemenu');
    </script>
   @endsection
