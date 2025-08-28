<?php
	$currentPage = 'Podcasts';
	include('include/podcastsinclude.php');
	if(!isset($_GET['toplay']) || !is_file($_GET['toplay'])){
		header( 'Location: podcasts.php' );
	}
    $ia = clean_item($_GET['toplay']);
    $wmp_link = 'playpodcastwmp.php?';
    foreach($_GET as $k=>$v){
        $wmp_link .= '&' . $k . '=' . $v;
    }
    $flash_vars = array();
    $flash_vars['mp3'] = str_replace(' ', '%20', $_GET['toplay']);
    $flash_vars['showstop'] = '1';
    $flash_vars['showinfo'] = '1';
    $flash_vars['autoplay'] = '1';

    $flash_vars_tmp = array();
    foreach($flash_vars as $k=>$v){
        $flash_vars_tmp[] = "$k=$v";
    }
    $flash_vars_string = implode('&', $flash_vars_tmp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<!-- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --->
            <h2>Podcasts</h2>
            <embed src="<?php echo $_GET['toplay']; ?>" 
                    autoplay="true" 
                    controller="true" 
                    autostart="True" 
                    type="audio/mpeg" 
                    width="100%" />
            <br />
            <br />
            Download - 
            <a href="<?php echo $_GET['toplay']; ?>">
                <?php echo make_name($ia); ?>
            </a>
		</div>
		<?php include('include/rightbar.php'); ?>
	</div>
	<?php include('include/footer.php'); ?>
</div>
</body>
</html>
