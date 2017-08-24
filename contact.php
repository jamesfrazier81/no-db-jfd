<?php
	$pageTitle = 'James Frazier Design | Contact';
	$pageDescription = 'Contact James Frazier Design for a custom quote tailored specifically for your website or HTML email project or campaign.';
	$pageCanonical = 'http://jamesfrazierdesign.com/contact.php';
	$pageRobots = 'index, follow';
	 
	// Include header file
	include("includes/header.php"); 
?>

<div class="body-wrap contact inner">
	<div class="subnav">
		<h1 class="page-title">Contact</h1>
		<ul>
			<li><a href="#connect">Connect</a></li>
			<li><a href="#payments">Payments</a></li>
		</ul>
	</div>
	<!-- Section 1 -->
	<div id="connect" class="container-wrap first">
		<div class="container column left">
			<h2>Connect</h2>
			<p>Contact James Frazier Design to get an estimate on your next project. Maybe you need a website.  Maybe it's an email campaign you need structured and built. No matter the stage of your need, I'm here to help you get the best results for the most reasonable price.</p>
			<div class="contact-form">
				<form method="post" action="contactengine.php">
					<label for="First">First Name<sup>*</sup></label>
					<input type="text" name="First" id="first" required>

					<label for="Last">Last Name<sup>*</sup></label>
					<input type="text" name="Last" id="last" required>
		
					<label for="Email">Email<sup>*</sup></label>
					<input type="email" name="Email" id="Email" required>

					<label for="Phone">Phone</label>
					<input type="text" name="Phone" id="phone">

					<label for="Organization">Organization Name</label>
					<input type="text" name="Organization" id="organization">
					
					<label for="Message">Message</label><br />
					<textarea name="Message" rows="5" cols="5" id="Message"></textarea>
					
					<!-- <div class="g-recaptcha" data-sitekey="6LfbfBQTAAAAAMgTQpM9LnAFMigFBR7H7wqU91cW"></div> -->

					<input type="submit" name="submit" value="Submit" class="btn btn-blue" />
				</form>
			</div>
		</div>
	</div>
	<!-- Section 2 -->
	<div id="payments" class="container-wrap second">
		<div class="container column left">
			<h2>Payments</h2>
			<p>Need to pay an invoice? Make an online payment securely through Paypal.</p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="L8CCQGL5LHHX8">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
		</div>
	</div>
</div>
<?php include("includes/nav.php"); ?>
<?php include("includes/footer.php"); ?>