<!-- top bar end -->
    <div class="header-inner fl-wrap">
        <div class="container">
            <!-- logo holder  -->
            <a href="{{ url('/') }}" class="logo-holder"><img src="{{ Vite::asset('resources/assets/images/logo.png') }}" alt=""></a>
            <!-- logo holder end -->
            <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
            @guest
                @if(Route::has('login') && Route::has('register'))
                   <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i><span class="header-tooltip"> Sign In</span></div>
                @endif
                  @else
                <div class="srf_btn htact show-reg-form"><i class="far fa-user" style="color: #e93314;font-weight:bold;text-transform: capitalize;"><br/>{{ Auth::user()->name }}</i></div>
            @endguest
            <!-- header-search-wrap -->
            <div class="header-search-wrap novis_sarch">
                <div class="widget-inner">
                    <form action="#" method="POST">
                        @csrf
                        <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                        <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                    </form>
                </div>
            </div>
            <!-- header-search-wrap end -->

            <!-- nav-button-wrap-->
            <div class="nav-button-wrap">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->
            <!--  navigation -->
            <div class="nav-holder main-menu">
                <nav>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="/about">About-Us</a></li>
                        <li>
                            <a href="#" class="act-link">News<i class="fas fa-caret-down"></i></a>
                            <!--second level -->
                            <ul>
                                <li><a href="/Celebrities">Celebrities</a></li>
                                <li><a href="/Politicians">Politicians</a></li>
                                <li><a href="/Economy">Economy</a></li>
                                <li><a href="/Technology">Technology Update</a></li>
                                <li><a href="/Security">Country Security</a></li>
                                <li>
                                    {{-- <a href="#">Single<i class="fas fa-caret-down"></i></a>
                                    <!--second level -->
                                    <ul>
                                        <li><a href="post-single.html">Style 1</a></li>
                                        <li><a href="post-single2.html">Style 2</a></li>
                                    </ul> --}}
                                    <!--second level end-->
                                </li>
                            </ul>
                            <!--second level end-->
                        </li>
                        <li><a href="/Africa">Africa</a></li>
                        <li><a href="/Climate">Climate</a></li>
                        <li><a href="/Science">Science</a></li>
                        <li><a href="/Health">Health</a></li>
                        <li><a href="/Ea">Entertainment & Arts</a></li>
                    </ul>
                </nav>
            </div>
            <!-- navigation  end -->
        </div>
    </div>
</header>
<!-- header end  -->
