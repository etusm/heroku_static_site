<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Lora Michelle</title>
    <meta name="description" content="Lora Michelle"/>
    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900&text=ABCDEFGHIJKLMNOPQRSTUVWXYZ' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bower_components/BigVideo/css/bigvideo.css">
    <meta name="author" content="Michael Sutehall"/>
</head>
<body>
    <div class="main">
        <!-- <div id="overview" class="box">


    </div>  -->
    <?php
    <div class="countup" id="countup1">
        <span class="timeel years">00</span>
        <span class="timeel timeRefYears">years</span>
        <span class="timeel days">00</span>
        <span class="timeel timeRefDays">days</span>
        <span class="timeel hours">00</span>
        <span class="timeel timeRefHours">hours</span>
        <span class="timeel minutes">00</span>
        <span class="timeel timeRefMinutes">minutes</span>
        <span class="timeel seconds">00</span>
        <span class="timeel timeRefSeconds">seconds</span>
    </div>
    ?>
    </div>
    </div>
    <script src="./js/count.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="//vjs.zencdn.net/4.3/video.js"></script>
    <script src="bower_components/BigVideo/lib/bigvideo.js"></script>
    <script>
	    $(function() {
            var BV = new $.BigVideo();
            var vids = [
                './vids/snow_small.mp4',
            ];
            vids.sort(function() { return 0.5 - Math.random() }); // random order on load
			BV.init();
			BV.showPlaylist(vids,{ambient:true});
	    });
    </script>
</body>
</html>