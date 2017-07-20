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
	<div class="subnav">
		<h1 class="page-title">Work</h1>
		<ul>
			<li><a href="#web-wordpress">Websites</a></li>
			<li><a href="#web-html">HTML Email</a></li>
		</ul>
	</div>
	<!-- Section 1 -->
	<div id="web-wordpress" class="container-wrap first">
		<div class="container column">
			<h2>Websites</h2>
			<p>Samples are from recent freelance projects.</p>
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
			<p>Samples are from freelance and agency work.</p>
			<div id="emails" class="gallery emails">
				<a href="img/dist/work-full-emails-amtrak.jpg" data-sub-html="<h4>Amtrak: Corridors</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-amtrak.jpg" />
				</a>
				<a href="img/dist/work-full-emails-matrix.jpg" data-sub-html="<h4>Matrix Medical Network</h4><p>HTML template build for use in standard text editor and Constant Contact. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-matrix.jpg" />
				</a>
				<a href="img/dist/work-full-emails-exos.jpg" data-sub-html="<h4>EXOS</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-exos.jpg" />
				</a>
				<a href="img/dist/work-full-emails-ups.jpg" data-sub-html="<h4>UPS: Compass</h4><p>HTML template build for use in Silverpop. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-ups.jpg" />
				</a>
				<a href="img/dist/work-full-emails-cbs.jpg" data-sub-html="<h4>CBS Watch!</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-cbs.jpg" />
				</a>
				<a href="img/dist/work-full-emails-jck.jpg" data-sub-html="<h4>JCK</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-jck.jpg" />
				</a>
				<a href="img/dist/work-full-emails-marriott.jpg" data-sub-html="<h4>Marriott: Meetings Imagined</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-marriott.jpg" />
				</a>
				<a href="img/dist/work-full-emails-hilton.jpg" data-sub-html="<h4>The Hilton Club: Club Traveler</h4><p>HTML template build for use in text editor. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-hilton.jpg" />
				</a>
				<a href="img/dist/work-full-emails-aoa.jpg" data-sub-html="<h4>AOA: Week in Focus</h4><p>HTML template build for use in ExactTarget. Features pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-aoa.jpg" />
				</a>
				<a href="img/dist/work-full-emails-centene.jpg" data-sub-html="<h4>ambetter: Provider Report</h4><p>HTML template build for use in MailChimp. Features repeatable sections, pre-styled content blocks and fully responsive layout.</p>">
			    	<img src="img/dist/work-thumb-emails-centene.jpg" />
				</a>
			</div>
		</div>
	</div>
</div>
<?php include("includes/nav.php"); ?>
<?php include("includes/footer.php"); ?>