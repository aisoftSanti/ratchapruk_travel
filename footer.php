<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ratchapruk_travel
 */

?>

</div><!-- #content -->

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col s4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/tat_logo.png">
				<p class="tat-text">tourism authority of thailand<br><span>License No. 11/06733</span></p>
			</div>
			<div class="col s4">
				<h2 class="footer-head">Information</h2>
				<p>
					<div><a class="footer-head" href="#">-โปรดอ่านก่อนโทรหาเรา</a></div>
					<div><a class="footer-head" href="#">-คู่มือ วิธีการจองตั๋วออนไลน์</a></div>
					<div><a class="footer-head" href="#">-รับตั๋วได้ที่ไหน ?</a></div>
					<div><a class="footer-head" href="#">-การชำระเงินผ่านบัตรเครดิต</a></div>
					<div><a class="footer-head" href="#">-การชำระเงินผ่านการโอนเงิน</a></div>
					<div><a class="footer-head" href="#">-ประกันการเดินทาง</a></div>
					<div><a class="footer-head" href="#">-การจองโรงแรม</a></div>
				</p>


			</div>
			<div class="col s4">
				<h2 class="footer-head">Contact Us</h2>
				<p class="footer-head">
					215/35 ซ.สาธุประดิษฐ์ 15 ถ.สาธุประดิษฐ์  ช่องนนทรี ยานนาวา กทม. 10120
				</p>


				<div class="address-text"><i class="fa fa-phone"></i>02-2120748, 02-2125475, 02-2125478</div>
				<div class="address-text"><i class="fa fa-fax"></i>02-2110280 </div>
				<div class="address-text"><i class="fa fa-envelope"></i>sales@ratchapruektravel.com</div>
				<div class="address-text"><i class="fa fa-comment"></i>traveler66</div>
				<div class="address-text"><i class="fa fa-facebook-square"></i>Ratchapruek Travel</div>

			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© <?php echo date('Y'); ?> Ratchapruek Travel
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/materialize.min.js"></script>
<script type="text/javascript">
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});
	$(document).ready(function() {
		$('select').material_select();
	});
	$(document).ready(function(){
		$('meta[name="viewport"]').prop('content', 'width=1440');
	});
</script>
</body>
</html>
