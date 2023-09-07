@extends('layouts.website')

@section('content')
<!--Page Title-->
 <!--   /*<section class="page-title" style="background-image:url(images/background/3.jpg');>*/
    	<div class="auto-container">
        	<div class="title-box">
            	<h2>Gallery</h2>
                <ul>
            <li class="current"><a href="Home">Home</a>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Cases Section-->
    <section class="about-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                @foreach($gallery as $gal)



            	<!--Case Block-->
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
              </div>

            	<!-- Styled Pagination -->
               <!-- <div class="styled-pagination">
                    <ul class="clearfix">
                        <li><a class="prev" href="#"><span class="fa fa-angle-double-left">&ensp;Prev</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a class="next" href="#">Next&ensp;<span class="fa fa-angle-double-right"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>-->
    </section>
    <!--Cases Section-->
    @endsection
