<div class="rightLinks">
    <h2>Links You Can Use**</h2>
    <?php include('include/highlightlinks.php'); ?>
</div>
<!--<div class="rightad">
<h2>Advertisement</h2>
    <span>
    <?php //include('include/highlightad.php'); ?>
    </span>
</div>
-->
<!-- Beging FB stuff -->
<div class="rightad">
    <div id="fb-root"></div>
    <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--<h2>Come see us on Facebook</h2>
    <div class="fb-like-box" data-href="http://www.facebook.com/pages/WEEB/153860787965118" data-width="212" data-show-faces="false" data-stream="true" data-header="false"></div>-->
</div>
<!-- end FB Stuff -->  
<br />
<div class="rightad">
<h2>Sports Sponsor</h2>
<?php include('include/random_ad2.php'); ?>
    <img src="<?php echo get_random_ad(); ?>" />
<p>&nbsp;</p>
</div>
<br />
<div class="rightad">
    <h2>Sports Sponsor</h2>
    <?php include('include/random_ad.php'); ?>
    <img src="<?php echo get_random_ad(); ?>" />
</div>
