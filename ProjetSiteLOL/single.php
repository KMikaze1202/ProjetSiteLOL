<?php 
session_start();
include_once 'functions.inc.php';
dbConnect();
include './header.php';
$id_article = (int) $_GET['ArticleId'];
$article = get_articles_info_by_id($id_article);
$comments = get_all_comments_infos($id_article);
$keywords = get_keywords_by_article_id($id_article);
?>
<section id="ccr-main-section">
	<div class="container">


		<section id="ccr-left-section" class="col-md-8">

			<div class="current-page">
				<a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> <a href="blog.html">Blog <i class="fa fa-angle-double-right"></i></a> Single
			</div> <!-- / .current-page -->

			<article id="ccr-article">
				<h1><a href="./single.html" ><?php echo $article['Title'] ?></a></h1>

				<div class="article-like-comment-date">	
					Posted by <a href="#author"><?php echo $article['FirstName'] ?></a> on <time datetime="<?php echo $article['PublicationDate'] ?>"><?php echo $article['PublicationDate'] ?></time>

					<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
					<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
										
				</div> <!-- /.article-like-comment-date -->
                                <img height="770" width="436" src="<?php echo $article['Image'] ?>" alt="1st Image">
                                <p>
					<?php echo $article['Descriptive'] ?>
				</p>                                
				<div class="article-tags">
                                    Tag:
                                <?php foreach ($keywords as $keyword){ ?>
                                    
					 <a href="#tag1"><?php echo $keyword[0]; ?></a>
                                    <?php } ?>
				</div>

			</article> <!-- /#ccr-single-post -->


			<section id="ccr-article-related-post">
				<div class="ccr-gallery-ttile">
						<span class="bottom"></span>
						<p>Related Post</p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-4.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-5.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-6.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-7.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-8.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-9.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-10.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-11.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
					</ul>


			</section> <!-- /#ccr-article-related-post -->

			<section class="bottom-border"></section> <!-- /#bottom-border -->

			<section id="ccr-commnet">
                            
				<div class="ccr-gallery-ttile">
						<span class="bottom"></span>
						<p>Comment</p>
				</div> <!-- .ccr-gallery-ttile -->

				<ol class="commentlist">
				<?php foreach ($comments as $comment){ ?>                                 	
                                    <li  class="comment">
						<article>
							<div class="comment-authore">
								<img src="<?php echo $comment['Avatar']; ?>" alt="Avatar">
								<a href="#"><?php echo $comment['FirstName']; ?></a>
							</div>
							<div class="comment-content">
								<?php echo $comment['Comment']; ?>
							</div>
							<div class="comment-meta"><?php echo $comment['CommentDate']; ?></div>
						</article>
					</li> <!-- /.comment -->
                                        <?php } ?>
				</ol> <!-- /.commentlist -->



			</section> <!-- /#ccr-commnet -->



			<section class="bottom-border"></section> <!-- /#bottom-border -->

			<section id="ccr-respond">
				<div class="ccr-gallery-ttile">
						<span class="bottom"></span>
						<p>Post a Comment</p>
				</div> <!-- .ccr-gallery-ttile -->
				<div id="respond">
					<form action="#" method="post" id="commentform">
					<textarea id="comment" name="comment" placeholder="Message" rows="8" required></textarea>
					<input name="submit" type="submit" id="submit" value="Submit">
					
					</form> <!-- /#commentform -->
					
				</div> <!-- /#respond -->

			</section> <!-- /#ccr-respond -->


				


		</section><!-- /.col-md-8 / #ccr-left-section -->



		<?php include './aside.php'; ?>


	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->

<aside id="ccr-footer-sidebar">
	<div class="container">
		<ul>
			<li class="col-md-3">
				<h5>About Us</h5>
				<div class="about-us">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias Ab veniam atque eius...
				</div>
				<div class="site-logo">
					<a href="index.html"><img src="img/logo.png" alt="Side Logo" /><h1>Daily <span>News</span></h1><h3>The Daily News Source</h3></a>
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
					<a href="#">Football</a>
					<a href="#">Games</a>
					<a href="#">World News</a>
					<a href="#">USA</a>
					<a href="#">Salman</a>
					<a href="#">Masrafi</a>
					<a href="#">Afgan</a>
					<a href="#">Obama</a>
					<a href="#">t20</a>
					<a href="#">Business</a>
					<a href="#">Education</a>
					<a href="#">Lorem</a>
					<a href="#">Dhaka</a>
					<a href="#">BBC</a>
					<a href="#">Poland</a>
					<a href="#">Technology</a>
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


	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>