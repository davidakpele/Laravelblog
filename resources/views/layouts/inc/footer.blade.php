<!-- footer -->
<footer class="fl-wrap main-footer">
    <div class="container">
        <!-- footer-widget-wrap -->
        <div class="footer-widget-wrap fl-wrap">
            <div class="row">
                <!-- footer-widget -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="footer-widget-content">
                            <a href="index.html" class="footer-logo"><img src="images/logo2.png" alt=""></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                            <div class="footer-social fl-wrap">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
                <!-- footer-widget -->
                <div class="col-md-2">
                    <div class="footer-widget">
                        <div class="footer-widget-title">Categories </div>
                        <div class="footer-widget-content">
                            <div class="footer-list footer-box fl-wrap">
                                <ul>
                                    <li> <a href="#">Politics</a></li>
                                    <li> <a href="#">Technology</a></li>
                                    <li> <a href="#">Business</a></li>
                                    <li> <a href="#">Sports</a></li>
                                    <li> <a href="#">Science</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
                <!-- footer-widget -->
                <div class="col-md-2">
                    <div class="footer-widget">
                        <div class="footer-widget-title">Links</div>
                        <div class="footer-widget-content">
                            <div class="footer-list footer-box fl-wrap">
                                <ul>
                                    <li> <a href="#">Home</a></li>
                                    <li> <a href="#">About</a></li>
                                    <li> <a href="#">Contacts</a></li>
                                    <li> <a href="#">News</a></li>
                                    <li> <a href="#">Shop</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
                <!-- footer-widget -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="footer-widget-title">Subscribe</div>
                        <div class="footer-widget-content">
                            <div class="subcribe-form fl-wrap">
                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                <form id="subscribe" class="fl-wrap">
                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
            </div>
        </div>
        <!-- footer-widget-wrap end-->
    </div>
    <div class="footer-bottom fl-wrap">
        <div class="container">
            <div class="copyright"><span>&#169; Gmag 2022</span> . All rights reserved. </div>
            <div class="to-top"> <i class="fas fa-caret-up"></i></div>
            <div class="subfooter-nav">
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->
{{-- footer end --}}
    <div class="aside-panel">
        <ul>
            <li> <a href="#"><i class="far  fa-podium"></i><span>Politics</span></a></li>
            <li> <a href="#"><i class="far fa-atom"></i><span>Technology</span></a></li>
            <li> <a href="#"><i class="far fa-user-chart"></i><span>Business</span></a></li>
            <li> <a href="#"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
            <li> <a href="#"><i class="far fa-flask"></i><span>Science</span></a></li>
        </ul>
    </div>
</div>
<!-- wrapper end -->
<!-- cookie-info-bar -->
<div class="cookie-info-bar">
    <div class="container">
        <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Our site uses cookies. Learn more about our use of cookies: <a href="#">Cookie policy</a></div>
        <a href="#" class="sicb_btn color-bg">Accept</a>
        <a href="#" class="sicb_btn">Reject</a>
    </div>
