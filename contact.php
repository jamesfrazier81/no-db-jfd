<?php
	if($_POST['submit'] == "Send")
	{
		$errorMessage = "";
		
		if(empty($_POST['firstname']))
		{
			$errorMessage .= "<li>Please enter your first name.</li>";
		}
		if(empty($_POST['lastname']))
		{
			$errorMessage .= "<li>Please enter your last name.</li>";
		}
		if(empty($_POST['email']))
		{
			$errorMessage .= "<li>Please enter your email address.</li>";
		}

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];

		// Formatted for email
		$subject = "Submission from James Frazier Design";
		$formcontent="From: $firstname $lastname \n Comments: $comments";
		$recipient = "jamesfrazier81@gmail.com";
		$subject = "Submission from James Frazier Design";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

    	mail($to,$subject,$mailheader,$mailmessage);

		if(empty($errorMessage))
		{
			$fs = fopen("submissions.csv","a");
			fwrite($fs,$lastname . ", " . $firstname . ", " . $email . ", " . $comments . "\n");
			fclose($fs);
			

			header("Location: thanks.php");
			exit();
		}
	}
?>
<?php include("includes/header.php"); ?>
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
				<form method="post" action="">
					<label for="">First Name<span class="required"><sup>*</sup></span></label>
					<input type="text" name="firstname" id="form-first">
					<label for="">Last Name:<span class="required"><sup>*</sup></span></label>
					<input type="text" name="lastname" id="form-last">
					<label for="">Email Address<span class="required"><sup>*</sup></span></label>
					<input type="email" name="email" id="form-email">
					<label for="">Comments:</label>
					<textarea name="comments" id="form-comments" rows="5" cols="25"></textarea>
					<span id="loading"></span>
					<?php
						if(!empty($errorMessage))
						{
							echo("<div class='error'><p>There was an error with your form:</p>\n");
							echo("<ul>" . $errorMessage . "</ul>\n");
							echo("</div>");
						}
					?>
					<input type="submit" name="submit" id="form-submit" value="Send" class="btn btn-blue">
					<p id="req-field-desc"><span class="required"><sup>*</sup></span> indicates a required field</p>
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