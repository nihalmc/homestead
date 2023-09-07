@extends('layouts.website')

@section('content')
    <!--Sidebar Page-->
    <div class="sidebar-page-container blog-page">
      <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
			<div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
            <section class="page-title">
            <div class="auto-container">
        	<div class="title-box">

                <ul>
                	<li><a href="{{ route('website.index') }}">Home</a></li>
                    <li><a href="{{ route('website.news2',$news->id) }}">News & Events</a></li>
                </ul>
            </div>
        </div>
        </section>
        </div>
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                	<!--Our-Blogs-->
                    <div class="blogs-detail">

                    <div class="auto-container">
                        <!--News Block Two-->
                    <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image">



                            <h3>{{ $news["title"] }}</h3><br>


                               <img src="{{ asset('storage/' .   $news->image) }}" alt="" /></a>
                              <!--  <div class="post-date"><<!--?php echo $news["created_date"];?>-->
</div>
                               <!-- </div>-->
                                <div class="lower-box">


                                    <div class="text">
                                        {!! $news->text  !!}
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>
                    <div>
                </div>

                <!--Sidebar-->




            </div>
        </div>
        </section>
    </div>
    @endsection
