<?php
include_once('../admin-pro/connection.php')
    ?>
<!DOCTYPE html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Prabhat's News — News </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'
        type='text/css'>

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="icon/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="icon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="icon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->
</head>

<body class="has-banner">
    <!-- Header -->
    <header id="header" class="header">
        <div class="top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="logo" class="logo">
                            <a href="index.php" rel="home" title="home">
                                <img src="images/logo.svg" alt="Good News" />
                            </a>
                        </div>
                        <div class="follow-us">
                            <div class="follow-title">
                                Follow Us
                            </div>
                            <ul class="social-links">
                                <li class="facebook"><a href="#">Follow us on Facebook</a></li>
                                <li class="twitter"><a href="#">Follow us on Twitter</a></li>
                                <li class="google"><a href="#">Follow us on Google</a></li>
                                <li class="linkedin"><a href="#">Follow us on Linkedin</a></li>
                                <li class="pinterest"><a href="#">Follow us on Pinterest</a></li>
                            </ul>
                        </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6">
                        <div class="btn-menu"></div><!-- //mobile menu button -->
                        <div class="member-area">
                            <span class="login-popup"><a href="#login-modal">Login</a></span>
                            <span class="signup-popup"><a href="#signup-modal">Become a member</a></span>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.top-wrap -->
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <nav id="mainnav" class="mainnav">
                            <ul class="menu">
                                <li class=""><a class="" href="index.php">Home</a>
                                </li>
                                <li class=""><a href="about.php">About Us</a>
                                </li>
                                <li class=""><a href="services.php">Services</a>
                                    <!-- <ul class="sub-menu">
                                    </ul> -->
                                </li>
								<li><a href="gallery.php">Gallery</a></li>
                                <li class="has-children"><a href="#">Blogs</a>
                                    <ul class="sub-menu">
                                    <?php
								$sql_blog = "SELECT blog_category FROM blog_tbl GROUP BY blog_category";
								$rs_blog = mysqli_query($con, $sql_blog);
								if (!$rs_blog) {
									die('blog not found.' . mysqli_error($con));
								}
								while ($row_blog = mysqli_fetch_array($rs_blog)) {
									$blg_blog = str_replace("", "-", $row_blog['blog_category']);
									?>
									<li><a href="blog.php?blog=<?php echo $blg_blog; ?>"><?php echo $row_blog['blog_category']; ?></a></li>
									<?php
								}
								?>
                                    </ul><!-- /.submenu -->
                                </li>
                               
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul><!-- /.menu -->
                        </nav><!-- /nav -->
                    </div><!-- /.col-md-9 -->
                    <div class="col-md-3">
                        <div class="search-wrap">
                            <div class="search-icon"></div><!-- //mobile search button -->
                            <form action="#" id="searchform" class="search-form" method="get" role="search">
                                <input type="text" id="s" placeholder="Search" class="search-field">
                                <input type="submit" value="&#xf002;" id="searchsubmit" class="search-submit">
                                <a class="search-close" href="#"><i class="fa fa-times-circle"></i></a>
                            </form>
                        </div><!-- /.search-wrap -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-wrap -->
    </header>