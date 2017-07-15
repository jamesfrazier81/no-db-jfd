<?php include("includes/header.php"); ?>

<script>
	$(document).ready(function() {
	    $("#websites").lightGallery({
	        galleryId: 1
	    });
	    $("#emails").lightGallery({
	        galleryId: 2
	    });  
	});
</script>

<div class="body-wrap work inner">
	<div class="container-wrap subnav">
		<ul>
			<li><a href="#web-wordpress">Websites</a></li>
			<li><a href="#web-html">HTML Email</a></li>
		</ul>
	</div>
	<!-- Section 1 -->
	<div id="web-wordpress" class="container-wrap first">
		<div class="container column">
			<h2>Websites</h2>
			<p>These are a few of my most recent website projects.</p>
			<div id="websites" class="gallery websites">
				<a href="img/dist/work-websites-liberty-wildlife.jpg" data-sub-html="<h4>Liberty Wildlife</h4><p>WordPress - <a href='http://libertywildlife.org' target='_blank'>Visit the Site</a>.</p>">
			    	<img src="img/dist/work-websites-liberty-wildlife.jpg" />
				</a>
				<a href="img/dist/work-websites-hwht.jpg" data-sub-html="<h4>Helping Women Help Themselves</h4><p>WordPress - <a href='http://hwht.org' target='_blank'>Visit the Site</a>.</p>">
			    	<img src="img/dist/work-websites-hwht.jpg" />
				</a>
				<a href="img/dist/work-websites-natures-kloth.jpg" data-sub-html="<h4>Nature's Kloth</h4><p>WordPress - <a href='http://natureskloth.com' target='_blank'>Visit the Site</a>.</p>">
			    	<img src="img/dist/work-websites-natures-kloth.jpg" />
				</a>
			</div>
		</div>
	</div>
	<!-- Section 2 -->
	<div id="web-html" class="container-wrap second">
		<div class="container column">
			<h2>Email Templates</h2>
			<p>These are a few of my most recent email templating projects.</p>
			<div id="emails" class="gallery emails">
				<a href="img/dist/work-full-emails-amtrak.jpg" data-sub-html="<h4>Amtrak</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-amtrak.jpg" />
				</a>
				<a href="img/dist/work-full-emails-matrix.jpg" data-sub-html="<h4>Matrix Medical Network</h4><p>Static HTML template build for use in standard text editor and Constant Contact. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-matrix.jpg" />
				</a>
				<a href="img/dist/work-full-emails-exos.jpg" data-sub-html="<h4>EXOS</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-exos.jpg" />
				</a>
			</div>
		</div>
	</div>
</div>
<?php include("includes/nav.php"); ?>
<?php include("includes/footer.php"); ?>