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
					<div class="ccr-gallery-ttile">
						<span></span> 
						<p>Others Latest Post Gallery</p>
					</div><!-- .ccr-gallery-ttile -->

					
						<ul class="ccr-latest-post">
							<li>
								<div class="ccr-thumbnail">
									<img src="img/thumbnail1.jpg" alt="Thumbnail 1">
									<p><a href="#postlink">Read More</a></p>
								</div>
								<h4><a href="#postlink">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							</li>
							<li>
								<div class="ccr-thumbnail">
									<img src="img/thumbnail2.jpg" alt="Thumbnail 1">
									<p><a href="#postlink">Read More</a></p>
								</div>
								<h4><a href="#postlink">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							</li>
							<li>
								<div class="ccr-thumbnail">
									<img src="img/thumbnail3.jpg" alt="Thumbnail 1">
									<p><a href="#postlink">Read More</a></p>
								</div>
								<h4><a href="#postlink">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							</li>
							<li>
								<div class="ccr-thumbnail">
									<img src="img/thumbnail4.jpg" alt="Thumbnail 1">
									<p><a href="#postlink">Read More</a></p>
								</div>
								<h4><a href="#postlink">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							</li>
							<li>
								<div class="ccr-thumbnail">
									<img src="img/thumbnail5.jpg" alt="Thumbnail 1">
									<p><a href="#postlink">Read More</a></p>
								</div>
								<h4><a href="#postlink">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							</li>
							<li>
								<div class="ccr-thumbnail">
									<img src="img/thumbnail6.jpg" alt="Thumbnail 1">
									<p><a href="#postlink">Read More</a></p>
								</div>
								<h4><a href="#postlink">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							</li>
						</ul> <!-- /.ccr-latest-post -->
					
				</section> <!--  /#ccr-latest-post-gallery  -->
				
				<section class="bottom-border">
				</section> <!-- /#bottom-border -->




				<section id="ccr-world-news">
					<div class="ccr-gallery-ttile">
							<span></span> 
							<p>World News</p>
					</div> <!-- .ccr-gallery-ttile -->
					
					<section class="featured-world-news">
						<div class="featured-world-news-img"><img src="img/thumbnail-big1.jpg" alt="Thumb"></div>
						<div class="featured-world-news-post">
						<h5>Featured World News Post Title</h5>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias. Ab veniam atque eius...
							<div class="like-comment-readmore">
								<i class="fa fa-thumbs-o-up"> 08</i>
								<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>
								<a class="read-more" href="#">Read More</a>
							</div> <!-- /.like-comment-readmore -->
						</div>
					</section> <!-- /#featured-world-news -->


					<ul>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-1.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-2.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-3.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-4.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-5.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-6.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-7.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
								<div class="ccr-thumbnail">
									<img src="img/thumbnail-small-8.jpg" alt="thumbnail-small-1.jpg">
									<p><a href="#postlink">Read More</a></p>
								</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
					</ul>

				</section> <!-- / #ccr-world-news -->




				<section class="bottom-border"></section>

				<section id="ccr-sports-gallery">
					<div class="ccr-gallery-ttile">
							<span></span> 
							<p>Sports Gallery</p>
					</div> <!-- .ccr-gallery-ttile -->

					<section class="featured-sports-news">
						<div class="featured-sports-newss-img"><img src="img/sports-thumb-1.jpg" alt="Thumb"></div>
						<div class="featured-sports-news-post">
						<h5>Featured Sports News Post Title</h5>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, quod, nostrum, corrupti, maxime quis doloribus debitis id consectetur laudantium iure aperiam soluta consequuntur modi accusamus molestias. Ab veniam atque eius...
							<div class="like-comment-readmore">
								<i class="fa fa-thumbs-o-up"> 08</i>
								<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>
								<a class="read-more" href="#">Read More</a>
							</div> <!-- /.like-comment-readmore -->
						</div>
					</section> <!-- /#featured-sports-news -->

					<ul>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-2.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
						<li>
							
							<div class="ccr-thumbnail">
								<img src="img/sports-thumb-3.jpg" alt="thumbnail-small-1.jpg">
								<p><a href="#postlink">Read More</a></p>
							</div>
							<h5><a href="#">Lorem ipsum is simply dummy text...</a></h5>
						</li>
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
				
				</section> <!-- /#ccr-sports-gallery -->

				<section class="bottom-border"></section>








		</section><!-- /.col-md-8 / #ccr-left-section -->



		<aside id="ccr-right-section" class="col-md-4 ccr-home">
			<section id="social-buttons">
				 <ul>
				 	<li>
				 		<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>

						<p><span class="bubble"></span><span class="count">202</span> Like</p>
				 	</li>
				 	<li>
				 		<a href="#"  class="linkedin"><i class="fa fa-linkedin"></i></a>
						<p><span class="bubble"></span><span class="count">202</span> Like</p>
				 	</li>
				 	<li>
				 		<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						<p><span class="bubble"></span><span class="count">202</span> Follow</p>
				 	</li>
				 	<li>
				 		<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
						<p><span class="bubble"></span><span class="count">202</span> Like</p>
				 	</li>
				 </ul>
					
			</section>  <!-- /#social-buttons -->
			
			<section id="sidebar-popular-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Popular Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
					<li>
						<img src="img/sports-thumb-10.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/thumbnail-small-7.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/sports-thumb-5.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/thumbnail-small-2.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/thumbnail-small-5.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
				</ul>

			</section> <!-- /#sidebar-popular-post -->

			<section id="sidebar-video-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Video Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->

				<div class="sidebar-video">
				<iframe width="340" height="195" src="//www.youtube.com/embed/Ak8f8yTPRRc" frameborder="0" allowfullscreen></iframe>
				CodexCoder creates spectacular Premium WordPress Themes, WordPress Plugins, HTML Templates, PSD Template and more...
				</div>
				<div class="date-like-comment">
					<a href="#" class="like"><i class="fa fa-thumbs-o-up"></i> 08</a>
					<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>
				</div>
			</section>  <!-- /#sidebar-video-post -->

			<section id="ccr-calender">

				<table id="calendar">
				<caption >February 2014</caption>
				<thead data-iceapc="1">
				<tr>
					<th scope="col" title="Monday">M</th>
					<th scope="col" title="Tuesday">T</th>
					<th scope="col" title="Wednesday">W</th>
					<th scope="col" title="Thursday">T</th>
					<th scope="col" title="Friday">F</th>
					<th scope="col" title="Saturday">S</th>
					<th scope="col" title="Sunday">S</th>
				</tr>
				</thead>

				<tfoot data-iceapc="4">
				<tr data-iceapc="3">
					<td colspan="3" id="prev"><a href="#" title="Previous">&laquo; Jan</a></td>
					<td class="pad">&nbsp;</td>
					<td colspan="3" id="next" class="pad"><a href="#" title="Next">Mar &raquo;</a></td>
				</tr>
				</tfoot>

				<tbody>
				<tr>
					<td></td><td></td><td></td><td></td><td></td><td>1</td><td >2</td>
				</tr>
				<tr>
					<td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td>
				</tr>
				<tr>
					<td>10</td><td>11</td><td>12</td><td>13</td><td><a href="#" title="Post">14</a></td><td>15</td><td>16</td>
				</tr>
				<tr>
					<td>17</td><td id="today">18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
				</tr>
				<tr>
					<td>24</td><td>25</td><td>26</td><td>27</td><td>28</td>
					<td></td><td></td>
				</tr>
				</tbody>
				</table>

			</section>


			<section id="sidebar-older-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Older Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
					<li>
						<img src="img/sports-thumb-10.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/thumbnail-small-7.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/sports-thumb-5.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/thumbnail-small-2.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
					<li>
						<img src="img/thumbnail-small-5.jpg" alt="Avatar">
						<a href="#">This is the first popular post</a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17">2014-02-17</time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i> 08</a>
							<a class="comments" href="#"><i class="fa fa-comments-o"></i> 49</a>
						</div>
					</li>
				</ul>

			</section> <!-- /#sidebar-older-post -->

			<section id="sidebar-entertainment-post">
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Entertainment</strong></p>
				</div> <!-- .ccr-gallery-ttile -->

				<div class="sidebar-entertainment">
					<img src="img/entertainment.jpg" alt="entertainment">
					<a href="#">Miss Joly loves you to share her tell. Are you ready?</a>
				</div>
				<div class="date-like-comment">
					<a href="#" class="like"><i class="fa fa-thumbs-o-up"></i> 08</a>
					<a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>
				</div>
			</section>  <!-- /#sidebar-entertainment-post -->


			<section id="ccr-sidebar-add-place">
				<div class="sidebar-add-place">
					370x250 px
				</div> 
			</section> <!-- /#ccr-sidebar-add-place -->


			<section id="ccr-sidebar-newslater">
				
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><label for="sb-newslater"><strong>Newslater</strong></label></p>
				</div> <!-- .ccr-gallery-ttile -->
				
				<div class="sidebar-newslater-form">
					<form class="ccr-gallery-ttile" action="#">
						<input type="email" id="sb-newslater" name="sb-newslater" placeholder="Enter your email address" required>
						<button type="submit">Subscribe</button>

					</form>
				</div> <!-- /.sidebar-newslater-form -->
				
			</section> <!-- /#ccr-sidebar-newslater -->

			<section id="ccr-find-on-fb">
				<div class="find-fb-title">
					<span><i class="fa fa-facebook"></i></span> Find us on Facebook
				</div> <!-- /.find-fb-title -->
				<div class="find-on-fb-body">

					<div class="fb-like-box" data-href="https://www.facebook.com/codexcoderltd/" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>

				</div> <!-- /.find-on-fb-body -->
			</section> <!-- /#ccr-find-on-fb -->


		</aside><!-- / .col-md-4  / #ccr-right-section -->


	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->
<?php include './footer.php'; ?>