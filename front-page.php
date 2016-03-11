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

<div id="primary" class="content-area first-page">
	<main id="main" class="site-main" role="main">
		<div class="slider">
			<?php wd_slider(1); ?>
		</div>
		<div class="container search_container">
			<div class="box_search">
				<div class="row">
					<div class="col s12"><h2>Flight Search</h2></div>
				</div>
				<!--Start SearchBox -->
				<form name="AirSearchForm" method="post" action="http://www3.plusibe.com/IBESTDWebTH/SearchWaiting.aspx?SC=BKKOK27Z6" target="_top">
					<input type="hidden" name="LANG" value="en">
					<input type="hidden" name="FLOW_NAME" value="AIRSEARCH">
					<input type="hidden" name="SEARCHTYPE" value="1">
					<input type="hidden" name="TODAY" value="">
					<input type="hidden" name="TODAYADD9MONTH" value="30/11/2016 ">
					<input type="hidden" name="START_DEPART_DATE" value="03/03/2016 ">
					<input type="hidden" name="AN_OPTIONINFO_1" value="SEV">
					<input type="hidden" name="AN_OPTIONINFO_2" value="FLO,OL">
					<input type="hidden" name="AN_OPTIONINFO_3" value="">
					<input type="hidden" name="FQD_FARETYPE1" value="">
					<input type="hidden" name="FQD_FARETYPE2" value="">
					<input type="hidden" name="FQD_FARETYPE3" value="">
					<input type="hidden" name="FQD_EXPANDEDPARAM1" value="NDA">
					<input type="hidden" name="FQD_EXPANDEDPARAM2" value="">
					<input type="hidden" name="FQD_EXPANDEDPARAM3" value="">
					<input type="hidden" name="FQD_PRICINGTICKETINGINDICATOR" value="RU,RP">
					<input type="hidden" name="PNR_AGENTREMARK" value="">
					<input type="hidden" name="RBD" value="">
					<input type="hidden" name="SEARCHMETHOD" value="12">
					<input type="hidden" name="corp_login" value="Ratchapruek">
					<input type="hidden" name="corp_agency_code" value="BKKOK27Z6">
					<input type="hidden" name="corp_security_code" value="BKKOK27Z6">
					<input type="hidden" name="corp_group_code" value="B2C">
					<input type="hidden" name="corp_flow" value="2">
					<input type="hidden" name="MASTER_NoOfRecommendation" value="200">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="150px">
											<input name="TYPEOFTRIP" id="TYPEOFTRIP_R" type="radio" value="R" onClick="TYPEOFTRIP_onClick('R');"
											checked>
											&nbsp;<label for="TYPEOFTRIP_R" class="cssflight">Round Trip</label>
										</td>
										<td>
											<input name="TYPEOFTRIP" id="TYPEOFTRIP_O" type="radio" value="O" onClick="TYPEOFTRIP_onClick('O');">&nbsp;
											&nbsp;<label for="TYPEOFTRIP_O" class="cssflight">Oneway</label>
										</td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td class="cssflight">From</td>
										<td class="cssflight">To</td>
										<td class="cssflight">Departure Date</td>
										<td class="cssflight">Return Date</td>
										<td></td>
									</tr>
								</table>
							</td>
						</tr>

						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td>
											<div id="myAutoCompleteDEPARTCITY">
												<input type="text" class="cssflighttextbox" name="DEPARTCITY" id="DEPARTCITY" value="Bangkok [BKK] - Thailand" />
												<div id="myContainerDEPARTCITY">
												</div>
											</div>
										</td>
										<td>
											<div id="myAutoCompleteRETURNCITY">
												<input type="text" class="cssflighttextbox" name="RETURNCITY" id="RETURNCITY" value="" />
												<div id="myContainerRETURNCITY">
												</div>
											</div>
										</td>
										<td>
											<a href="javascript:void(0);" onClick="$('#DEPARTDATE').focus()">
												<input type="text" class="cssflightcarlendar" name="DEPARTDATE" id="DEPARTDATE" value="" />
											</a>
										</td>
										<td id="tbReturnDate_input">
											<a href="javascript:void(0);" onClick="$('#RETURNDATE').focus()">
												<input type="text" class="cssflightcarlendar" name="RETURNDATE" id="RETURNDATE" value="" />
											</a>
										</td>
										<td>&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td>
								<table width="50%" border="0" cellspacing="0" cellpadding="0">
									<tr><td><select id="ADULTS" name="ADULTS" onChange="ADULTS_setOptions(this.form, this.form.ADULTS, this.form.CHILDS, this.form.INFANTS);">
										<option value="1" selected="">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">9</option>
									</select></td>

									<td><select id="CHILDS" name="CHILDS">
										<option value="0" selected="">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select></td>
									<td><select id="INFANTS" name="INFANTS">
										<option value="0" selected="">0</option>
										<option value="1">1</option>
									</select></td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								</tr>
							</table>
						</td></tr>

						<tr><td>

						</td></tr>
					</table>
				</form>
			</div><!-- .box_search -->
		</div><!-- .search_container -->
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

						<tbody class="promo-table">

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
