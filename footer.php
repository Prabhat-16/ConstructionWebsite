<section id="great-construct-team">
		<div class="container">
			<?php
							$sql_detail = "SELECT * FROM detail_tbl";
							$rs_detail = mysqli_query($con,$sql_detail);
							if(!$rs_detail)
							{
								die('No Detail Found.'.mysqli_error($con));
							}
							$row_detail = mysqli_fetch_array($rs_detail);
					?>
			<div class="row">
				<div class="col-lg-6">
					<h2>Great Construction Company</h2>
					<p>If you have any construction and renovation work  need, simply <br>call our 24 hour emergecny number.</p>
					<p class="has-btn"><b><?php echo $row_detail['footer_no']; ?></b> or <a href="contact.php" class="hvr-bounce-to-right">Contact Us</a></p>
				</div>
			</div>
		</div>
	</section>




	<!-- footer -->
	<footer class="construct">
		<div class="container">
			<div class="row">
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
					<img class="positioned wow slideInUp " src="img/resources/footer-crane.png" alt="">
				</div> <!-- /.widget -->
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
					<h3>About Us</h3>
					<p>Prabhat Construction Company  is a premier construction firm dedicated to delivering top-tier construction solutions. With a rich history of 10 years in the industry, we pride ourselves on quality, innovation, and client satisfaction.</p>
					<a href="#" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
					<ul class="social">
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="hvr-radial-out"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div> <!-- /.widget -->
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget clearboth-tab clearboth-480">
					<h3>popular Posts</h3>
					<ul class="our-services">
						<li><a href="#">Building Construction</a></li>
						<li><a href="#">Hardwood Flooring</a></li>
						<li><a href="#">Home Renovation</a></li>
						<li><a href="#">Repairing of Roof</a></li>
						<li><a href="#">Commercial Construction</a></li>
					</ul>
				</div> <!-- /.widget -->
				<!-- .widget -->
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
				<?php
							$sql_detail = "SELECT * FROM detail_tbl";
							$rs_detail = mysqli_query($con,$sql_detail);
							if(!$rs_detail)
							{
								die('No Detail Found.'.mysqli_error($con));
							}
							$row_detail = mysqli_fetch_array($rs_detail);
					?>
					<h3>Get in Touch</h3>
					<ul class="contact-info">
						<li><i class="fa fa-map-marker"></i> <span class="text">Lorance Road 542B, Tailstoi Town <br>5248 MT, Wordwide Country</span></li>
						<li><i class="fa fa-phone"></i> <span class="text"><?php echo $row_detail['footer_no']; ?></span></li>
						<li><i class="fa fa-envelope-o"></i> <span class="text"><?php echo $row_detail['detail_email2']; ?></span></li>
						<li><i class="fa fa-globe"></i> <span class="text">http://plumberx.com</span></li>
					</ul>
				</div> <!-- /.widget -->
				
			</div>
		</div>
	</footer> <!-- /footer -->
	
	<!-- #bottom-bar -->
	<section id="bottom-bar" class="construct">
		<div class="container">
			<div class="row">
				<!-- .copyright -->
				<div class="copyright pull-left">
					<p>Copyright &copy; Prabhat Mishra 2023. All rights reserved. </p>
				</div> <!-- /.copyright -->
				<!-- .credit -->
				<!-- <div class="credit pull-right">
					<p>Created by: DesignArc</p>
				</div>  -->
			</div>
		</div> 
	</section><!-- /#bottom-bar -->


	
	<script src="js/jquery-1.11.3.min.js"></script> <!-- jQuery JS -->
	<script src="js/bootstrap.min.js"></script> <!-- BootStrap JS -->
	<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
	<script src="js/gmap.js"></script> <!-- gmap JS -->
	<script src="js/wow.js"></script> <!-- WOW JS -->
	<script src="js/isotope.pkgd.min.js"></script> <!-- iSotope JS -->
	<script src="js/owl.carousel.min.js"></script> <!-- OWL Carousle JS -->
	<script src="js/revolution-slider/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
	<script src="js/revolution-slider/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/revolution-slider/extensions/revolution.extension.video.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
	<script src="js/validate.js"></script> <!-- Form Validator JS -->
	<script src="js/jquery.easing.min.js"></script> <!-- jquery easing JS -->
	<script src="js/jquery.mixitup.min.js"></script> <!-- MixIt UP JS -->
	<script src="js/custom.js"></script> <!-- Custom JS -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function()
{
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
