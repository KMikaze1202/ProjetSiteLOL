<?php
session_start();
include_once 'functions.inc.php';
dbConnect();
include './header.php';
$Keyword = (string) $_GET['Keyword'];


?>

<section id="ccr-main-section">
    <div class="container">


        <section id="ccr-left-section" class="col-md-8">

            <div class="current-page">
                <a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> Blog 1
            </div> <!-- / .current-page -->

            <section id="ccr-blog">
                <?php
                $articles = get_all_articles_infos_by_tag($Keyword);
                if ($articles != 0) {
                foreach ($articles as $article) {
                    ?>
                    <article>

                        <figure class="blog-thumbnails">
                            <a href=single.php?ArticleId=<?php echo $article['ArticleId'] ?>><img src="<?php echo $article['Image']; ?>" alt="Article Image "></a>
                        </figure> <!-- /.blog-thumbnails -->
                        <div class="blog-text">
                            <h1><a href=single.php?ArticleId=<?php echo $article['ArticleId'] ?>><?php echo $article['Title']; ?></a></h1>
                            <p>
                                <?php echo $article['Abstract']; ?>
                            </p>


                            <div class="meta-data">			
                                <a class="like"><i class="fa fa-thumbs-o-up"><?php echo $article['Likes'] ?></i></a>
                                <a class="comments" href="single.php?ArticleId=<?php echo $article['ArticleId'] ?>#comments"><i class="fa fa-comments-o"></i><?php echo count_comments_by_article_id($article['ArticleId']) ?></a>			
                                <span class="read-more"><a href="single.php?ArticleId=<?php echo $article['ArticleId'] ?>">Read More</a></span>
                            </div>
                        </div> <!-- /.blog-text -->

                    </article>
                <?php }
                }  else {
                    echo 'Aucuns articles ne contient le tag '.$Keyword;    
                }
                ?>

                <div class="clearfix"></div>



            </section> <!-- /#ccr-blog -->








        </section><!-- /.col-md-8 / #ccr-left-section -->



        <?php include './aside.php'; ?>


    </div><!-- /.container -->
</section><!-- / #ccr-main-section -->

<?php include './footer.php'; ?>