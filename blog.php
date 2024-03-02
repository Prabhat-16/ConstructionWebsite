<?php
    include_once('header.php');
    if(!isset($_GET['blog']))
{?>
<section id="page-404-content">
		<div class="container">
			<div class="row">
				<img src="img/404/404-man.png" alt="" class="man-404">
				<div class="col-lg-7 col-md-7 col-sm-9 col-xs-12 col-lg-offset-5 col-md-offset-5 col-sm-offset-2">
					<h1>404: PAGE NOT FOUND</h1>
					<p>We’re sorry but we can’t seem to find the page you requested. <br>This might be because you have typed the web address incorrectly.</p>
					<a href="index.php" class="button-404 hvr-bounce-to-right">Go To Home</a>
				</div>
			</div> 
		</div>
	</section>    
    <?php
}
else
{
    $get_blog_detail = "SELECT bt.*, ft.first_name, ft.last_name 
                        FROM blog_tbl as bt
                        LEFT JOIN form_tbl ft ON bt.user_id = ft.form_id 
                        WHERE bt.blog_category =  '" . str_replace("-", "", $_GET['blog']) . "' ";
    $rs_blog_detail = mysqli_query($con,$get_blog_detail);
    if(!$rs_blog_detail)
    {
        die('No Record Found.'.mysqli_error($con));
    }
}
?>
	<!-- #page-title -->
	<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>Blog </h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <span>Blog </span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #blog -->
	<section id="blog" class="version-two">
		<div class="container">
			<div class="row">
                <?php
                        while($row_blog_detail = mysqli_fetch_array($rs_blog_detail))
                        {
                            $bolg_desc = strip_tags($row_blog_detail['blog_description']);
                ?>
				<!-- .blog-wrap -->
				<div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
					<div class="img-wrap">
						<img src="admin-pro/photos/blog-image/<?php echo $row_blog_detail['photos']; ?>" alt="" style="width: 270px; height: 258px;">
						<div class="date-holder">
							<h2><b><?php echo date("d",strtotime($row_blog_detail['added_date'])) ?></b><?php echo date("M",strtotime($row_blog_detail['added_date'])) ?></h2>
						</div>
					</div>
					<div class="content-wrap">
						<h2><?php echo $row_blog_detail['blog_title']; ?></h2>
						<p><?php echo substr($bolg_desc,0,130)."...";?></p>
						<ul>
                            <li><span><?php echo $row_blog_detail['blog_category']; ?></span></li>
                            <li><span><b></b> <a href="blog_detail.php?blog_id=<?php echo base64_encode ($row_blog_detail['blog_id']); ?>">Read more</a></span></li>
						</ul>
					</div>
				</div> <!-- /.blog-wrap -->
				<!-- .blog-wrap -->
				<?php
                        }
                        ?>
				
				
			</div>
			<div class="row">
				<div class="post-pagination">
					<ul>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section> <!-- /#blog -->



	
<?php
    include_once('footer.php');
?>