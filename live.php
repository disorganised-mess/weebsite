<?php
	$currentPage = 'Live';
	header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include('include/head.php'); ?>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: x-large;
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
			<!--- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --->
            <h2>Listen to Talk 97.3FM and 990AM WEEB</h2>
            <div style="font-style:italic; text-align: center;">Live from Our Sandhills Studio</div>
            <br />
            <div style="text-align: center">
              <p>To listen, click the play button on the radio player below.
            If the play button does not appear or work, you probably need to update your Windows Media Player.</p>
            </div>
          <h5>The Chris Plante Show does not allow network commercials to be streamed(due to a union issue with the network). During those commercials you will hear silence (3 minutes around 20 past the hour, and 2 minutes around 50 past the hour). The stream will automatically continue when the network commercials end.<br>
          You may also use the following              URL links in the player of your choice:<br>
          </h5>
            <table width="532" height="100" class="listenlivelinks">
                <tr>
                    <th><p>Winamp</p></th>
                    <td><p>http://www.weeb990.com/playlists/playlist.pls</p></td>
              </tr>
                <tr>
                    <th><p>Real Audio</p></th>
                    <td><p>http://www.weeb990.com/playlists/playlist.ram</p></td>
                </tr>
                <tr>
                    <th><p>Windows Media</p></th>
                    <td><p>http://www.weeb990.com/playlists/playlist.asx</p></td>
                </tr>
                <tr>
                    <th><p>Itunes/QuickTime</p></th>
                    <td><p>http://www.weeb990.com/playlists/playlist.qt</p></td>
                </tr>
          </table>
            <br/>
            <p align="center">From your mobile device, tap the button corresponding to your device to install Tunein.</p>
            <p align="center">Search for WEEB  and add to your favorites list to have easy access to our live stream.</p>
            <table width="51%" border="0" align="center">
                <tr>
                  <th align="center">&nbsp;</th>
                  <td><div align="center"><strong>Android</strong></div></td>
                  <td><div align="center"><strong>iPad/iPhone</strong></div></td>
                  <td>&nbsp;</td>
                <tr>
                <th width="9%">&nbsp;</th>
                <td width="33%" align="center"><a href="//play.google.com/store/apps/details?id=tunein.player">
  <img
       src="//developer.android.com/images/brand/en_app_rgb_wo_45.png" alt="Android app on Google Play" border="0" />
</a></td>
                <td width="27%" align="center"><a href="//itunes.apple.com/us/app/tunein-radio-listen-to-live/id418987775?mt=8&uo=4" target="itunes_store"><img src="//r.mzstatic.com/images/web/linkmaker/badge_appstore-lrg.gif" alt="TuneIn Radio : Listen to live music, news, talk, sports, and podcasts from around the world - TuneIn" border="0" style="border: 0;"/></a></td>
                <td width="31%">&nbsp;</td>
			</table>

