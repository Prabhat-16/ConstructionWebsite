<?php
    include_once('header.php');
  

    $sql_blog_detail = "SELECT * FROM blog_tbl WHERE blog_id = '".base64_decode($_GET['blog_id'])."'";
    $rs_blog_detail = mysqli_query($con,$sql_blog_detail);
    if(!$rs_blog_detail)
    {
        die('No Blog Found.'.mysqli_error($con));
    }
    $row_blog_detail = mysqli_fetch_array($rs_blog_detail);

    
?>
    	<!-- Main -->
<section id="main">
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-wrap posts post-single">
                    <article class="post">
                        <div class="head-post">
                            <h2>If you wanted to get rich, how would you do it?</h2>
                            <p>I think your best bet would be to start or join a startup. That's been a reliable way to get rich for hundreds of years. The word "startup" dates from the 1960s, but what happens in one is very similar.</p>
                            <div class="meta">
                                <!-- <span class="author">By  <?php echo $row_blog_detail['first_name']." ".$row_blog_detail['last_name']; ?></span> -->
                                <span class="time"> Published on <?php echo date("d",strtotime($row_blog_detail['added_date'])) ?></b><?php echo date("M",strtotime($row_blog_detail['added_date'])) ?></span>
                            </div>
                        </div><!-- /.head-post -->
                        <div class="body-post">
                            <div class="share-post">
                                <ul>
                                    <li class="count-share"><span class="numb">23</span><span>shares</span></li>
                                    <li class="email"><a href="#">Email</a></li>
                                    <li class="facebook"><a href="#">Facebook</a></li>
                                    <li class="twitter"><a href="#">Twitter</a></li>
                                    <li class="more"><a href="#">More</a></li>
                                </ul>
                            </div><!-- /.share-post -->
                            <div class="main-post">
                                <div class="entry-post">
                                    <p>Startups usually involve technology, so much so that the phrase "high-tech startup" is almost redundant. A startup is a small company that takes on a hard technical problem.</p>
                                    <img src="../admin-pro/photos/blog-image/<?php echo $row_blog_detail['photos']; ?>" alt="image" style="width: 658px; height: 428px;">
                                    <h3><?php echo $row_blog_detail['blog_title']; ?></h3>
                                    <p><?php echo $row_blog_detail['blog_description']; ?></p>
                                 
                                </div>
                            </div><!-- /.relate-posts -->
                        </div><!-- /.main-post -->
                    </article><!-- /.post -->
                </div><!-- /.post-wrap -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<?php
    include_once('footer.php');
?>