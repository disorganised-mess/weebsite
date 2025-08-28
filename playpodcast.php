<?php
	$currentPage = 'Podcasts';
	include('include/podcastsinclude.php');
	if(!isset($_GET['toplay'])){ // || !is_file($_GET['toplay'])){
		header( 'Location: podcasts.php' );
	}
    $ia = clean_item($_GET['toplay']);
    $wmp_link = 'playpodcastwmp.php?';
    foreach($_GET as $k=>$v){
        $wmp_link .= '&' . $k . '=' . $v;
    }
    $flash_vars = array();
    $flash_vars['mp3'] = '/' . str_replace(' ', '%20', $_GET['toplay']);
    $flash_vars['showstop'] = '1';
    $flash_vars['showinfo'] = '1';
    $flash_vars['autoplay'] = '1';

    $flash_vars_tmp = array();
    foreach($flash_vars as $k=>$v){
        $flash_vars_tmp[] = "$k=$v";
    }
    $flash_vars_string = implode('&', $flash_vars_tmp);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include('include/head.php'); ?>
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
			<!-- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
            <h2>Podcasts</h2>
            <center>
            <audio controls id="thePodCast">
                <source src="http://ice.weeb990.com/<?php echo $flash_vars['mp3']; ?>" />
            </audio>
            </center>
            <script>
                window.onload = function(){
                        document.getElementById('thePodCast').play()
                        };
            </script>
            <!--
            <object type="application/x-shockwave-flash" 
                    data="flash/player_mp3.swf" 
                    id="flshplyr" 
                    width="100%" 
                    height="35">
                <param name="movie" 
                        value="/flash/player_mp3.swf" />
                <param name="FlashVars" 
                        id="flshplyrprms" 
                        value="<?php echo $flash_vars_string; ?>" />
            </object>
            -->
            <br />
            <span style="font-size:10px;">
                If you are experiencing difficulties hearing the audio,
                <a href="<?php echo $wmp_link; ?>">click here</a>
            </span>
            <br />
            <br />
            Download - 
            <a href="http://ice.weeb990.com/<?php echo $_GET['toplay']; ?>">
                <?php echo make_name($ia); ?>
            </a>
		</div>
		<?php include('include/rightbar.php'); ?>
	</div>
	<?php include('include/footer.php'); ?>
</div>
</body>
</html>
