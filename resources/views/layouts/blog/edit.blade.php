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
                                <div class="col-md-4">
                                    <div class="pr-subtitle prs_big">Details</div>
                                    <!--card-item -->
                                    <ul class="contacts-list fl-wrap">
                                        <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>
                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">gmagnews@domain.com</a></li>
                                    </ul>
                                    <!--card-item end -->
                                    <div class="contact-social fl-wrap">
                                        <span class="cs-title">Find us on: </span>
                                        <ul>
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- box-widget -->
                                    <div class="box-widget-content fl-wrap">
                                        <div class="banner-widget fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg  " data-bg="{{ Vite::asset('resources/assets/images/bg/6.jpg') }}"></div>
                                            </div>
                                            <div class="banner-widget_content">
                                                <h5>Visit our awesome merch and souvenir online shop.</h5>
                                                <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- box-widget  end -->
                                </div>
                                <div class="col-md-8">
                                    <div class="pad-con fl-wrap">
                                        <div class="pr-subtitle prs_big">Drop us a line</div>
                                        <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        @if (session()->has('messagge'))
                                        <div class="alert alert-success" role="alert" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;">
                                            <p>{{session()->get('message')}}</p>
                                        </div>
                                        @endif
                                        @if ($errors->any())
                                                @foreach ($errors->all() as $error)
                                                    <div id="errorMessage" class="error error-ico">{{$error}}</div>
                                                @endforeach
                                            @endif
                                        <div id="contact-form" style="margin-top: 20px;">
                                            <form method="POST"
                                            action="/blog/{{$post->slug}}"
                                            class="custom-form"
                                            enctype="multipart/form-data" >
                                            @method('PUT')
                                                @csrf
                                                <fieldset>
                                                    <input type="text" name="title" id="title" placeholder="Post Title:*" value="{{$post->title}}"/>
                                                    <input type="text" name="details" id="details" placeholder="Brief Detail Of This Post:*" value="{{$post->details}}"/>
                                                    <textarea name="description"  id="description" cols="40" rows="3" placeholder="Post Description:*">{{$post->description}}</textarea>
                                                </fieldset>
                                                <button class="btn color-bg float-btn" id="submit" type="submit">Send message <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                        <!-- contact form  end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- content  end-->

@endsection
