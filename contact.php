<?php
    include_once('header.php');
    if(isset($_POST['btn_contact']))
    {
        $sql = "INSERT INTO enquiry_tbl (name,email,subject,message) VALUES('".$_POST['txt_name']."','".$_POST['txt_email']."','".$_POST['txt_subject']."','".$_POST['txt_message']."') ";
        $rs = mysqli_query($con,$sql);
        if(!$rs)
        {
            die('No Record Found.'.mysqli_error($con));
        }
        $message = "Thank You For  Contact us";
		echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>
<!-- #page-title -->
<section id="page-title">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- .title -->
					<div class="title pull-left">
						<h1>Contact Us</h1>
					</div> <!-- /.title -->
					<!-- .page-breadcumb -->
					<div class="page-breadcumb pull-right">
						<i class="fa fa-home"></i> <a href="index.php">Home</a> <i class="fa fa-angle-right"></i> <span>Contact Us</span>
					</div> <!-- /.page-breadcumb -->
				</div>
			</div>
		</div>
	</section> <!-- /#page-title -->
	
	<!-- #contact-content -->
	<section id="contact-content">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">
					<div class="section-title">
						<h1>Feel Free to Drop Us A Line To Contact Us</h1>
						<p>You can talk to our online representative at any time. Please use our Live Chat System on our website or Fill up below instant messaging programs. <br>Please be patient, We will get back to you. Our 24/7 Support, General Inquireies Phone: + 0987 654 321</p>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
					<form action="" method="post" name="frm_contact" id="frm_contact" class="contact-form">
						<p><input type="text" name="txt_name" placeholder="Name" id="txt_name"></p>
						<p><input type="text" name="txt_email" placeholder="Email" id="txt_email"></p>
						<p><input type="text" name="txt_subject" placeholder="Subject" id="txt_subject"></p>
						<p><textarea name="txt_message" placeholder="Message" id="txt_message"></textarea></p>
						<p><button type="submit" name="btn_contact" id="btn_contact">Submit Now</button></p>
					</form>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 contact-info">
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
						<li>
							<div class="icon-box">
								<i class="fa fa-map-marker"></i>
							</div>
							<div class="text-box">
								<p>ConstructPrss, 598, Mallin Street <br>New Youk, NY 100 654</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<i class="fa fa-envelope-o"></i>
							</div>
							<div class="text-box">
								<p><?php echo $row_detail['detail_email']; ?> <br><?php echo $row_detail['detail_email2']; ?></p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<i class="fa fa-phone"></i>
							</div>
							<div class="text-box">
								<p><?php echo $row_detail['header_no']; ?> <br><?php echo $row_detail['footer_no']; ?></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section> <!-- /#contact-content -->

<?php
    include_once('footer.php');
?>