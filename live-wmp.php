<?php
	$currentPage = 'Live';
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
			<h2>Talk Radio 990 WEEB</h2>
			<?php include('include/leftlinks.php'); ?>
		</div>
		<div class="centerContent">
			<!--- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --->
            <h2>Listen to Talk Radio 990 WEEB</h2>
            <div style="font-style:italic; text-align: center;">Live from Our Sandhills Studio</div>
            <br />
            <div style="text-align: center">
                To listen, click the play button on the radio player below.
            If the play button does not appear or work, you probably need to update your Windows Media Player.</div>
<br />
            <br />
            You may also use the following 
            URL links in the player of your choice:<br />
        
            <table class="listenlivelinks">
                <tr>
                    <th>Winamp/Windows Media</th>
                    <td><a href="http://96.31.90.117:8000/weeb990.m3u">http://ice.weeb990.com:8000/weeb990.m3u</a></td>
                </tr>
                <tr>
                    <th>Real Audio</th>
                    <td><a href="http://www.weeb990.com/playlists/playlist.ram">http://www.weeb990.com/playlists/playlist.ram</a></td>
                </tr>
                <tr>
                    <th>Itunes/QuickTime</th>
                    <td><a href="http://www.weeb990.com/playlists/playlist.qt">http://www.weeb990.com/playlists/playlist.qt</a></td>
                </tr>
            </table>
            <br />
            <OBJECT ID="MediaPlayer" WIDTH="100%" HEIGHT="240"
                    CLASSID="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
                    STANDBY="Loading Windows Media Player components..."
                    TYPE="audio/mpeg" align="left">
                <PARAM NAME="FileName" VALUE="http://96.31.90.117:8000/weeb990.m3u" valuetype="ref" ref>
                <param name="AudioStream" value="1">
                <param name="AutoSize" value="0">
                <param name="AutoStart" value="0">
                <param name="AnimationAtStart" value="0">
                <param name="AllowScan" value="-1">
                <param name="AllowChangeDisplaySize" value="-1">
                <param name="BufferingTime" value="10">
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
                <EMBED TYPE="application/x-mplayer2" SRC="http://96.31.90.117:8000/weeb990.m3u"
                        NAME="MediaPlayer"
                        WIDTH="100%"
                        HEIGHT="240">                </EMBED>
            </OBJECT>
            <br style="clear:both" />
            <br />
            <br />
            <div style="text-align: center">
                <iframe src="webcam.php" class="cam"
                        scrolling="no" marginwidth="0" marginheight="0"
                        frameborder="0" vspace="0" hspace="0" height="300" 
                        width="450">                </iframe>
            </div>
            <br />
		</div>
		<?php include('include/rightbar.php'); ?>
  </div>
	<?php include('include/footer.php'); ?>
</div>
</body>
</html>
