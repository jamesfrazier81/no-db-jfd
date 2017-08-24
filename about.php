<?php
	$pageTitle = 'James Frazier Design | About';
	$pageDescription = 'James Frazier Design was established in 2009 as a small business consulting, design and development resource.';
	$pageCanonical = 'http://jamesfrazierdesign.com/about.php';
	$pageRobots = 'index, follow';
	 
	// Include header file
	include("includes/header.php"); 
?>
<div class="body-wrap about inner">
	<div class="subnav">
		<h1 class="page-title">About</h1>
		<ul>
			<li><a href="#professional">Professional</a></li>
			<li><a href="#personal">Personal</a></li>
		</ul>
	</div>
	<!-- Section 1 -->
	<div id="professional" class="container-wrap first">
		<div class="container left column">
			<small>Professional</small>
			<h2>Business in the Front</h2>
			<p>Since 2009, James Frazier Design has been providing small businesses throughout Phoenix (and some in San Diego) with quality websites, email templates, brand identities (logos), illustrations and more. By day, I am a Web Developer at a trusted, talented design agency. By night, I continue making the web a better place as a freelance developer.</p>
			<div class="james-frazier-wrap">
				<img src="img/dist/james-pic-square.jpg" alt="James Frazier" class="james-frazier">
			</div>			
		</div>
	</div>
	<!-- Section 2 -->
	<div id="personal" class="container-wrap second">
		<div class="container left column">
			<small>Personal</small>
			<h2>Party in the Back</h2>
			<p>I enjoy spending time with my dogs, hiking and getting addicted to Netflix and Amazon shows. I really do love what I do and, in that fashion, I enjoy keeping up with what's going on in the web development community.</p>
			<p>Find me on <a href="https://www.instagram.com/jamesfrazier81/" target="_blank" style="white-space: nowrap;"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a> and <a href="https://www.facebook.com/jamesfrazier2.0" target="_blank" style="white-space: nowrap;"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>.
		</div>
	</div>
</div>
<?php include("includes/nav.php"); ?>
<?php include("includes/footer.php"); ?>