<?php 
    include_once('header.php');
    if(isset($_POST['btn_enquiry']))
    {
		$sql = "INSERT INTO enquiry_tbl(name,email,subject,message) VALUES('".$_POST['txt_name']."','".$_POST['txt_email']."','".$_POST['txt_subject']."','".$_POST['txt_msg']."')";
$rs = mysqli_query($con, $sql);
if (!$rs) 
{
    die('No Enquiry Found.' . mysqli_error($con));
}
		$message = "Thank You For  Contact us";
		echo "<script type='text/javascript'>alert('$message');</script>";
}
    
?>
	<!-- Main -->
	<section id="main" class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="content-left">
						<h2>Say Hello!</h2>
						<form id="form_contact" name="form_contact"  method="post" action="">
							<!-- <div class="note"></div> -->
							<div class="input-wrap">
								<input type="text"  tabindex="1" placeholder="Name *" name="txt_name" id="txt_name">
							</div>
							<!-- <div class="input-wrap last">
								<input type="text" value="" tabindex="1" placeholder="Second Name" name="secondname" id="second-name">
							</div> -->
							<div class="input-wrap">
								<input type="email"  tabindex="3" placeholder="Email *" name="txt_email" id="txt_email">
							</div>
							<div class="input-wrap last">
								<input type="text" value="" tabindex="4" placeholder="Subject" name="txt_subject" id="txt_subject">
							</div>
							<div class="message-wrap">
								<textarea class="" tabindex="5" placeholder="Message *" name="txt_msg" id="txt_msg"></textarea>
							</div>
							<div class="send-wrap">
								<input type="submit" value="Submit" id="btn_enquiry" name="btn_enquiry" class="submit">
							</div>
						</form><!-- /.comment-form -->
					</div><!-- /.content-left -->
				</div><!-- /.col-md-9 -->
				<div class="col-md-3">
					<div class="content-right">
                        <?php
                                $sql_detail = "SELECT * FROM detail_tbl";
                                $rs_detail = mysqli_query($con,$sql_detail);
                                if(!$rs_detail)
                                {
                                    die('No Details Found.'.mysqli_error($con));
                                }
                                $row_detail = mysqli_fetch_array($rs_detail);
                        ?>
						<h2>Contacts</h2>
						<div class="contact-info">
							<p class="title">Main Office:</p>
							<p>Address: 1600 Pennsylvania Ave NW, Washington, DC 20500</p>
							<p>Phone: +91 <?php echo $row_detail['header_no']; ?></p>
							<p>Email: <?php echo $row_detail['detail_email']; ?></p>
						</div>
						<div class="contact-info">
							<p class="title">Secondary Office:</p>
							<p>Address: 1600 Pennsylvania Ave NW, Washington, DC 20500</p>
							<p>Phone: +91 <?php echo $row_detail['footer_no']; ?></p>
							<p>Email: <?php echo $row_detail['detail_email2']; ?></p>
						</div>
						<div class="contact-info">
							<p class="title">Business Hours:</p>
							<p>Monday - Friday: 08:00 - 17:59</p>
							<p>Saturday - Sunday: 09:00 - 13:59</p>
							<ul class="contact-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>		
							</ul>
							<div class="clearfix"></div>
						</div>
					</div><!-- /.content-right -->
				</div><!-- /.col-md-3 -->
				<!-- <div class="col-md-12">
					<h2 class="title-map">On The Map</h2>
					<div id="map" style="width: 100%; height: 550px">
					</div>
				</div> -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>	
<?php 
    include_once('footer.php');
?>