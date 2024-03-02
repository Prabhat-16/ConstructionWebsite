<!-- Footer -->
<footer id="footer">
		<div class="footer-widgets">
			<div class="container">
				<div class="row">
					<div class="col-md-4 gn-animation" data-animation="fadeInUp" data-animation-delay="0" data-animation-offset="75%">
						<div class="widget widget-brand">
							<div class="logo logo-footer">
								<a href="index.php"><img src="images/logo-footer.svg" alt="Good News"></a>
							</div>
							<p>This pays especially well in technology, where you earn a premium for working fast.</p>
						</div><!-- /.widget-brand -->
						<div class="widget widget-social">
							<h5 class="widget-title">Follow Us</h5>
							<div class="social-list">
								<a href="#"><img src="images/facebook.svg" alt="image"></a>
								<a href="#"><img src="images/twitter.svg" alt="image"></a>
								<a href="#"><img src="images/youtube.svg" alt="image"></a>
								<a href="#"><img src="images/dribbble.svg" alt="image"></a>
							</div>
							<a class="email" href="#">hello@youraddress.com</a>
						</div><!-- /.widget-social -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-4 gn-animation" data-animation="fadeInUp" data-animation-delay="0.2s" data-animation-offset="75%">
						<div class="widget widget-twitter">
							<h5 class="widget-title">Twitter</h5>
							<div class="latest-tweets" data-number="3" data-username="envato" data-modpath="twitter/index.html"></div>
						</div><!-- /.widget-twitter -->
					</div><!-- /.col-md-4 -->
					<div class="col-md-2 gn-animation" data-animation="fadeInUp" data-animation-delay="0.4s" data-animation-offset="75%">
						<div class="widget widget-list">
							<h5 class="widget-title">Main</h5>
							<ul class="links-list">
								<li><a href="#">Mustreads</a></li>
								<li><a href="#">Tech</a></li>
								<li><a href="#">Business</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Social Media</a></li>
							</ul>
						</div><!-- /.widget-list -->
					</div><!-- /.col-md-2 -->
					<div class="col-md-2 gn-animation" data-animation="fadeInUp" data-animation-delay="0.6s" data-animation-offset="75%">
						<div class="widget widget-list">
							<h5 class="widget-title">About Us</h5>
							<ul class="links-list">
								<li><a href="about.php">About Us</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="services.php">Service's </a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div><!-- /.widget-list -->
					</div><!-- /.col-md-2 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-widgets -->
		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						&copy; 2023 Prabht's  News, Inc.
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>
	</footer>

	<!-- Login and Signup Form -->
    <div id="login-modal" class="login popup" style="display: none;">
        <a class="close-modal" href="#"></a>
        <div class="form-title">
            <h4>Login</h4>
            <div class="signup">
                No account yet? <a href="#">Sign Up</a>
            </div>
        </div>
        <div class="login-by">
            <div class="log-face-w">
                <a class="log-facebook" href="#">Login with Facebook</a>
            </div>
            <div class="log-twit-w">
                <a class="log-twitter" href="#">Login with Twitter</a>
            </div>
        </div>
        <form id="loginform" name="loginform" method="post">
            <div class="email-wrap">
                <input type="text" size="30" value="" class="input" id="user-email" name="log" placeholder="Email">
            </div>     
            <div class="pass-wrap">
                <input type="password" size="30" value="" class="input" id="user-pass" name="password" placeholder="Password">
            </div>
            <div class="option-login">
                <div class="remember">
                    <input type="checkbox" name="check3" id="check3" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
                </div>
                <div class="forgot">
                    <a href="#">I forgot my password</a>
                </div>
            </div>
            <div class="submit-login">
                <input type="submit" value="Log In" class="submit" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div id="signup-modal" class="popup" style="display: none;">
        <a class="close-modal" href="#"></a>
        <div class="form-title">
            <h4>Sign Up</h4>
            <div class="signup">
                Already a member? <a href="#">Login</a>
            </div>
        </div>
        <div class="login-by">
            <div class="log-face-w">
                <a class="log-facebook" href="#">Login with Facebook</a>
            </div>
            <div class="log-twit-w">
                <a class="log-twitter" href="#">Login with Twitter</a>
            </div>
        </div>
        <form id="signupform" name="signupform" method="post">
            <div class="name-wrap">
                <input type="text" size="30" value="" class="input" id="user-name" name="name" placeholder="Name">
            </div> 
            <div class="email-wrap">
                <input type="text" size="30" value="" class="input" id="user-email2" name="log" placeholder="Email">
            </div>     
            <div class="pass-wrap">
                <input type="password" size="30" value="" class="input" id="user-pass2" name="password" placeholder="Password">
            </div>

            <div class="option-login">
                <div class="remember">
                    <input type="checkbox" name="check4" id="check4" class="css-checkbox" checked="checked"/><label for="check4" class="css-label">Remember me</label>
                </div>
                <div class="forgot">
                    <a href="#">I forgot my password</a>
                </div>
            </div>

            <div class="submit-login">
                <input type="submit" value="Sign Up" class="submit" id="submit2" name="submit">
            </div>
        </form>
    </div>

	<!-- Go Top -->
	<a class="go-top">
		<i class="fa fa-chevron-up"></i>
	</a>

	<!-- Javascript -->
	<script type="text/javascript" src="javascript/jquery.min.js"></script>
	<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.easing.js"></script>
	<script type="text/javascript" src="javascript/matchMedia.js"></script>
	<script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
	<script type="text/javascript" src="javascript/jquery.flexslider.js"></script>
	<script type="text/javascript" src="javascript/jquery.transit.js"></script>
	<script type="text/javascript" src="javascript/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.tweet.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.cookie.js"></script>
	<script type="text/javascript" src="javascript/switcher.js"></script>
	<script type="text/javascript" src="javascript/jquery.doubletaptogo.js"></script>
	<script type="text/javascript" src="javascript/smoothscroll.js"></script>
	<script type="text/javascript" src="javascript/main.js"></script>
</body>


<!-- Mirrored from www.themes247.net/html5/goodnews/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 07:39:08 GMT -->
</html>