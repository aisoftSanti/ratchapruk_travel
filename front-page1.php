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
		<div class="slider">
			<?php wd_slider(1); ?>
		</div>
		<div class="container search_container">
			<div class="box_search">
				<div class="row">
					<div class="col s12"><h2>Flight Search</h2></div>
				</div>
				<div class="row">
					<div class="col s12">
						<!-- Switch -->
						<div class="switch">
							<label>
								One Way
								<input type="checkbox">
								<span class="lever"></span>
								Round Trip
							</label>
						</div>
					</div>
				</div>
				<form>
					<div class="row">
						<div class="input-field col s3">
							<input placeholder="Placeholder" id="from" type="text" class="validate">
							<label for="first_name">From</label>
						</div>
						<div class="input-field col s3">
							<input placeholder="Placeholder" id="to" type="text" class="validate">
							<label for="first_name">To</label>
						</div>
						<div class="input-field col s2">
							<input placeholder="Placeholder" type="date" class="datepicker">
							<label for="first_name">Depart Date</label>
						</div>
						<div class="input-field col s2">
							<input placeholder="Placeholder" type="date" class="datepicker">
							<label for="first_name">Return Date</label>
						</div>
						<div class="col s2">
							<a class="waves-effect waves-light btn"><i class="material-icons left">search</i>Search</a>
						</div>
					</div>
					<div class="row">

						<div class="input-field col s1">
							<select id="adult">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
							</select>

							<label for="adult">Adult</label>
						</div>

						<div class="input-field col s1">
							<select id="adult">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
							</select>
							<label for="first_name">Child</label>
						</div>
						<div class="input-field col s1">
							<select id="adult">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
							</select>
							<label for="first_name">Infant</label>
						</div>
						<div class="input-field col s3">
							<select id="adult">
								<option value="1" selected>Economy</option>
								<option value="2">Premium Economy</option>
								<option value="3">Business</option>
								<option value="4">First</option>

							</select>
							<label for="first_name">Class</label>
						</div>
					</div>
				</form>

			</div>
		</div>
		<div class="container">
			<div class="row promotion">
				<div class="col s6">
					<h2 class="promo-text-head">Popular Destinations</h2>
					<table class="striped">
						<thead class="promo-head">
							<tr>
								<th data-field="airline">Airline</th>
								<th data-field="airport">Airport</th>
								<th data-field="destination">Destination</th>
								<th data-field="price">Price</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col s6">
					<h2 class="promo-text-head">Hot Price</h2>
					<table class="striped">
						<thead class="promo-head">
							<tr>
								<th data-field="airline">Airline</th>
								<th data-field="airport">Airport</th>
								<th data-field="destination">Destination</th>
								<th data-field="price">Price</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
							<tr>
								<td><img style="vertical-align: middle;" src="<?php echo get_template_directory_uri(); ?>/img/thai_logo.png"></td>
								<td>BANGKOK (BKK)</td>
								<td>TOKYO (TYO)</td>
								<td><a class="price" href="#">21,700฿</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="content-area-2">
			<div class="container">
				<h2 class="package-text-head">Package Tour</h2>
				<div class="row">
					<div class="col s3">
						<div class="card small">
							<div class="card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/package1.png">
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
					<div class="col s3">
						<div class="card small">
							<div class="card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/package2.png">
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
					<div class="col s3">
						<div class="card small">
							<div class="card-image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/package3.png">
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
					<div class="col s3">
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
