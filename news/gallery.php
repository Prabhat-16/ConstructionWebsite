<?php
    include_once('header.php');
    $sql_gallery = "SELECT gt.*, st.service_type FROM gallery_tbl gt
                    LEFT JOIN service_tbl st ON gt.service_id = st.service_id
                    ORDER BY gt.gallery_id DESC";
    $rs_gallery = mysqli_query($con,$sql_gallery);
    if(!$rs_gallery)
    {
        die('No Gallery Found.'.mysqli_error($con));
    }
?>
<!-- #page-title -->
<section id="page-title">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- .title -->
				<div class="title pull-left">
					<h1>Gallery</h1>
				</div> <!-- /.title -->
				<!-- .page-breadcumb -->
				<!-- <div class="page-breadcumb pull-right">
					<i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i>
					<span>Gallery</span>
				</div>  -->
			</div>
		</div>
	</div>
</section> <!-- /#page-title -->
<section id="project-version-one">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-12">
                <ul class="gallery-filter">
                    <li data-filter="all">
                        <span>All</span>
                    </li>
                    <?php
                    $sql_service = "SELECT service_type FROM service_tbl";
                    $rs_service = mysqli_query($con, $sql_service);
                    if (!$rs_service) {
                        die('service not Found.' . mysqli_error($con));
                    }
                    while ($row_service = mysqli_fetch_array($rs_service)) 
                    {
                        $str_services = str_replace(" ", "-", $row_service['service_type']);
                        ?>
                        data-filter=".<?php echo $str_services; ?>"
                            <a href="gallery.php?service_id=<?php echo $row_gallery['service_id']; ?>">
                                <span>
                                    <?php echo $row_service['service_type']; ?>
                                </span>
                            </a>
                        
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div> -->
        <div class="row normal-gallery" id="image-gallery-mix">
            <?php
            while ($row_gallery = mysqli_fetch_array($rs_gallery)) {
                ?>

                <div class="col-lg-4 col-sm-6 col-xs-12 tank outside single-project-item mix <?php echo $str_services; ?>">
                    <div class="img-wrap">
                        <img src="../admin-pro/photos/service-image/<?php echo $row_gallery['gallery']; ?>" alt=""
                            style="width: 370px; height: 294px;">
                        <div class="content-wrapper hvr-sweep-to-right">
                            <div class="content">
                                <!-- <div class="button-box">
                                    <a data-fancybox-group="project-v1" title="<?php echo $row_gallery['service_type']; ?>"
                                        class="fancybox"
                                        href="../admin-pro/photos/service-image/<?php echo $row_gallery['gallery']; ?>">
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </div> -->
                                <div class="text-box">
                                    <h4>
                                        <?php echo $row_gallery['service_type']; ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>
</div><!-- Close the container div -->
</div><!-- Close the row div -->
</div><!-- Close the container div -->
<?php
    include_once('footer.php');
?>