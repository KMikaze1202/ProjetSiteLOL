<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="" >
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage - Daily News </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<header id="ccr-header">
	<section id="ccr-nav-top" class="fullwidth">
		<div class="">
			<div class="container">
				<nav class="top-menu">
					<ul class="left-top-menu">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Site Map</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul><!-- /.left-top-menu -->

					<ul class="right-top-menu pull-right">
                                            <?php
                                              if (isset($_SESSION['UserConnect'])): ?>
                                            <li><a href="logout.php.php">Logout</a></li>
                                            <?php  else : ?>
                                            <li><a href="login.php">Login</a></li>
                                            <?php endif; ?>
						
                                                <li><a href="register.php">Register</a></li>
						<li><a href="#">Subscribe</a></li>
						<li>
							<form class="form-inline" role="form" action="#">
								<input type="search" placeholder="Search here..." required>
								  <button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</li>
					</ul> <!--  /.right-top-menu -->
				</nav> <!-- /.top-menu -->
			</div>
		</div>	
	</section> <!--  /#ccr-nav-top  -->


	
	<section id="ccr-site-title">
		<div class="container">
			<div class="site-logo">
				<a href="index.html" class="navbar-brand">
					<img src="img/logo.png" alt="Side Logo" />
						<h1>Daily <span>News</span></h1>
						<h3>The Daily News Source</h3>
				</a>
			</div> <!-- / .navbar-header -->

			<div class="add-space">
				728 x 90 px Banner
			</div> <!-- / .adspace -->

		</div>	<!-- /.container -->
	</section> <!-- / #ccr-site-title -->



	<section id="ccr-nav-main">
		<nav class="main-menu">
			<div class="container">

				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-main">
				            <i class="fa fa-bars"></i>
			          	</button> <!-- /.navbar-toggle -->
				</div> <!-- / .navbar-header -->

				<div class="collapse navbar-collapse ccr-nav-main">
					<ul class="nav navbar-nav">
						<li><a class="active" href="index.html">Home</a></li>
						<li class="dropdown">
							<a href="#">Blog <i class="fa fa-caret-down"></i></a>
							<ul class="sub-menu">
					          	<li><a href="blog.html">Blog 1</a></li>
					          	<li><a href="blog-2.html">Blog 2</a></li>
							  	<li><a href="blog-3.html">Blog 3</a></li>
					        </ul><!-- /.sub-menu -->
						</li><!-- /.dropdown -->
						<li><a href="single.html">Single</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li class="dropdown"><a href="#">Category <i class="fa fa-caret-down"></i></a>
							<ul class="sub-menu">
								<li><a href="category-1.html">Category 1</a></li>
								<li><a href="category-2.html">Category 2</a></li>
								<li><a href="#">More <i class="fa fa-caret-right"></i></a>
									<ul class="sub-menu-2">
										<li><a href="#">Demo Link 1</a></li>
										<li><a href="#">Demo Link 2</a></li>
										
										<li><a href="#">More <i class="fa fa-caret-right"></i></a>
											<ul class="sub-menu-3">
												<li><a href="#">Demo Link 1</a></li>
												<li><a href="#">Demo Link 2</a></li>
												<li><a href="#">Demo Link 3</a></li>
											</ul><!-- /.sub-menu-3 -->
										</li>
										<li><a href="#">Demo Link 3</a></li>
									</ul><!-- /.sub-menu-2 -->
								</li>
							</ul><!-- /.sub-menu -->
						</li><!--  /.dropdown -->
						<li><a href="404.html">404</a></li>
					</ul> <!-- /  .nav -->
				</div><!-- /  .collapse .navbar-collapse  -->

				<div id="currentTime" class="pull-right current-time">
					<i class="fa fa-clock-o"></i> 12:10 pm


				</div><!-- / #currentTime -->

			</div>	<!-- /.container -->
		</nav> <!-- /.main-menu -->
	</section> <!-- / #ccr-nav-main -->
        <section>
            
        </section>


	<section id="ccr-nav-below-main">
		<nav class="second-menu">
			<div class="container">

				<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".ccr-nav-below-main">
				            <i class="fa fa-bars"></i>
			          	</button> <!-- /.navbar-toggle -->
				</div> <!-- / .navbar-header -->

				<div class="collapse navbar-collapse ccr-nav-below-main">
					<ul class="nav navbar-nav">
						<li><a href="#">Europe</a></li>
						<li><a href="#">USA</a></li>
						<li><a href="#">Middle East</a></li>
						<li><a href="#">Social and IT</a></li>
						<li><a href="#">Culture</a></li>
					</ul> <!-- /.nav /.navbar-nav -->
				</div>

				<div class="ccr-language">
					<ul> 
						<li>Language:</li>
						<li><a href="#"><img src="img/uk.png" alt="UK">English</a></li>
						<li><a href="#"><img src="img/france.png" alt="France">France</a></li><li>
						<a href="#"><img src="img/garman.png" alt="Garman">Garman</a></li>
					</ul>
				</div> <!-- /.ccr-language -->
			</div><!-- /.container -->
                        
                            <div class="message">
                                <?php if (!empty($_SESSION['message'])): ?>
        <?php if (($_SESSION['MessageType']) == "information"): ?> 
            <div class="message"><font color="green"><?php echo $_SESSION['message'] ?></font></div>
        <?php elseif (($_SESSION['MessageType']) == "error"): ?>
            <div class="message"><font color="red"><?php echo $_SESSION['message'] ?></font></div>
         <?php endif; unset($_SESSION['MessageType']); ?>
    <?php endif; unset($_SESSION['message']); ?>        
                            </div>    
                        
		</nav><!-- /.second-menu -->
	</section><!-- / #ccr-nav-below-main -->

</header> <!-- /#ccr-header -->