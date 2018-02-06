<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="{{ asset('img/Biometrico-Logo-Final.jpg') }}">


    <title>Biometrico</title>

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/example.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.countdown.timer.css" type="text/css" />


    <style>
        body {
            width: 100%;
            height:100%;
            font-family: 'Open Sans', sans-serif;
            background: #092756;
            background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
            background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
        }
    </style>

    <style>
        * {
            line-height: 1.2;
            margin: 0;
        }
        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }
        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
            background-color: mediumpurple;
        }
        h1 {
            color: White;
            font-size: 2em;
            font-weight: 400;
        }
        p {
            color: whitesmoke;
            margin: 0 auto;
            width: 280px;
        }
        @media only screen and (max-width: 280px) {
            body, p {
                width: 95%;
            }
            h1 {
                font-size: 1.5em;
                margin: 0 0 0.3em;
            }
        }
        a {
            color: white;
        }
    </style>
</head>
<body  onload="CounterInit(1800)">
<center><img src="{{ asset('/img/load.gif') }}"></center>
<h1>Site is under configuration.</h1>
<br/>
<p>Our technicians are working on it, please check again in </p>

<div id="centered_di">
    <div id="counter">
        <div id="counter_item1" class="counter_item">
            <div class="front"></div>
            <div class="digit digit0"></div>
        </div>
        <div id="counter_item2" class="counter_item">
            <div class="front"></div>
            <div class="digit digit0"></div>
        </div>
        <div id="counter_item3" class="counter_item">
            <div class="front"></div>
            <div class="digit digit_colon"></div>
        </div>
        <div id="counter_item4" class="counter_item">
            <div class="front"></div>
            <div class="digit digit0"></div>
        </div>
        <div id="counter_item5" class="counter_item">
            <div class="front"></div>
            <div class="digit digit0"></div>
        </div>
    </div>
    {{--<p style="margin-top: 20px"> <a href="javascript:;" onclick="CounterInit(600); return false;">10 min</a> </p>--}}
    {{--<p> <a href="javascript:;" onclick="CounterInit(10); return false;">10 sec</a> </p>--}}
</div>

<div id="log"> </div>
<div id="log2"> </div>

<br/>
<a class="btn btn-primary" style="color: gold" href="{{ route('sites') }}">
    Go Back to sites
</a>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.timeout.interval.idle.js" type="text/javascript"></script>
<script src="js/jquery.countdown.counter.js" type="text/javascript"></script>
<script type="text/javascript">
    CounterInit();
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();



</script>


</body>
</html>