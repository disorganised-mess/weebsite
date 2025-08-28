<?php
$currentPage = 'PinecrestFootball';
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
				<div class="topBar">
					<?php include('include/toplinks.php'); ?>
				</div>
			<div class="centerContent" style="width:98.8%">
		<!--- XXXXXXXXXXXXXXXXXX SCHEDULE BEGINS HERE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX --->
				<h1><center> WIN a Sack of Subs from
				</center></h1>
				<center> <img src="images/jerseymikes.png" width="263" height="191" alt="Jersey Mike's" /></center>
				<header>
					<p>&nbsp;</p>
				</header>
				<table width="43%" border="0" cellspacing="5" cellpadding="5">
					<tr>
						<td width="15%">&nbsp;</td>
						<td colspan="2"><p>Fill out the form below to register and be entered into the drawing for a Sack of Subs for your office. </p>
						<p>**Note: ALL fields must be filled </p></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td width="76%">
						<form action="email.php" method="post">
							<div>
								<div class="row half">
									<div class="6u">
										<input type="text" class="text" name="businessname" placeholder="Business Name" />
									</div>
									<br />
									<div class="6u">
										<input type="text" class="text" name="contactname" placeholder="Contact Name" />
									</div>
								</div>
								<br />
								<div class="row half">
									<div class="12u">
										<input type="tel" class="text" name="businessphone" placeholder="Business Phone" pattern="\d{10}" title="Enter a 10-digit phone number (numbers only)" required />
									</div>
								</div>
								<br />
								<div class="row half">
									<div class="12u">
										<input type="text" class="text" name="email" placeholder="Email" />
									</div>
								</div>
								<br />
								<div class="row half">
									<div class="12u">
										<input type="text" class="text" name="businessaddress" placeholder="Street Address" />
									</div>
								</div>
								<br />
								<div class="row half">
									<div class="12u">
										<input type="text" class="text" name="businesscity" placeholder="City" />
									</div>
								</div>
								<br />
								<div class="row">
									<div class="12u">
										<input type="submit" class="button" value="Send Message" />
									</div>
									<br />
									<div class="12u">
										<input name="Reset" type="reset" class="button" value="Clear Form" />
									</div>
								</div>
							</div>
						</form>
					</td>
					<td width="9%">&nbsp;</td>
					</tr>
				</table>
				</div>
			</div>
		</div>
	</body>
</html>
