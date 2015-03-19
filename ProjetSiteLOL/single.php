<?php 
session_start();
include_once 'functions.inc.php';
dbConnect();

include './header.php';

$id_article = (int) $_GET['ArticleId'];
$article = get_articles_info_by_id($id_article);
$keywords = get_keywords_by_article_id($id_article);

$content_comment = trim(filter_input(INPUT_POST, "comment"));


if (filter_has_var(INPUT_POST, "submit")) {
    if (!empty($content_comment)) {        
            /**
             * Attribue les champs au tableau à inserer dans la base de donnée
             * et les ajoute à la base de de donnée en affichant un message de réussite
             */
            $acomment = array();
            $acomment["Comment"] = $content_comment;
            $acomment["ArticleId"] = $id_article;
            $acomment["UserId"] = $_SESSION['idUserConnected'];
            addComment($acomment);
            $_SESSION['message'] = "Vous avez poster un commentaire";
            $_SESSION['MessageType'] = "information";
        
    } else {
        $_SESSION['message'] = "Remplissez tout les champs";
        $_SESSION['MessageType'] = "error";
    }
}
$comments = get_all_comments_infos($id_article);
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
                            
				<div class="ccr-gallery-ttile" id="comments">
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
					<form enctype="multipart/form-data" method="post" id="commentform">
					<textarea id="comment" name="comment" placeholder="Message" rows="8" required></textarea>
					<input name="submit" type="submit" id="submit" value="Submit">
					
					</form> <!-- /#commentform -->
					
				</div> <!-- /#respond -->

			</section> <!-- /#ccr-respond -->


				


		</section><!-- /.col-md-8 / #ccr-left-section -->



		<?php include './aside.php'; ?>


	</div><!-- /.container -->
</section><!-- / #ccr-main-section -->

<?php include './footer.php'; ?>