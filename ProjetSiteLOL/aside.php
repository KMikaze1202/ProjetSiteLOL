<aside id="ccr-right-section" class="col-md-4 ccr-home">
			
			<section id="sidebar-popular-post">
                        <?php
                           $PopularArticles = get_popular_5_articles_info();
                        ?>
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Popular Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
                                <?php
                                    foreach ($PopularArticles as $PopularArticle) {
                                ?>
					<li>
						<img src="img/sports-thumb-10.jpg" alt="Avatar">
						<a href=single.php?ArticleId=<?php echo $PopularArticle['ArticleId'] ?>"><?php echo $PopularArticle['Title']; ?></a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17"><?php echo $PopularArticle['PublicationDate'] ?></time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i><?php echo $PopularArticle['Likes'] ?></a>
                                                        <a class="comments" href="single.php?ArticleId=<?php echo $PopularArticle['ArticleId'] ?>#comments"><i class="fa fa-comments-o"></i><?php echo count_comments_by_article_id($PopularArticle['ArticleId']) ?></a>
						</div>
					</li>
                                <?php } ?>
				</ul>

			</section> <!-- /#sidebar-popular-post -->
			<section id="sidebar-older-post">
                        <?php
                           $OlderArticles = get_older_5_articles_info();
                        ?>
				<div class="ccr-gallery-ttile">
					<span></span> 
					<p><strong>Older Post</strong></p>
				</div> <!-- .ccr-gallery-ttile -->
				<ul>
                                <?php
                                    foreach ($OlderArticles as $OlderArticle) {
                                ?>
					<li>
						<img src="img/sports-thumb-10.jpg" alt="Avatar">
						<a href=single.php?ArticleId=<?php echo $OlderArticle['ArticleId'] ?>"><?php echo $OlderArticle['Title']; ?></a>
						<div class="date-like-comment">
							<span class="date"><time datetime="2014-02-17"><?php echo $OlderArticle['PublicationDate'] ?></time></span>
							<a class="like" href="#"><i class="fa fa-thumbs-o-up"></i><?php echo $OlderArticle['Likes'] ?></a>
                                                        <a class="comments" href="single.php?ArticleId=<?php echo $OlderArticle['ArticleId'] ?>#comments"><i class="fa fa-comments-o"></i><?php echo count_comments_by_article_id($OlderArticle['ArticleId']) ?></a>
						</div>
					</li>
                                    <?php } ?>
				</ul>
			</section> <!-- /#sidebar-older-post -->
		</aside><!-- / .col-md-4  / #ccr-right-section -->