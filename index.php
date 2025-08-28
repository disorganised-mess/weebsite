<?php $currentPage = 'Index';
    include('hitcounter.php');
    addHitToFileWithCookie('index_hit.php', 'index_hit_cookie');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <?php include('include/head.php'); ?>
    <style type="text/css">
    <!--
    body,td,th {
    color: #000;
    }
    .style2 {font-size: 12px}
    #countdown-wrapper {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        width: 98%;
        color:#000;
    }
    #countdown {
        text-align: left;
        width: 395px;
        margin: auto;
    }
    #timerTitle {
        margin-bottom:20px;
    }
    .counter-block {
        background-image: -webkit-gradient(
            linear,
            left bottom,
            left top,
            color-stop(0.04,rgb(0,0,0)),
            color-stop(0.52,rgb(54,54,54)),
            color-stop(0.76,rgb(82,82,82))
            );
        background-image: -moz-linear-gradient(
            center bottom,
            rgb(0,0,0) 4%,
            rgb(54,54,54) 52%,
            rgb(82,82,82) 76%
            );  -webkit-border-radius:8px;
        -moz-border-radius: 8px;
        border-radius: 8px;
        font-size: 46px;
        color: #009900;
        height: 80px;
        width: 90px;
        margin: 0 6px 0 0;
        float: left;
        font-family: helvetica,arial,sans-serif;
        font-weight: bold;
        border: 1px solid #000000;
        padding: 0;
        line-height: 48px;
        text-shadow: #000000 1px 1px 2px;}
    .counter-block-inner {
        line-height: 48px;
        padding: 0;
        text-align: center;
        margin-top: 20px;
    }
    .counter-block-type {
        color: #666666;
        font-size: 20px;
        margin-left: -8px;
    }
    .expired {
        text-align: center;
    }
.style6 {
    font-size: larger;
    font-weight: bold;
}
.outtermostFrame .topFrame .centerContent table tr td {
	text-align: center;
	font-size: 16px;
}
.outtermostFrame .topFrame .centerContent table tr td p {
	text-align: left;
}
.outtermostFrame .topFrame .centerContent table {
	text-align: center;
}
.outtermostFrame .topFrame .centerContent table tr td h3 {
	font-style: normal;
}
h3 {
	font-style: italic;
}
    -->
    </style>
    </head>

<body>

        <div class="outtermostFrame">
            <?php include('include/header.php'); ?>
            <div class="topFrame">
                <div class="leftBar">
                    <h2>TALK 97.3FM - 990AM WEEB</h2>
                    <?php include('include/leftlinks.php'); ?>
                </div>
            <div class="centerContent">
            <!--- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

                <!-- <h2>Erick Erickson Promotion</h2>
                <center><h1><a href="https://ticketmesandhills.com/events/erick-erickson-5-9-2025">Meet and Greet with Erick Erickson Ticket Me</a></h1>
                <h1>Click on the link above to get your tickets for a Meet and Greet with Host Erick Erickson heard on WEEB990AM.</h1>
                <h1>Friday, May 09, 2025 from 5:00 to 7:00 PM</h1>
                </center>
                </br> -->

      <h2>Check Out The Talk  97.3FM - 990AM WEEB Team. </h2>
            <h1 style="text-align: center;"> <a href="https://www.youtube.com/channel/UCnj8IbWs0i2zIupEL-ZSQXA" target="_blank">Watch  Live and Replay Video of Mornings with the Leaderman</a></h1></br>
                <!-- <h3><center>From all of us here, to all of our great listeners,</center></h3>
                <h1><center><strong>Happy Thanksgiving!</strong></center></h1> -->

                <?php include('include/fadeshow.php'); ?>
                <h3></h3>

                <h3 style="text-align: center;">&nbsp;</h3>
                <p></p>
                <center></center>
                <p></p>
                <center>
                    <h1 style="text-align: center;"><u>Hurricane Helene Relief Info</u></h1>
                    <h3><a href="https://always.exploreasheville.com/always-asheville-fund" target=_blank">Always Asheville Fund</a></h3>
                    <h3><a href="https://nc211.org/news/" target="_blank">United Way’s NC 211</a></h3>
                </center>
                <center>
                    <!-- <a href="http://www.adamstechnologysolutions.com/"><img src="/images/ats_logo.png" alt="Adams Technology Solutions" longdesc="Adams Technology Solutions" height="87" width="376" /></a> --><br />
                </center>
                <p></p>
                <center>
                  <p>&nbsp;</p>
                  
                    <p><a href="http://reliveitremodeling.com/">
                        <img src="/images/ReLiveIt.png" alt="First Health Fitness" longdesc="ReLiveIt Remodeling" height="185" width="375" /></a><br />
                        <a href="tel:910-690-2946">(910) 690-2946</a>
                  </p>
                    
                    </br>
                    </br>
                    
                  <p><img src="images/Keith Hardware Logo.jpg" width="395" height="205" alt="Keith Hardware" longdesc="https://www.keithhardwarenc.com/" /></p>
              </center>
<!--

                <h2>Countdown to Duke Sports</h2>
                 <!--Start countdown clock -->
             <!-- <div id="countdown"></div>  -->
                 <!--End countdown clock JavaScript is at the bottom of the page -->
                <p></br></p><!--These 3 must be here for alignment-->
                <p></br></p>
                <p></br></p>
               <table border="0" cellpadding="3" cellspacing="3" style="margin: auto;">
                  <tr style="text-align: center">
                    <td width="556"><h3 id="timerTitle2">Listen to Duke Football &amp; Basketball on WEEB</h3>
                      <h5>Pre game show begins one hour before tipoff</h5>
                      <br />
                      <h3><a href="https://goduke.com/sports/mens-basketball/schedule" target="_blank">Click here to see the full Duke Basketball Schedule</a></h3>
                      <h3>&nbsp;</h3>
                      <h3><a href="https://goduke.com/sports/football/schedule" target="_blank">Click here to see the full Duke Football Schedule</a></h3>
                    
                    <p>&nbsp;</p>
                    <p><center>Listen to Duke Sports on our airwaves at <br />
                      97.3 FM or 104.1FM or 990AM </center></p>
                    <p>&nbsp;</p></td>
                  </tr>

              </table>
             

<p>&nbsp;</p>
              <p>&nbsp;</p>
                <p><br />
                </p>
                <!-- <h2>Listen on your Mobile Device </h2>
                <p align="center">From your mobile device, tap the button corresponding to your device to install TuneIn.</p>
                <p align="center">Search for WEEB 990 and add to your favorites list to have easy access to our live stream.</p>
                <table align="center" border="0" width="51%">
                    <tbody>
                        <tr>
                            <th align="center">&nbsp;</th>
                                <td><div align="center"><strong>Android</strong></div></td>
                                <td><div align="center"><strong>iPad/iPhone</strong></div></td>
                                <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th width="9%">&nbsp;</th>
                                <td align="center" width="33%"><a href="http://play.google.com/store/apps/details?id=tunein.player" target="_blank">
                                    <img src="http://developer.android.com/images/brand/en_app_rgb_wo_45.png" alt="Android app on Google Play" border="0" />
                                    </a>
                                </td>
                                <td align="center" width="27%"><a href="https://itunes.apple.com/us/app/tunein-radio-listen-to-live/id418987775?mt=8&amp;uo=4" target="itunes_store"><img src="http://r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="TuneIn Radio : Listen to live music, news, talk, sports, and podcasts from around the world - TuneIn" style="border: 0pt none ;" border="0" /></a>
                                </td>
                                <td width="31%">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <br /> -->
            </div>       
                <span class="style2">
                    <?php include('include/rightbar.php'); ?>
                </span>
            </div>
        <span class="style2">
        <?php include('include/footer.php'); ?>
        </span></div>

<script type="text/javascript" charset="utf-8">
            <!-- To reset the countdown Clock change ONLY the date in the line below -->
            var passedDate = "2/11/2023 16:00";
            var expireMessage = "";
            eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('u(E);j u(v){c w=k l(k l(v)-k l());c x=y.z(w.F()/G);n("e",x)}j b(8,A,B){s=((y.z(8/A))%B).I();C(s.J<2){s="0"+s}K(s)}j n(L,8){c 3;c o="<4 5=\'6-7\'><4 5=\'6-7-f\'>%%D%% <9 5=\'6-7-i\'>d</9></4></4> <4 5=\'6-7\'><4 5=\'6-7-f\'>%%H%% <9 5=\'6-7-i\'>h</9></4></4> <4 5=\'6-7\'><4 5=\'6-7-f\'>%%M%% <9 5=\'6-7-i\'>m</9></4></4> <4 5=\'6-7\'><4 5=\'6-7-f\'>%%S%% <9 5=\'6-7-i\'>s</9></4></4>";3=o.a(/%%D%%/g,b(8,N,O));3=3.a(/%%H%%/g,b(8,P,Q));3=3.a(/%%M%%/g,b(8,p,p));3=3.a(/%%S%%/g,b(8,1,p));C(8>0){q.r("e").t=3;R("n(\'"+"e"+"\',"+(8-1)+");",T)}U{3=o.a(/%%D%%/g,0);3=3.a(/%%H%%/g,0);3=3.a(/%%M%%/g,0);3=3.a(/%%S%%/g,0);q.r("e").t=3;q.r("V-W").t=X}}',60,60,'|||CountDown|div|class|counter|block|seconds|span|replace|RunCounter|var||countdown|inner|||type|function|new|Date||BackTick|CounterFormat|60|document|getElementById||innerHTML|StartCount|SelectedDateTime|startVsEnd|diffseconds|Math|floor|first|second|if||passedDate|valueOf|1000||toString|length|return|counterDiv||86400|100000|3600|24|setTimeout||990|else|timer|title|expireMessage'.split('|'),0,{}))
            // Video Report Player
        // jwplayer("videoTarget").setup({
        //         flashplayer: "/flash/player.swf",
        //         file: "/Movies/6-Pinecrest.flv",
        //          image: "/images/WEEB_Logo_transparent_blue.png",
        //          width: '450',
        //           height: '290'
        //       });
        </script>
    </body>
</html>
