<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/plugins.css'])
    @vite(['resources/css/style.css'])
    @vite(['resources/css/color.css'])

    <style>
        .error{background: #FAE8E8;border: 1px solid #DAB3B6;padding: 10px;border-radius: 5px;margin:0 auto;width:auto;height: auto;color: #333;display: block; font-size: 15px;}
        .error-ico{padding-left:70px;background: url(http://localhost/Student/public/assets/bullet_error.png) #FAE8E8 no-repeat 30px center;}
    </style>
</head>
<body>
<!-- main start  -->
<div id="main">
    <!-- progress-bar  -->
    <div class="progress-bar-wrap">
        <div class="progress-bar color-bg"></div>
    </div>
    <!-- progress-bar end -->
    <!-- header -->
    <header class="main-header">
        <!-- top bar -->
        <div class="top-bar fl-wrap">
            <div class="container">
                <div class="date-holder">
                    <span class="date_num"></span>
                    <span class="date_mounth"></span>
                    <span class="date_year"></span>
                </div>
                <div class="header_news-ticker-wrap">
                    <div class="hnt_title">Hot News :</div>
                    <div class="header_news-ticker fl-wrap">
                        <ul>
                            <li><a href="post-single.html">They chose to leave rather than put up with a governor who follows science .</a></li>
                            <li><a href="post-single.html">Hold On to Your Travel Dreams in the World.</a></li>
                            <li><a href="post-single.html">White  endorses bill that would ensure abortion access.</a></li>
                            <li><a href="post-single.html">NFL Power Rankings 2021: How all 32 teams stack up after Week 2.</a></li>
                        </ul>
                    </div>
                    <div class="n_contr-wrap">
                        <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                        <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                    </div>
                </div>
                <ul class="topbar-social">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
