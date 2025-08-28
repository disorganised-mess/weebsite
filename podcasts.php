<?php
	$currentPage = 'Podcasts';
	include('include/podcastsinclude.php');
    $show = null;
    if(isset($_GET['show']) && is_dir($PODCASTS_DIR . '/' . $_GET['show'])){
        $show = $_GET['show'];
        $currentPage .= " - " . $show;
    }
	//$shows = array('dir'=>$PODCASTS_DIR, 'files'=>walk($PODCASTS_DIR));
    //$shows_str = file_get_contents($PODCASTS_SERIAL_FILE);
    $shows = get_podcasts();
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
            <h2>Podcasts </h2>
            <?php
                make_item_list($shows, $show);
            ?>
		</div>
		<?php include('include/rightbar.php'); ?>
	</div>
	<?php include('include/footer.php'); ?>
</div>
</body>
</html>
