<?php
include_once('header.php');

if (isset($_GET['services'])) 
{
	$get_service_detail = "SELECT * FROM service_tbl WHERE service_type = '" . str_replace("-", " ", $_GET['services']) . "'";

	$rs_service_detail = mysqli_query($con, $get_service_detail);
	if (!$rs_service_detail) 
	{
		die('service not Found.' . mysqli_error($con));
	}
	$row_service_detail = mysqli_fetch_array($rs_service_detail);
	} 
		else 
	{
	$get_service_detail = "SELECT * FROM service_tbl ORDER BY service_id DESC LIMIT 1";

	$rs_service_detail = mysqli_query($con, $get_service_detail);
	if (!$rs_service_detail) 
	{
		die('service not Found.' . mysqli_error($con));
	}
	$row_service_detail = mysqli_fetch_array($rs_service_detail);
}

$services_desc = strip_tags($row_service_detail['description']);
$str_services_type = str_replace(" ", "-", $row_service_detail['service_type']);
?>
<section class="rev_slider_wrapper construct-banner-wrapper">
	<div id="slider1" class="rev_slider" data-version="5.0">
		<ul>
			<?php
			$sql_slider = "SELECT * FROM slider_tbl";
			$rs_slider = mysqli_query($con, $sql_slider);
			if (!$rs_slider) 
			{
				die('No Slider Found.' . mysqli_error($con));
			}

			while ($row_slider = mysqli_fetch_array($rs_slider)) 
			{
				?>
				<li data-transition="fade">
					<img src="admin-pro/photos/slider-image/<?php echo $row_slider['profile']; ?>" alt=""
						data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<div class="tp-caption sfb tp-resizeme construct-banner-caption" data-x="right" data-hoffset="0"
						data-y="top" data-voffset="205" data-whitespace="nowrap" data-transform_idle="o:1;"
						data-transform_in="o:0" data-transform_out="o:0" data-start="500">
						<h2><b>
								<?php echo $row_slider['slider_title']; ?>
							</b></h2>
					</div>
					<div class="tp-caption sfb tp-resizeme construct-banner-caption" data-x="right" data-hoffset="20"
						data-y="top" data-voffset="265" data-whitespace="nowrap" data-transform_idle="o:1;"
						data-transform_in="o:0" data-transform_out="o:0" data-start="800">
						<h2>
							<?php echo $row_slider['semi_title']; ?>
						</h2>
					</div>
					<div class="tp-caption sfb tp-resizeme construct-banner-caption" data-x="right" data-hoffset="15"
						data-y="top" data-voffset="330" data-whitespace="nowrap" data-transform_idle="o:1;"
						data-transform_in="o:0" data-transform_out="o:0" data-start="1100">
						<ul>
							<li><span><?php echo $row_slider['tag_1']; ?></span></li>
							<li><span><?php echo $row_slider['tag_2']; ?></span></li>
							<li><span><?php echo $row_slider['tag_3']; ?></span></li>
						</ul>
					</div>
				</li>
				<?php
			}
			?>
		</ul>
	</div>
</section>


<section id="construction-welcome">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-construction-welcome">
				<div class="img-holder hvr-rectangle-out">
					<img src="img/construction-welcome/1.jpg" alt="">
				</div>
				<h2>Construction</h2>
				<p>Lorem ipsum dolor sit amet, cons ectetur elit. Ves tibulum nec odios Suspe ndisse cursus mal suada
					faci lisis. Lorem ipsum dolor.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 single-construction-welcome">
				<div class="img-holder hvr-rectangle-out">
					<img src="img/construction-welcome/2.jpg" alt="">
				</div>
				<h2>renovation</h2>
				<p>Lorem ipsum dolor sit amet, cons ectetur elit. Ves tibulum nec odios Suspe ndisse cursus mal suada
					faci lisis. Lorem ipsum dolor.</p>
			</div>
			<div
				class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-3 col-xs-offset-0 single-construction-welcome">
				<h1>Wecome to ConstructPress</h1>
				<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestib ulum nec odios Suspe ndisse cursus mal suada
					fact lisis. Lorem ipsum dolor sit.</p>
				<ul>
					<li><i class="fa fa-arrow-circle-o-right"></i> Interior design Package</li>
					<li><i class="fa fa-arrow-circle-o-right"></i> Reparing of Residentail Roof</li>
					<li><i class="fa fa-arrow-circle-o-right"></i> Hardwood Flooring</li>
					<li><i class="fa fa-arrow-circle-o-right"></i> Renovaion of Commercial Office</li>
					<li><i class="fa fa-arrow-circle-o-right"></i> Make Quality Products</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- #service-we-provide -->
