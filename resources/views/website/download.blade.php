@extends('layouts.website')

@section('content')
<!--Page Title-->
 <!--   /*<section class="page-title" style="background-image:url('mages/background/3.jpg');>*/
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







               	<!--Case Block-->
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('website/images/gallery/river.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                               <a class="link-to-post" href="{{ asset('website/images/Riverine brochure.pdf') }}" target="_blank"> <img src="{{ asset('website/images/gallery/a.jpg') }}" width="600" height="400" alt="Download"  /> </a> </figure>

                            </div>
                              </div>
                                 </div>
                                <div class="lower-box clearfix">
                            <h3><a href="{{ asset('website/images/Riverine brochure.pdf') }}" target="_blank">Homestead Riverine</a>
                           </div>
                        </div>
                         </div>



                         <!--Case Block-->
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('website/images/gallery/v.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                               <a class="link-to-post" href="{{ asset('website/images/FerrisEbrochurenew.pdf') }}" target="_blank"> <img src="{{ asset('website/images/gallery/b.jpg') }}" width="600" height="400" alt="Download"  /> </a> </figure>

                            </div>
                              </div>
                                 </div>
                                <div class="lower-box clearfix">
                            <h3><a href="{{ asset('website/images/FerrisEbrochurenew.pdf') }}" target="_blank">Homestead Ferris</a>
                           </div>
                        </div>
                         </div>








               	<!--Case Block-->
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('website/images/gallery/j.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                               <a class="link-to-post" href="{{ asset('website/images/Grande and ztown bro final.pdf') }}" target="_blank"> <img src="{{ asset('website/images/gallery/a.jpg') }}" width="600" height="400" alt="Download"  /> </a> </figure>

                            </div>
                              </div>
                                 </div>
                                <div class="lower-box clearfix">
                            <h3><a href="{{ asset('website/images/Grande and ztown bro final.pdf') }}" target="_blank">Homestead Grande and ZTown</a>
                           </div>
                        </div>
                         </div>






               	<!--Case Block-->
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('website/images/gallery/tirurheights.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                               <a class="link-to-post" href="{{ asset('website/images/Tirur Heights Brochure.pdf') }}" target="_blank"> <img src="{{ asset('website/images/resource/a.jpg') }}" width="600" height="400" alt="Download"  /> </a> </figure>

                            </div>
                              </div>
                                 </div>
                                <div class="lower-box clearfix">
                            <h3><a href="{{ asset('website/images/Tirur Heights Brochure.pdff') }}" target="_blank">Tirur Heights</a>
                           </div>
                        </div>
                         </div>


                         	<!--Case Block-->
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('website/images/gallery/Aquabay-02.png') }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                               <a class="link-to-post" href="{{ asset('website/images/Aquabay brochure.pdf') }}" target="_blank"> <img src="{{ asset('website/images/gallery/a.jpg') }}" width="600" height="400" alt="Download"  /> </a> </figure>

                            </div>
                              </div>
                                 </div>
                                <div class="lower-box clearfix">
                            <h3><a href="{{ asset('website/images/Aquabay brochure.pdf') }}" target="_blank">Aquabay brochure</a>
                           </div>
                        </div>
                         </div>
	<!--Case Block-->
            	<div class="case-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="{{ asset('website/images/gallery/sere.jpg') }}" alt="" />
                            <div class="overlay-box">
                                <div class="content">
                               <a class="link-to-post" href="{{ asset('website/images/Serene brochure.pdf') }}" target="_blank"> <img src="{{ asset('website/images/gallery/a.jpg') }}" width="600" height="400" alt="Download"  /> </a> </figure>

                            </div>
                              </div>
                                 </div>
                                <div class="lower-box clearfix">
                            <h3><a href="{{ asset('website/images/Serene brochure.pdf') }}" target="_blank">Serene brochure</a>
                           </div>
                        </div>
                         </div>







        <div class="text-center">
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
