<!DOCTYPE html>
<html >
<head>
    <!-- Site made with Mobirise Website Builder v4.5.4, # -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/BIOCLOUD.png" type="image/x-icon">
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

        .homepage-hero-module {
            border-right: none;
            border-left: none;
            position: relative;
        }
        .no-video .video-container video,
        .touch .video-container video {
            display: none;
        }
        .no-video .video-container .poster,
        .touch .video-container .poster {
            display: block !important;
        }
        .video-container {
            position: relative;
            bottom: 0%;
            left: 0%;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background: #000;
        }
        .video-container .poster img {
            width: 100%;
            bottom: 0;
            position: absolute;
        }
        .video-container .filter {
            z-index: 100;
            position: absolute;
            background: rgba(0, 0, 0, 0.4);
            width: 100%;
        }
        .video-container .title-container {
            z-index: 1000;
            position: absolute;
            top: 35%;
            width: 100%;
            text-align: center;
            color: #fff;
        }
        .video-container .description .inner {
            font-size: 1em;
            width: 45%;
            margin: 0 auto;
        }
        .video-container .link {
            position: absolute;
            bottom: 3em;
            width: 100%;
            text-align: center;
            z-index: 1001;
            font-size: 2em;
            color: #fff;
        }
        .video-container .link a {
            color: #fff;
        }
        .video-container video {
            position: absolute;
            z-index: 0;
            bottom: 0;
        }
        .video-container video.fillWidth {
            width: 100%;
        }
    </style>
    <!--  Video is muted & autoplays, placed after major DOM elements for performance & has an image fallback  -->
    <video autoplay loop id="video-background" muted plays-inline>
        <source src="{{ asset('biometric.mp4') }}" type="video/mp4">
    </video>
</head>
<body>

<body>




<!--  Video is muted & autoplays, placed after major DOM elements for performance & has an image fallback  -->

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
                    <a href="#">
                         <img src="assets/images/BIOCLOUD.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><img src="assets/images/BIOCLOUD-NAME.png" alt="Mobirise" title="" style="height: 3.8rem;"></span>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section>
<section  class="">


    <div class="homepage-hero-module">
        <div class="video-container">
            <div class="title-container">

                <div class="container align-right">
                    <div class="row">
                        <div class="mbr-white col-lg-8 col-md-7 content-container">
                            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">ADMIN LOGIN</h1>
                            <p class="mbr-text pb-3 mbr-fonts-style display-5">

                            </p>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="form-container">
                                <div class="media-container-column" >
                                    <div data-form-alert="" hidden="" class="align-center">
                                        Thanks for filling out the form!
                                    </div>
                                    <form class="form-horizontal" method="POST" action="adminLogin">
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
                                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

                                        </span>
                                        <span class="input-group-btn">
                                <input type="submit" class="btn btn-success btn-form display-4" value="LOGIN">
                                        </span>
                                        <span class="input-group-btn">
                                 <a class="btn btn-link" href="{{ route('password.request') }}">
                    Forgot Your Password
                </a>
                                        </span>

                                        <div class="col-md-8 col-md-offset-4">




                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="filter"></div>
            <video autoplay loop class="fillWidth">
                <source src="{{ asset('biometric.mp4') }}" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.</video>
            <div class="poster hidden">
                <img src="http://www.videojs.com/img/poster.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

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

<script>

    /** Document Ready Functions **/
    /********************************************************************/

    $( document ).ready(function() {

        // Resive video
        scaleVideoContainer();

        initBannerVideoSize('.video-container .poster img');
        initBannerVideoSize('.video-container .filter');
        initBannerVideoSize('.video-container video');

        $(window).on('resize', function() {
            scaleVideoContainer();
            scaleBannerVideoSize('.video-container .poster img');
            scaleBannerVideoSize('.video-container .filter');
            scaleBannerVideoSize('.video-container video');
        });

    });

    /** Reusable Functions **/
    /********************************************************************/

    function scaleVideoContainer() {

        var height = $(window).height();
        var unitHeight = parseInt(height) + 'px';
        $('.homepage-hero-module').css('height',unitHeight);

    }

    function initBannerVideoSize(element){

        $(element).each(function(){
            $(this).data('height', $(this).height());
            $(this).data('width', $(this).width());
        });

        scaleBannerVideoSize(element);

    }

    function scaleBannerVideoSize(element){

        var windowWidth = $(window).width(),
            windowHeight = $(window).height(),
            videoWidth,
            videoHeight;

        console.log(windowHeight);

        $(element).each(function(){
            var videoAspectRatio = $(this).data('height')/$(this).data('width'),
                windowAspectRatio = windowHeight/windowWidth;

            if (videoAspectRatio > windowAspectRatio) {
                videoWidth = windowWidth;
                videoHeight = videoWidth * videoAspectRatio;
                $(this).css({'top' : -(videoHeight - windowHeight) / 2 + 'px', 'margin-left' : 0});
            } else {
                videoHeight = windowHeight;
                videoWidth = videoHeight / videoAspectRatio;
                $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});
            }

            $(this).width(videoWidth).height(videoHeight);

            $('.homepage-hero-module .video-container video').addClass('fadeIn animated');


        });
    }

</script>
</body>
</html>