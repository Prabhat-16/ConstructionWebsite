<?php
    include_once('admin-pro/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Prabhat Construction Press</title>
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="css/responsive.css">


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/respond.js"></script>
	<![endif]-->


</head>
<body>
	


	<!-- #topbar -->
	<section id="topbar" class="construct">
		<div class="container">
			<div class="row">
				<div class="social pull-right">
					<ul>
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-skype"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div> <!-- /.social -->
				<div class="contact-info pull-left">
					<?php
							$sql_detail = "SELECT * FROM detail_tbl";
							$rs_detail = mysqli_query($con,$sql_detail);
							if(!$rs_detail)
							{
								die('No Detail Found.'.mysqli_error($con));
							}
							$row_detail = mysqli_fetch_array($rs_detail);
					?>
					<ul>
						<li><a href="tel:+1234567890"><i class="fa fa-map-marker"></i>  56, Building- Avenue-96, New York </a></li>
						<li><a href="mailto:info@plumberx.com"><i class="fa fa-envelope"></i> <?php echo $row_detail['detail_email']; ?></a></li>
						<li><a href="<?php echo $row_detail['header_no']; ?>"><i class="fa fa-phone"></i><?php echo $row_detail['header_no']; ?></a></li>
					</ul>
				</div> <!-- /.contact-info -->
			</div>
		</div>
	</section> <!-- /#topbar -->

	<!-- header -->
	<header class="construct header-curvy">
		<!-- <div class="search-box">
			<div class="container">
				<div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
					<form action="#">
						<input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
					</form>
				</div>
			</div>
		</div>
		<div class="cart-box">
			<div class="container">
				<div class="pull-right cart col-lg-6 col-xs-12">
					<p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
				</div>
			</div>
		</div> -->
		<div class="container">
			<div class="clearfix">
				<div class="pull-left logo">
					<a href="index.php">
						<img src="img/resources/logo-2.png" alt="Plumberx">
					</a>
				</div>
				<nav class="pull-right mainmenu-container clearfix">
					<!-- <ul class="top-icons-wrap pull-right">
						<li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
						<li class="top-icons cart"><a href="#"><i class="icon icon-ShoppingCart"></i></a></li>
					</ul> -->
					<button class="mainmenu-toggler">
						<i class="fa fa-bars"></i>
					</button>
					<ul class="mainmenu pull-right">
						<li class="">
							<a href="index.php">Home</a>
						</li>						
						<li class="">
							<a href="about.php">About us</a>
						</li>
						<li class="dropdown"><a href="">Services</a>
							<ul class="submenu">
                            <?php
								$sql_service = "SELECT * FROM service_tbl";
								$rs_service = mysqli_query($con, $sql_service);
								if (!$rs_service) 
								{
									die('service not Found.' . mysqli_error($con));
								}
								while ($row_service = mysqli_fetch_array($rs_service)) 
								{
									$str_services = str_replace(" ", "-", $row_service['service_type']);
							?>
									<li><a href="service.php?services=<?php echo $str_services; ?>"><?php echo $row_service['service_type']; ?></a></li>

							<?php
								}

							?>
                               
								
							</ul>
						</li>
						<li class="">
							<a href="gallery.php">Gallery</a>
							
						</li>
						<li class="dropdown">
							<a href="#">Blog</a>
							<ul class="submenu">
                                <?php
                                        $sql_blog = "SELECT blog_category FROM blog_tbl GROUP BY blog_category";
                                        $rs_blog = mysqli_query($con,$sql_blog);
                                        if(!$rs_blog)
                                        {
                                            die('No Record Found.'.mysqli_error($con));
                                        }
                                        while($row_blog = mysqli_fetch_array($rs_blog))
                                        {
                                            $blg_blog = str_replace("","-",$row_blog['blog_category']);
                                            ?>
                                        <li><a href="blog.php?blog=<?php echo $blg_blog; ?>"><?php echo $row_blog['blog_category']; ?></a></li>	
                                        <?php
                                        }
                              ?>
							</ul>
						</li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header> <!-- /header -->