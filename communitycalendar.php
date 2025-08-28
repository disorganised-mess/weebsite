<?php
    $currentPage = 'Index';
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
        color: #006600;
    }
    .style1 {color: #009900}
    .style2 {font-size: 12px}
    .style3 {
        font-size: 18px;
    }
    .style4 {
        font-size: 18px;
        font-weight: bold;
    }
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
    -->
    </style>
</head>
<body>

<div class="outtermostFrame">
  <?php include('include/header.php'); ?>
  <div class="topFrame">
     
<!--<div class="centerContent2">
            <!--- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --->
            <h2>WEEB Studio Calendar</h2>
<center>           <br />
<iframe src="https://calendar.google.com/calendar/embed?title=Studio%20Time%20&amp;height=700&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=1rcjppe67hh8daa0fo84or8jsc%40group.calendar.google.com&amp;color=%23182C57&amp;src=2o2nmuk3j5jhqagdfvt7d81qs0%40group.calendar.google.com&amp;color=%23125A12&amp;src=5lp3p711hi2nn7m34ddodpksuc%40group.calendar.google.com&amp;color=%23853104&amp;ctz=America%2FNew_York" style="border-width:0" width="900" height="700" frameborder="0" scrolling="no"></iframe>   </center>      
          
          
          
        <p align="center" class="style3">
          <!-- END Current Events Section - Current Events belong above this line -->
           </p>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>   
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>   
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>
           </br>  
           </br>                                    
    </div>
</div>

</div>

<script type="text/javascript" charset="utf-8">
    <!-- To reset the countdown Clock change ONLY the date in the line below -->
    var passedDate = "9/07/2012 19:30";
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
