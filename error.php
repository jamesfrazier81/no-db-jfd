<?php
	$pageTitle = 'James Frazier Design | Error';
	$pageDescription = 'Something went wrong - please try again.';
	$pageCanonical = 'http://jamesfrazierdesign.com/error.php';
	$pageRobots = 'noindex, nofollow';
	 
	// Include header file
	include("includes/header.php"); 
?>

<div class="body-wrap error inner">
	<!-- Section 1 -->
	<div class="container-wrap first">
		<div class="container column">
			<h2>Something went wrong!</h2>
			<p>Please try filling out the form again after clearing your browser cache.</p>
			<a href="/contact.php" class="btn btn-blue">Back to Contact <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
<?php include("includes/nav.php"); ?>
<?php include("includes/footer.php"); ?>