<br />
            <!-- <OBJECT ID="MediaPlayer" WIDTH="100%" HEIGHT="240"
                    CLASSID="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
                    STANDBY="Loading Windows Media Player components..."
                    TYPE="audio/mpeg" align="left">
                <PARAM NAME="FileName" VALUE="http://www.weeb990.com/playlists/playlist.asx" valuetype="ref" ref>
                <param name="AudioStream" value="1">
                <param name="AutoSize" value="0">
                <param name="AutoStart" value="0">
                <param name="AnimationAtStart" value="0">
                <param name="AllowScan" value="-1">
                <param name="AllowChangeDisplaySize" value="-1">
                <param name="BufferingTime" value="30">
                <param name="CaptioningID" value>
                <param name="ClickToPlay" value="-1">
                <param name="CursorType" value="0">
                <param name="CurrentPosition" value="-1">
                <param name="CurrentMarker" value="0">
                <param name="DefaultFrame" value>
                <param name="DisplayBackColor" value="0">
                <param name="DisplayForeColor" value="16777215">
                <param name="DisplayMode" value="1">
                <param name="DisplaySize" value="1">
                <param name="Enabled" value="-1">
                <param name="Rate" value="1">
                <param name="SAMILang" value>
                <param name="SAMIStyle" value>
                <param name="SAMIFileName" value>
                <param name="SelectionStart" value="-1">
                <param name="SelectionEnd" value="-1">
                <param name="SendOpenStateChangeEvents" value="-1">
                <param name="SendWarningEvents" value="-1">
                <param name="SendErrorEvents" value="-1">
                <param name="SendKeyboardEvents" value="0">
                <param name="SendMouseClickEvents" value="0">
                <param name="SendMouseMoveEvents" value="0">
                <param name="SendPlayStateChangeEvents" value="-1">
                <param name="ShowCaptioning" value="-1">
                <param name="ShowControls" value="-1">
                <param name="ShowAudioControls" value="-1">
                <param name="ShowDisplay" value="-1">
                <param name="ShowGotoBar" value="0">
                <param name="ShowPositionControls" value="0">
                <param name="ShowStatusBar" value="-1">
                <param name="ShowTracker" value="-1">
                <param name="TransparentAtStart" value="0">
                <param name="VideoBorderWidth" value="0">
                <param name="VideoBorderColor" value="333333">
                <param name="VideoBorder3D" value="-1">
                <param name="Volume" value="-1">
                <param name="WindowlessVideo" value="-1">
                <EMBED TYPE="application/x-mplayer2" SRC="http://www.weeb990.com/playlists/playlist.asx"
                        NAME="MediaPlayer"
                        WIDTH="100%"
                        HEIGHT="240">                </EMBED>
            </OBJECT> -->
            <!-- BEGINS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <div style="text-align: center; width: 350px; margin: auto;">
            <h3><a href="http://ice.weeb990.com:8000/weeb990" target="_blank">Click here to open the stream in a new tab</a></h3>
            <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
<script type="text/javascript">
MRP.insert({
'url':'http://ice.weeb990.com:8000/weeb990;',
'lang':'en',
'codec':'mp3',
'volume':100,
'autoplay':true,
'forceHTML5':true,
'jsevents':true,
'buffering':0,
'title':'WEEB 990',
'wmode':'transparent',
'skin':'original',
'width':329,
'height':21
});
</script>
<!-- <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script> -->
<!-- <script type="text/javascript">
MRP.insert({
'url':'https://weeb.adamslegacy.software/weeb990',
'lang':'en',
'codec':'mp3',
'volume':100,
'autoplay':true,
'forceHTML5':true,
'jsevents':true,
'buffering':0,
'title':'WEEB 990',
'wmode':'transparent',
'skin':'original',
'width':329,
'height':21
});
</script> -->
            <!-- <video controls autoplay>
              <source src="https://weeb.adamslegacy.software/weeb990" type="audio/mpeg" />
            </video>
            <br style="clear:both" /> -->
			</div>
<!-- ENDS: AUTO-GENERATED MUSES RADIO PLAYER CODE -->
            <br />
            <br />
            <div style="text-align: center">
              <!--  <iframe src="webcam.php" class="cam"
                        scrolling="no" marginwidth="0" marginheight="0"
                        frameborder="0" vspace="0" hspace="0" height="300" 
                        width="450">                </iframe>-->
                 <!-- <iframe src="http://www.ustream.tv/embed/12559188" width="400" height="296" scrolling="no" frameborder="0" style="border: 0px none transparent;"></iframe><br /><a href="http://www.ustream.tv/" style="padding: 2px 0px 4px; width: 400px; background: #ffffff; display: block; color: #000000; font-weight: normal; font-size: 10px; text-decoration: underline; text-align: center;" target="_blank">Live Video streaming by Ustream</a> -->
            </div>
            <br />
		</div>
		<?php include('include/rightbar.php'); ?>
  </div>
	<?php include('include/footer.php'); ?>
</div>
</body>
</html>
