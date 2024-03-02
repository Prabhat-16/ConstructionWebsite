<?php
    include_once('header.php');
    if(isset($_GET['services']))
    {
        $get_service_detail = "SELECT * FROM service_tbl WHERE service_type = '" . str_replace("-", " ", $_GET['services']) . "' ";

        $rs_service_detail = mysqli_query($con, $get_service_detail);
        if (!$rs_service_detail) 
        {
            die('service not Found.' . mysqli_error($con));
        }
        $row_service_detail = mysqli_fetch_array($rs_service_detail);
    
    }
?>
<!-- #page-title -->
<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>Services</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <span>Services</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->

	
	<section class="service-two">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
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
									<li class=<?php if ($_GET['services'] == $str_services) 
									{
										echo 'active';
									} ?>
										data-tab-name="<?php echo $str_services; ?>"><a
											href="service.php?services=<?php echo $str_services; ?>"
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
				<div class="col-md-8 tab-content">
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
							<div class="service-two-tab-content tab-pane fade <?php if ($_GET['services'] == $str_services) {
								echo '  in active ';
							} ?> "
								id="<?php echo $str_services; ?>">
								<div class="img-box">
									<img src="admin-pro/photos/service-image/<?php echo $row_service_detail['profile']; ?>" alt="">
								</div>
						<h2><?php echo $row_service_detail['title']; ?></h2>
                        <h4><?php echo $row_service_detail['tag_line']; ?></h4>
                        <p><?php echo $row_service_detail['description']; ?></p>


					</div>
					
					

					
                    <?php
                            }
                            ?>
				</div>
			</div>
		</div>
	</section>
<?php
    include_once('footer.php');
?>