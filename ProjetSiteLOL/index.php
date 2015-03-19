<?php
session_start();
include_once './header.php';
include_once 'functions.inc.php';
dbConnect();
 
?>
<section id="ccr-main-section">
	<div class="container">


		<section id="ccr-left-section" class="col-md-8">

			

			<div class="ccr-last-update">
				<div class="update-ribon">Last Update</div> <!-- /.update-ribon -->
				<span class="update-ribon-right"></span> <!-- /.update-ribon-left -->
				<div class="update-news-text" id="update-news-text">
						<ul id="latestUpdate">  
						    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
						    <li><a href="#">Two</a></li>
						    <li><a href="#">Three</a></li>
						    <li><a href="#">Four</a></li>
						    <li><a href="#">Five</a></li>
						</ul>
				</div> <!-- /.update-text -->

				<div class="update-right-border"></div> <!-- /.update-right-border -->
			</div> <!-- / .ccr-last-update -->


			<section id="ccr-slide-main" class="carousel slide" data-ride="carousel">				
					
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="active item">
							<div class="container slide-element">
								<img src="img/slide/main-slide-1.jpg" alt="Main Slide Image 1">
								<p><a href="#">Lorem ipsum dolor sit amet</a></p>
							</div> <!-- /.slide-element -->
						</div> <!--/.active /.item -->

						<div class="item">
							<div class="container slide-element">
								<img src="img/slide/main-slide-2.jpg" alt="Main Slide Image 1">
								<p><a href="#">Lorem ipsum dolor sit amet</a></p>
							</div> <!-- /.slide-element -->
						</div> <!--  /.item -->

						<div class="item">
							<div class="container slide-element">
								<img src="img/slide/main-slide-3.jpg" alt="Main Slide Image 1">
								<p><a href="#">Lorem ipsum dolor sit amet</a></p>
							</div> <!-- /.slide-element -->
						</div> <!-- .item -->

						<div class="item">
							<div class="container slide-element">
								<img src="img/slide/main-slide-4.jpg" alt="Main Slide Image 1">
								<p><a href="#">Lorem ipsum dolor sit amet</a></p>
							</div> <!-- /.slide-element -->
						</div> <!-- /.item -->

						
					</div> <!-- /.carousel-inner -->
					
					<!-- slider nav -->
					<a class="carousel-control left" href="#ccr-slide-main" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
					<a class="carousel-control right" href="#ccr-slide-main" data-slide="next"><i class="fa fa-arrow-right"></i></a>

					<ol class="carousel-indicators">
						<li data-target="#ccr-slide-main" data-slide-to="0" class="active"></li>
						<li data-target="#ccr-slide-main" data-slide-to="1"></li>
						<li data-target="#ccr-slide-main" data-slide-to="2"></li>
						<li data-target="#ccr-slide-main" data-slide-to="3"></li>
					</ol> <!-- /.carousel-indicators -->

							
			</section><!-- /#ccr-slide-main -->




			<section id="ccr-latest-post-gallery">
                        <?php
                           $LatestArticles = get_latest_6_articles_info();
                        ?>
					<div class="ccr-gallery-ttile">
						<span></span> 
						<p>Others Latest Post Gallery</p>
					</div><!-- .ccr-gallery-ttile -->

					
						<ul class="ccr-latest-post">
                                                <?php
                                                    foreach ($LatestArticles as $LatestArticle) {
                                                ?>
							<li>
								<div class="ccr-thumbnail">
									<img src="<?php echo $LatestArticle['Image'] ?>" alt="Thumbnail 1">
									<p><a href=single.php?ArticleId=<?php echo $LatestArticle['ArticleId'] ?>>Read More</a></p>
								</div>
								<h4><a href=single.php?ArticleId=<?php echo $LatestArticle['ArticleId'] ?>><?php echo $LatestArticle['Abstract'] ?></a></h4>
							</li>
                                                    <?php } ?>
						</ul> <!-- /.ccr-latest-post -->
					
				</section> <!--  /#ccr-latest-post-gallery  -->
				
				<section class="bottom-border">
				</section> <!-- /#bottom-border -->
		</section><!-- /.col-md-8 / #ccr-left-section -->
		<?php include './aside.php'; ?>
	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>