</div>
<!-- cookie-info-bar end -->
<!--register form -->
<div class="main-register-container">
    <div class="reg-overlay close-reg-form"></div>
    <div class="main-register-holder">
        <div class="main-register-wrap fl-wrap">
            <div class="main-register_bg">
                <div class="bg-wrap">
                    <div class="bg par-elem "  data-bg="{{ Vite::asset('resources/assets/images/bg/1.jpg') }}"></div>
                    <div class="overlay"></div>
                </div>
                <div class="mg_logo"><img src="{{ Vite::asset('resources/assets/images/logo2.png') }}" alt=""></div>
            </div>
            <div class="main-register tabs-act fl-wrap">
                @guest

                @if(Route::has('login') && Route::has('register'))
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                </ul>
                <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                <!--tabs -->
                <div id="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content first-tab">
                        @if (Route::has('login'))
                            <div class="custom-form">
                                <form method="POST" action="{{ route('Auth.login') }}" class="Auth-form" id="handleAjax" autocomplete="off">
                                    @csrf
                                    <div id="errorMessage" class="error error-ico" style="display:none"></div>
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" placeholder="Email Address" class="Ucemail form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autofocus>
                                    @if($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label for="password">{{ __('Password') }}</label>
                                    <input id="password" type="password" placeholder="Password" class="Ucpassword form-control @error('password') is-invalid @enderror" name="password" >
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check" checked>
                                        <label for="check-a">Remember me</label>
                                    </div>
                                    <div class="lost_password">
                                        @if (Route::has('password.request'))
                                            <a class="link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                </form>
                            </div>
                        @endif
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                @if (Route::has('register'))
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form" id="main-register-form2" autocomplete="off">
                                        @csrf
                                        <label>Full Name <span>*</span> </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Email Address <span>*</span></label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password <span>*</span></label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                    </form>
                                </div>
                                @endif

                            </div>
                        </div>
                        <!--tab end -->

                        @endif
                    </div>
                    <!--tabs end -->
                    <div class="log-separator fl-wrap"><span>or</span></div>
                    <div class="soc-log  fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                    </div>
                </div>
                 @else
                 <div id="tabs-container">
                   <div class="log-separator fl-wrap"><span>
                     <a class="dropdown-item btn btn-danger " href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="color:#fff;">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </span></div>
                    <div class="soc-log  fl-wrap">
                        <p>For faster login or register use your social account.</p>
                        <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                    </div>
                 @endguest
            </div>
        </div>
    </div>
</div>
<!--register form end -->
</div>
<script src='http://127.0.0.1:5173/resources/js/jquery.min.js'></script>
<script src='http://127.0.0.1:5173/resources/js/plugins.js'></script>
<script src='http://127.0.0.1:5173/resources/js/scripts.js'></script>
 <script type="text/javascript">
    $(document).ready(($) => {
        $('#errorMessage').hide();
        const Validemailfilter = (/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      $(document).on("submit", "#LoginProcess", function(e) {
        e.preventDefault();
        var name = $('.fullname').val();
        var email = $('.email').val();
        var password = $('.password').val();
        var uCpassword= $('.uCpassword').val();
        if (name == '') {
            $("#errorMessage").fadeIn().text("Please Provide Your FullName.");
            $(".fullname").focus();
            return false;
        }
        if (email=='') {
            $("#errorMessage").fadeIn().text("Please Enter Your Email Address.");
            $(".email").focus();
            return false;
        }else if (!Validemailfilter.test(email)) {
            $("#errorMessage").fadeIn().text("Invaid Email Address..! Please Enter A Valid Email Address.");
            $(".email").focus();
                return false;
        }
        if (password =='') {
            $("#errorMessage").fadeIn().text("Please Enter Your Password.");
            $(".password").focus();
            return false;
        }else if (password !='') {
            if (password.length < 6) {
                $("#errorMessage").fadeIn().text("The password must be at least 6 characters.");
                $(".password").focus();
                return false;
            }
        }
        if (uCpassword == '') {
            $("#errorMessage").fadeIn().text("The confirm password field is required.");
            $(".uCpassword").focus();
            return false;
        }if (password !='' && uCpassword !='') {
            if (password != uCpassword) {
                $("#errorMessage").fadeIn().text("Mismatch Password..Please Confirm Your Password.!");
                $(".uCpassword").focus();
                return false;
            }else if (name !='' && email !='' && password !='' && uCpassword !='' && password == uCpassword) {
          var e = this;
          $(this).find("[type='submit']").html("Login...");
          $.ajax({
              url: $(this).attr('action'),
              data: $(this).serialize(),
              type: "POST",
              dataType: 'json',
              success: function (data) {
                $(e).find("[type='submit']").html("Login");
                if (data.status) {
                    $("#errorMessage").fadeOut();
                    $("#errorMessage").hide();
                    $("#errorMessage").remove();
                    window.location = data.redirect;
                }else{
                    $(".alert").remove();
                    $.each(data.errors, function (key, val) {
                        $("#errorMessage").fadeIn().text(val);
                    });
                }
              }
          });
          return false;
        }
    }
    });

    //   login validation
     $(document).on("submit", "#handleAjax", function(e) {
        e.preventDefault();
        var email = $('.Ucemail').val();
        var password = $('.Ucpassword').val();
        if (email == '') {
            $("#errorMessage").fadeIn().text("Provide Your Email Address.");
            $(".Ucemail").focus();
            return false;
        }else if (!Validemailfilter.test(email)) {
            $("#errorMessage").fadeIn().text("Invaid Email Address..! Please Enter A Valid Email Address.");
            $(".email").focus();
                return false;
        }
        if (password=='') {
            $("#errorMessage").fadeIn().text("Please Enter Your Password.");
            $(".Ucpassword").focus();
            return false;
        }else if (email !='' && password !='') {
          var e = this;
          $(this).find("[type='submit']").html("Login...");
          $.ajax({
              url: $(this).attr('action'),
              data: $(this).serialize(),
              type: "POST",
              dataType: 'json',
              success: function (data) {
                $(e).find("[type='submit']").html("Login");
                if (data.status) {
                    $("#errorMessage").fadeOut();
                    $("#errorMessage").hide();
                    $("#errorMessage").remove();
                    window.location = data.redirect;
                }else{
                    $(".alert").remove();
                    $.each(data.errors, function (key, val) {
                        $("#errorMessage").fadeIn().text(val);
                    });
                }
              }
          });
          return false;
        }

      });
    });
</script>
