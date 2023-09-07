@extends('layouts.website')

@section('content')

<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <section class="page-title">
                <div class="auto-container">
                    <div class="title-box">
                        <ul>
                            <li><a href="{{ route('website.index') }}">Home</a></li>
                            <li><a href="{{ route('projects.index') }}">Projects</a></li>
                            <li><a href="{{ route('project.upcoming') }}">Upcoming</a></li>
                        </ul>
                    </div>
                </div>
            </section>





            <!-- Display Upcoming Projects -->
            @foreach ($upcomingProjects as $up)

            <div class="case-block col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div id="portfolio" class="row">
                        <div id="portfolio" class="portfolio-item pf-illustration pf-web-design col-sm-4">
                            <figure><div class="onsale">UPCOMING</div></figure>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('storage/' . $up->image) }}" alt="Project Image" />
                        <div class="overlay-box">
                            <div class="content">
                                <a href="{{ route('projects.detail',  $up->id) }}"><span class="icon fa fa-link"></span></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lower-box clearfix">
                        <h3><a href="{{ route('projects.detail',  $up->id) }}">{{ $up->name }} <br>{{ $up->location }}</a></h3>
                        <a class="arrow" href="{{ route('projects.detail',  $up->id) }}"><span class="icon fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    getactivemenu('projectmenu');
    getactivemenus('projemenu');
</script>
@endsection
