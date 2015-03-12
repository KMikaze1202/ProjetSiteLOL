<aside id="ccr-footer-sidebar">
	<div class="container">

		<ul>
			<li class="col-md-3">
				<h5>A Propos</h5>
				<div class="about-us">
					A propos de nous
				</div>
				<div class="site-logo">
					<a href="index.php"><img src="img/logo.png" alt="Side Logo" /><h1>LOL <span>News</span></h1><h3>Les Nouveauté de LOL</h3></a>
				</div> <!-- / .navbar-header -->
				
			</li>
			<li class="col-md-3">
				<h5>Popular Post</h5>
				<ul>
					<li>
						<img src="img/thumbnail-small-1.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
					<li>
						<img src="img/sports-thumb-4.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
					<li>
						<img src="img/thumbnail-small-3.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
					<li>
						<img src="img/thumbnail-small-5.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Popular Post</a>
					</li>
				</ul>
				
			</li>
			<li class="col-md-3">
				<h5>Recent Post</h5>
				<ul>
					<li>
						<img src="img/thumbnail-small-8.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
					<li>
						<img src="img/sports-thumb-6.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
					<li>
						<img src="img/thumbnail-small-7.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
					<li>
						<img src="img/thumbnail-small-6.jpg" alt="Avatar">
						<a href="#">Lorem Ipsum is a samply dummy text of Recent Post</a>
					</li>
				</ul>
				
			</li>
			<li class="col-md-3">
				<h5>Tags</h5>
				<div class="tagcloud">
                                    <?php
                                    $keywords = get_all_keywords();
                                    foreach ($keywords as $keyword) {
                                        ?>
                                        <a href="search.php?Keyword=<?php echo $keyword['Keyword']; ?>"><?php echo $keyword['Keyword']; ?></a>
                                    <?php } ?>
				</div>
				
			</li>
		</ul>
	</div>
	
</aside> <!-- /#ccr-footer-sidebar -->


<footer id="ccr-footer">
	<div class="container">
	 	<div class="copyright">
	 		&copy; 2014, Copyrights <a href="http://codexcoder.com">CodexCoder</a> Theme. All Rights Reserved
	 	</div> <!-- /.copyright -->

	 	<div class="footer-social-icons">
	 		<ul>
	 			<li>
	 				<a href="#"  class="google-plus"><i class="fa fa-google-plus"></i></a>
	 			</li>
	 			<li >
	 				<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
	 			</li>
	 			<li >
	 				<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
	 			</li>
	 			<li >
	 				<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
	 			</li>
	 		</ul>
	 		
	 	</div><!--  /.cocial-icons -->

	</div> <!-- /.container -->
</footer>  <!-- /#ccr-footer -->



<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script> 
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />

</body>
</html>
