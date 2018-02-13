<!DOCTYPE html>
<html >
<head>
    <!-- Site made with Mobirise Website Builder v4.5.4, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/biometrico-logo-final-1417x1417.jpg" type="image/x-icon">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <style>


        body {
            margin: 0;
            padding: 0;
            /*  Background fallback in case of IE8 & down, or in case video doens't load, such as with slower connections  */
            background: #333;
            background-attachment: fixed;
            background-size: cover;
        }
        /* The only rule that matters */
        #video-background {
            /*  making the video fullscreen  */
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
        }
        </style>
    <!--  Video is muted & autoplays, placed after major DOM elements for performance & has an image fallback  -->
    <video autoplay loop id="video-background" muted plays-inline>
        <source src="{{ asset('biometric.mp4') }}" type="video/mp4">
    </video>
</head>
<body>
<section class="menu cid-qJxuiLW8sO" once="menu" id="menu1-9">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobirise.com">
                         <img src="assets/images/biometrico-logo-final-1417x1417.jpg" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="https://mobirise.com">BIO CLOUD&nbsp;</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                       Home</a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">

                        Services
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="page1.html">Register</a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">
                    </a></li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com">
                    </a></li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com"><span class="mbrib-cash mbr-iconfont mbr-iconfont-btn"></span>
                        Pricing &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="https://mobirise.com">

                    Try It Now!
                </a>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/k">bootstrap template</a></section><section class="cid-qJxsmVwJbm mbr-fullscreen" data-bg-video="https://www.youtube.com/watch?v=g5_DiXLbBfk" id="header15-4">



    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
        <div class="row">
            <div class="mbr-white col-lg-8 col-md-7 content-container">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">BIO CLOUD</h1>
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
Some Description
                </p>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="form-container">
                    <div class="media-container-column" >
                        <div data-form-alert="" hidden="" class="align-center">
                            Thanks for filling out the form!
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div data-for="name">
                                <div class="form-group">
                                    <input type="text" class="form-control px-3" name="email"  placeholder="UserName" required="">
                                </div>
                            </div>
                            <div data-for="email">
                                <div class="form-group">
                                    <input type="password" class="form-control px-3" name="password"  placeholder="Password" required="" >
                                </div>
                            </div>

                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-success btn-form display-4" value="LOGIN"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features1 cid-qJxt2qy3IW" id="features1-6">




    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Shaka Bussiness</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Shaka Bussi nessis an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbri-touch mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Shaka Clocking</h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Shaka Clockingyou make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbri-responsive mbr-iconfont"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Sabre&nbsp;</h4>
                    <p class="mbr-text mbr-fonts-style display-7">&nbsp;Sabre offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                    </p>
                </div>
            </div>



        </div>

    </div>

</section>

<section class="cid-qJxteULEyR" id="footer2-7">





    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Address</strong>
                    <br>
                    <br>1234 Street Name
                    <br>City, AA 99999
                    <br>
                    <br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: support@mobirise.com
                    <br>Phone: +1 (0) 000 0000 001
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Links</strong>
                    <br>
                    <br><a class="text-primary" href="https://mobirise.com/">Website builder</a>
                    <br><a class="text-primary" href="https://mobirise.com/mobirise-free-win.zip">Download for Windows</a>
                    <br><a class="text-primary" href="https: //mobirise.com/mobirise-free-mac.zip">Download for Mac</a>
                    <br>
                    <br><strong>Feedback</strong>
                    <br>
                    <br>Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2017 Mobirise - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>


</body>
</html>