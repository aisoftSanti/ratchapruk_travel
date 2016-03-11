<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ratchapruk_travel
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="content-area-2">
			<div class="container">
				<h1>Hotel</h1>
				<script type="text/javascript">
					agoda_ad_client = "1497482_56441";
					agoda_ad_width = 728;
					agoda_ad_height = 90;
				</script>
				<script type="text/javascript" src="//banner.agoda.com/js/show_ads.js"></script>
			</div>
		</div>
		<div class="content-area-3">
			<div class="container">
				<h2 class="package-text-head">Hotel</h2>
				<div class="row">
					<div class="col s4">
						<div class="card small">
							<div class="card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/package4.png">
								<span class="card-title">Title</span>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
							<div class="card-action">
								<a href="#">รายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card small">
							<div class="card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/package4.png">
								<span class="card-title">Title</span>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
							<div class="card-action">
								<a href="#">รายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card small">
							<div class="card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/package4.png">
								<span class="card-title">Title</span>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
							<div class="card-action">
								<a href="#">รายละเอียดเพิ่มเติม</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
