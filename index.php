<?php?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Lora Michelle</title>
    <meta name="description" content="Lora Michelle" />
    <meta name="author" content="Michael Sutehall"/>
    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:900&text=ABCDEFGHIJKLMNOPQRSTUVWXYZ' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .countup {
          text-align: center;
          margin-bottom: 20px;
        }
        .countup .timeel {
          display: inline-block;
          padding: 10px;
          background: #151515;
          margin: 0;
          color: white;
          min-width: 2.6rem;
          margin-left: 13px;
          border-radius: 10px 0 0 10px;
        }
        .countup span[class*="timeRef"] {
          border-radius: 0 10px 10px 0;
          margin-left: 0;
          background: #e8c152;
          color: black;
        }
    </style>
</head>
<body>    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//vjs.zencdn.net/4.3/video.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="bower_components/BigVideo/lib/bigvideo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.2.0/jquery.fittext.js"></script>
    <!-- <script type = "text/JavaScript">
        window.onload = function() {
        // Month Day, Year Hour:Minute:Second, id-of-element-container
        countUpFromTime("Dec 20, 2019 23:25:17", 'countup1'); // ****** Change this line!
        };
        function countUpFromTime(countFrom, id) {
        countFrom = new Date(countFrom).getTime();
        var now = new Date(),
            countFrom = new Date(countFrom),
            timeDifference = (now - countFrom);
            
        var secondsInADay = 60 * 60 * 1000 * 24,
            secondsInAHour = 60 * 60 * 1000;
            
        days = Math.floor(timeDifference / (secondsInADay) * 1);
        hours = Math.floor((timeDifference % (secondsInADay)) / (secondsInAHour) * 1);
        mins = Math.floor(((timeDifference % (secondsInADay)) % (secondsInAHour)) / (60 * 1000) * 1);
        secs = Math.floor((((timeDifference % (secondsInADay)) % (secondsInAHour)) % (60 * 1000)) / 1000 * 1);

        var idEl = document.getElementById(id);
        idEl.getElementsByClassName('days')[0].innerHTML = days;
        idEl.getElementsByClassName('hours')[0].innerHTML = hours;
        idEl.getElementsByClassName('minutes')[0].innerHTML = mins;
        idEl.getElementsByClassName('seconds')[0].innerHTML = secs;

        clearTimeout(countUpFromTime.interval);
        countUpFromTime.interval = setTimeout(function(){ countUpFromTime(countFrom, id); }, 1000);
        }
    </script> -->
    

    
        <script>
            $(function() {
                var BV = new $.BigVideo();
                BV.init();
                BV.show('./vids/snow_small.mp4',{doLoop:true});
            });
        </script>
    <!-- <div class="countup" id="countup1">
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
    </div> -->




    
</body>
</html>

