@extends('layouts.app')

@section('content')
<!-- wrapper -->
<div id="wrapper">
<!-- content    -->
<div class="content">
    <!--section   -->
    <section class="hero-section">
        <div class="bg-wrap hero-section_bg">
            <div class="bg" data-bg="{{ Vite::asset('resources/assets/images/bg/8.jpg') }}"></div>
        </div>
        <div class="container">
            <div class="hero-section_title">
                <h2>Our Conatcts</h2>
            </div>
            <div class="clearfix"></div>
            <div class="breadcrumbs-list fl-wrap">
                <a href="#">Home</a> <a href="#">Pages</a> <span>Contacts</span>
            </div>
            <div class="scroll-down-wrap scw_transparent">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
                <span>Scroll Down To Discover</span>
            </div>
        </div>
    </section>
    <!-- section end  -->
    <!--section   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="container">
                    <h3 style="font-weight: bold; font-size:30px">{{$post->title}}</h1>
                </div>
                <div class="col-md-2">
                   <div class="bg-wrap">
                        <div class="bg" data-bg="{{ Vite::asset('resources/assets/images/all/13.jpg') }}"></div>
                    </div>
                     <span style=" text-align: justify;text-decoration:underline;font-size:19px;background-color:rgba(148, 148, 148, 0.671); color:rgb(8, 8, 8)">Posted on {{ date('F D Y h:i:s A', strtotime($post->updated_at))}}</span>
                </div>
                <div class="col-md-9">
                    <div class="user-name">
                        <p class="description" style="margin-right:30px">
                            {{$post->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
                <!-- content  end-->

@endsection
