<?php
	$the_hour = date('G');
	if($the_hour >= 12 && $the_hour < 13){
		$the_greeting = 'Welcome to the lunch hour with';
	} elseif($the_hour >= 13 && $the_hour < 18){
		$the_greeting = 'Good afternoon. Welcome to';
	} elseif($the_hour >= 18 && $the_hour < 24){
		$the_greeting = 'Good evening. Welcome to';
	} else{
		$the_greeting = 'Good morning. Welcome to';
	}
?>
<div class="header">
	<table class="title">
		<tr>
			<td class="microphone">
				<a href="index.php" class="homelink" style="float:left">
					<!--<img src="images/microphone_transparent_gif.gif" alt="Talk 97.3FM - 990AM WEEB serving the Sandhills Region of North Carolina for more than 50 years" width="63" height="175" hspace="0" vspace="0" border="0" longdesc="http://www.weeb990.com" />-->
				</a>
			</td>
			<td>
				<a href="index.php" class="homelink">
                    <img src="images/WEEB_Logo4.png" 
                            alt="Talk 97.3FM - 990AM WEEB is your station for the best in Talk Radio Nation wide." 
                            longdesc="http://www.weeb990.com" />
                </a>
				<br />
                <div style="float:left; width: 100%; text-align: center;">
                    <?php
                        echo date('F j, Y');
                    ?>
                </div>
			</td>
			<td class="ListenLiveCell">
				<a href="live.php">
					<img src="images/onAir.jpg" 
						alt="Listen Live" />
					<div class="listenlivetext">
						Listen LIVE Now!
					</div>
				</a>
			</td>
		</tr>
	</table>
</div>
<?php
    if(!isset($notopbr) ||
        !$notopbr){
        ?>
    <br style="clear:both;" />
    <?php
    }
?>
