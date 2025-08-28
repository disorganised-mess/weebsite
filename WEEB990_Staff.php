<?php
	$currentPage = 'Staff';
    include('pagedata/staff.php');
    ob_start();
?>
<h2>Our Staff at 97.3FM & 990AM WEEB</h2>
<?php
    foreach($staff as $k => $v){
?>
    <div class="staffMember">
        <div class="staffPicture">
            <img src="<?php echo $v['img_url']; ?>" />
        </div>
        <div class="staffTitle">
             <?php echo $v['title']; ?>
        </div>
        <br />
        <div class="staffName">
            <a href="<?php echo $v['href']; ?>">
                <?php echo $v['display']; ?>
            </a>
        </div>
        <div class="staffContactDetails">
            <a href="<?php echo $v['mailto:']; ?>">
        </div>
    </div>
<?php
    }
    $content = ob_get_clean();
    include('generated_page.php');
?>