<section id="service-we-provide" class="construct">
	<div class="container">
		<div class="section-title">
			<h1>Services that we offers</h1>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 wow slideInLeft">
				<div class="sidebar-widget-wrapper">
					<div class="single-sidebar service-two-tab-title">
						<ul role="tablist">

							<?php
							$sql_service = "SELECT service_type FROM service_tbl";
							$rs_service = mysqli_query($con, $sql_service);
							if (!$rs_service) 
							{
								die('service not Found.' . mysqli_error($con));
							}
							while ($row_service = mysqli_fetch_array($rs_service)) 
							{
								$str_services = str_replace(" ", "-", $row_service['service_type']);
								?>
								<li class=<?php if (isset($_GET['services']) && $_GET['services'] == $str_services) 
								{
									echo 'active';
								} ?> data-tab-name="<?php echo $str_services; ?>"><a
										href="index.php?services=<?php echo $str_services; ?>"
										aria-controls="<?php echo $str_services; ?>" role="tab"><i
											class="fa fa-long-arrow-right"></i>
										<?php echo $row_service['service_type']; ?>
									</a></li>
								<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-9 col-md-9 wow slideInRight">
				<div class="row">
					<div class="service-tab-content clearfix">
						<div id="construction">
							<div class="col-lg-8 col-md-7 col-sm-8">
								<h2>
									<?php echo $row_service_detail['title']; ?>
								</h2>
								<h4>
									<?php echo $row_service_detail['tag_line']; ?>
								</h4>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<img src="admin-pro/photos/service-image/<?php echo $row_service_detail['profile']; ?>"
											alt="" style="width:285px;height:169px;">
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<p>
											<?php echo substr($services_desc, 0, 200) . " ...  "; ?><a
												href="service.php?services=<?php echo $str_services_type; ?>">Read
												more</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
								<img src="img/service-we-provide/2.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section id="project-version-one" class="construct home">
	<div class="container">
		<div class="section-title">
			<h1>our latest Gallery</h1>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<ul class="gallery-filter">
					<!-- <li data-filter="all">
						<span>All</span> -->
					<?php
					$sql_service = "SELECT service_type FROM service_tbl";
					$rs_service = mysqli_query($con, $sql_service);
					if (!$rs_service) 
					{
						die('service not Found.' . mysqli_error($con));
					}
					while ($row_service = mysqli_fetch_array($rs_service)) 
					{
						$str_services = str_replace(" ", "-", $row_service['service_type']);
						?>
						
						
						<!-- <span><?php echo $row_service['service_type']; ?></span> -->
					</li>
						<?php
					}

					?>
				</ul>
			</div>
		</div>
		<div class="row normal-gallery gallery-v4" id="image-gallery-mix">
			<?php
			$sql_gallery = "SELECT gt.*, st.service_type FROM gallery_tbl gt
									LEFT JOIN service_tbl st ON gt.service_id = st.service_id 
									ORDER BY gt.gallery_id DESC LIMIT 10 ";
			$rs_gallery = mysqli_query($con, $sql_gallery);
			if (!$rs_gallery) {
				die('No Gallery Found.' . mysqli_error($con));
			}
			// $row_gallery = mysqli_fetch_array($rs_gallery);
			?>
			<?php
			while ($row_gallery = mysqli_fetch_array($rs_gallery)) {
				?>
				<div class="single-project-item mix  tank outside">
					<div class="img-wrap">
						<img src="admin-pro/photos/service-image/<?php echo $row_gallery['gallery']; ?>" alt=""
							style="width: 304px; height: 222px;	">
						<div class="content-wrapper hvr-sweep-to-right">
							<div class="content">
								<div class="button-box">
									<a class="fancybox" data-fancybox-group="home-gallery"
										title="<?php echo $row_gallery['service_type']; ?>"
										href="admin-pro/photos/service-image/<?php echo $row_gallery['gallery']; ?>"><i
											class="fa fa-search-plus"></i></a>
								</div>
								<div class="text-box">
									<h4>
										<?php echo $row_gallery['service_type']; ?>
									</h4>
									<!-- <span>Lorem ipsum dolor sit amet, cons ctetur adipisicing.</span> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>

		</div>
		<div class="view-all-btn text-center"><a href="gallery.php" class="view-all hvr-bounce-to-right">view
				all</a>
		</div>
	</div>
</section>


<section id="video-section-construction">
	<div class="container">
		<div class="clearfix">
			<div class="video-preview">
				<a href="http://www.youtube.com/watch?v=hMHAcYsvxHE" class="video-fancybox">
					<img src="img/video-construction/1.jpg" alt="">
				</a>
			</div>
			<div class="video-text">
				<h2>Checkout our video for featured work</h2>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseq uuntur
					magnirt dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quis quam est, qui dolorem
					ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quis quam qui dolorem ipsu quiat
					dolor sit amet, consectetur, adipisci velit.</p>
				<a href="contact.html" class="contact-us hvr-bounce-to-right">Contact Us</a>
			</div>
		</div>
	</div>
</section>


<section id="welcome-to-construct">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="img-holder hvr-rectangle-out pull-right">
					<img src="img/welcome-to-construct/1.jpg" alt="">
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<h2>Welcome to construct press</h2>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
					quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliq uam quae rat voluptatem.
					Ut enim ad minima veniam, quis nostrum.</p>
				<h3>We are available for 24/7 for you requirements</h3>
				<div class="list-box clearfix">
					<ul>
						<li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
						<li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
					</ul>
					<ul>
						<li><i class="fa fa-hand-o-right"></i> COMPLETE SAFETY ANALYSIS</li>
						<li><i class="fa fa-hand-o-right"></i> DRIVABILITY PROBLEMS</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="testimonials-construct-home">
	<div class="container">
		<div class="section-title">
			<h1>testimonials</h1>
		</div>

		<div class="clearfix">
			<div class="owl-carousel owl-theme">
				<?php
				$sql_review = "SELECT * FROM review_tbl";
				$rs_review = mysqli_query($con, $sql_review);
				if (!$rs_review) {
					die('No Review Found.' . mysqli_error($con));
				}
				while ($row_review = mysqli_fetch_array($rs_review)) 
				{
					?>

					<div class="item">
						<div class="single-testimonial-construct clearfix">
							<div class="img-holder hvr-rectangle-out">
								<img src="admin-pro/photos/review-image/<?php echo $row_review['profile']; ?>" alt=""
									style="width: 170px; height: 185px;">
							</div>
							<div class="content">
								<h3>
									<?php echo $row_review['name']; ?>
								</h3>
								<p>
									<?php echo $row_review['review']; ?>
								</p>
							</div>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>




<section id="blog-construct">
	<div class="container">
		<div class="section-title">
			<h1>Blogs</h1>
		</div>
		<div class="row">
			<?php
			if (!isset($_GET['blog']))
			{
				$get_blog_detail = "SELECT * FROM blog_tbl ORDER BY added_date DESC LIMIT 3";

				$rs_blog_detail = mysqli_query($con, $get_blog_detail);
				if (!$rs_blog_detail) {
					die('No Blog Found.' . mysqli_error($con));
				}
			}

			?>
			<?php
			while ($row_blog_detail = mysqli_fetch_array($rs_blog_detail)) 
			{
				$bolg_desc = strip_tags($row_blog_detail['blog_description']);
				?>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single-blog-post">
					<div class="img-holder hvr-rectangle-out">
						<img src="admin-pro/photos/blog-image/<?php echo $row_blog_detail['photos']; ?>" alt=""
							style="width: 370px; height: 202px;">
						<div class="date">
							<b>
								<?php echo date("d", strtotime($row_blog_detail['added_date'])) ?>
							</b> <br>
							<?php echo date("M", strtotime($row_blog_detail['added_date'])) ?>
						</div>
					</div>
					<a href="#">
						<h2>
							<?php echo $row_blog_detail['blog_title']; ?>
						</h2>
						<p>
							<?php echo substr($bolg_desc, 0, 130) . "...  "; ?>
						</p>
					</a>
					<ul>
						<li><span><b> </b>
								<a href="blog_detail.php?blog_id=<?php echo base64_encode ($row_blog_detail['blog_id']); ?>">Read more</a>
							</span></li>
						<li><a href="blog.php?blog=<?php echo $row_blog_detail['blog_category']; ?>">
								<?php echo $row_blog_detail['blog_category']; ?>
							</a></li>
					</ul>
				</div>


				<?php
			}
			?>
		</div>
	</div>
</section>


<!-- #clients -->
<section id="clients" class="construct">
	<div class="container">
		<div class="section-title">
			<h1>we worked with awesome clients</h1>
		</div>
		<div class="row">

			<div class="col-lg-12 col-md-12">
				<div class="owl-carousel owl-theme">
					<?php
					$sql_client = "SELECT * FROM client_tbl";
					$rs_client = mysqli_query($con, $sql_client);
					if (!$rs_client) {
						die('No Client Found.' . mysqli_error($con));
					}
					while ($row_client = mysqli_fetch_array($rs_client)) 
					{
						?>
						<div class="item">
							<img src="admin-pro/photos/client-image/<?php echo $row_client['profile']; ?>" alt=""
								style="width: 196px; height: 45px;">
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section> <!-- /#clients -->



<?php
include_once('footer.php');
?>