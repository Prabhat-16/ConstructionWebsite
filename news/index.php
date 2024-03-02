<?php
include_once('header.php');
?>

<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gnSlider gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                    <div class="flex-container">
                        <div class="flexslider loading">
                            <ul class="slides">
                                <?php
                                        $sql_slider = "SELECT * FROM slider_tbl";
                                        $rs_slider = mysqli_query($con,$sql_slider);
                                        if(!$rs_slider)
                                        {
                                            die('No Slider Found.'.mysqli_error($con));
                                        }
                                        while ($row_slider = mysqli_fetch_array($rs_slider))
                                        {
                                ?>
                                <li>
                                    <div class="item-wrap">
                                        <img src="../admin-pro/photos/slider-image/<?php echo $row_slider['profile']; ?>" alt="image" style="width: 1132px; height: 670px;">
                                        <p class="item" data-bottomtext="0"><?php echo $row_slider['slider_title']; ?> <br>
                                        <?php echo $row_slider['semi_title']; ?></p>
                                    </div>
                                </li>
                                        <?php
                                                }
                                        ?>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.gnSlider -->
            </div><!-- /.col-md-12 -->

            <div class="col-md-12">
                <div class="highlights-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
                    <div class="gn-line"></div>
                    <div class="section-title">
                        <h4><a href="gallery.php">Gallery</a></h4>
                    </div>
                        <?php
                              $sql_gallery = "SELECT gt.*, st.service_type FROM gallery_tbl gt
                              LEFT JOIN service_tbl st ON gt.service_id = st.service_id 
                              ORDER BY gt.gallery_id DESC LIMIT 4 ";
                                $rs_gallery = mysqli_query($con, $sql_gallery);
                                if (!$rs_gallery) {
                                    die('No Gallery Found.' . mysqli_error($con));
                                }
                                while ($row_gallery = mysqli_fetch_array($rs_gallery))
                                {
                        ?>
                    <article class="post" style="width:22.00%">
                        <div class="thumb">
                            <a href="#"><img src="../admin-pro/photos/service-image/<?php echo $row_gallery['gallery']; ?>" alt="img" style="width: 294px;height: 171px;"></a>
                        </div>
                        <div class="cat">
                            <a href="#"><?php echo $row_gallery['service_type']; ?></a>
                        </div>
                    </article>
                                    <?php
                                }
                                ?>
                </div><!-- /.highlights-posts -->
            </div>
                                <!-- Blog -->
        <div class="col-md-12">
    <div class="trending-posts">
        <div class="gn-line"></div>
        <div class="section-title">
            <h4><a href="#">Blog's</a></h4>
        </div>
        <div class="row">
            <?php
            $get_blog_detail = "SELECT * FROM blog_tbl ORDER BY added_date DESC LIMIT 4 ";
            $rs_blog_detail = mysqli_query($con, $get_blog_detail);
            
            if (!$rs_blog_detail) 
            {
                die('No Blog Found.' . mysqli_error($con));
            }
            
            while ($row_blog_detail = mysqli_fetch_array($rs_blog_detail)) 
            {
                $bolg_desc = strip_tags($row_blog_detail['blog_description']);
            ?>
            <div class="col-md-3"> <!-- Each content item will take one-quarter of the row -->
                <article class="post">
                    <div class="thumb">
                        <a href="#"><img src="../admin-pro/photos/blog-image/<?php echo $row_blog_detail['photos']; ?>" alt="img" style="width: 267px; height: 164px;"></a>
                    </div>
                    <span class="date"><?php echo date("M d", strtotime($row_blog_detail['added_date'])); ?></span>
                    <h3><a href="#"><?php echo substr($bolg_desc, 0, 130) . "...  "; ?></a><a href="blog_detail.php?blog_id=<?php echo base64_encode($row_blog_detail['blog_id']); ?>">Read more</a></h3>
                </article><!--  /.post -->
                <article class="post">
                    <span class=""><a href="blog.php?blog=<?php echo $row_blog_detail['blog_category']; ?>">
                    <?php echo $row_blog_detail['blog_category']; ?>
                </a></span>
                <h3><a href="#"><?php echo $row_blog_detail['blog_title']; ?></a></h3>
                </article><!--  /.post -->
            </div>
            <?php
            }
            ?>
        </div> <!-- Close the row container -->
    </div><!-- /.trending-posts -->
    <div class="gn-line"></div>
</div><!-- /.col-md-12 -->

                <div class="col-md-8">
					<div class="social-media-posts gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="section-title">
							<h4><a href="services.php">Service's</a></h4>
						</div>
                        <?php
                            $sql_service = "SELECT * FROM service_tbl ORDER BY service_id DESC LIMIT 3";
                            $rs_service = mysqli_query($con,$sql_service);
                            if(!$rs_service)
                            {
                                die('No Service Found.'.mysqli_error($con));
                            }
                            while ($row_service = mysqli_fetch_array($rs_service))
                            {
                                $service_desc = strip_tags($row_service['description']);
                        ?>
						<article class="post">
							<div class="thumb">
								<a href="#"><img src="../admin-pro/photos/service-image/<?php echo $row_service['profile']; ?>" alt="img" style="width: 364px; height: 244px;"></a>
							</div>
							<div class="content">
								<div class="cat">
									<a href=""><?php echo $row_service['service_type']; ?></a>
								</div>
								<h3><a href="#"><?php echo $row_service['title']; ?></a></h3>
								<p class="excerpt-entry"><?php echo substr($service_desc,0,200)."..."; ?></p>
								<div class="activity">
									<span class="views"><a href="services.php?service_id=<?php echo base64_encode($row_service['service_id']); ?>">Read More </a></span>
								</div>
							</div>
						</article><!--  /.post -->
						<?php
                            }
                        ?>
					</div><!-- /.social-media-posts -->
				</div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<?php
include_once('footer.php');
?>