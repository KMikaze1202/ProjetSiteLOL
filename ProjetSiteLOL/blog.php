<?php
session_start();
include_once 'functions.inc.php';
dbConnect();

include './header.php';
?>

<section id="ccr-main-section">
    <div class="container">


        <section id="ccr-left-section" class="col-md-8">

            <div class="current-page">
                <a href="index.html"><i class="fa fa-home"></i> <i class="fa fa-angle-double-right"></i></a> Blog 1
            </div> <!-- / .current-page -->

            <section id="ccr-blog">
                <?php
                $articles = get_all_articles_info();
                foreach ($articles as $article) {
                    ?>
                    <article>

                        <figure class="blog-thumbnails">
                            <img src="<?php echo $article['Image']; ?>" alt="Article Image ">
                        </figure> <!-- /.blog-thumbnails -->
                        <div class="blog-text">
                            <h1><a href="single.html"><?php echo $article['Title']; ?></a></h1>
                            <p>
                                <?php echo $article['Abstract']; ?>
                            </p>


                            <div class="meta-data">			
                                <a href="#" class="like"><i class="fa fa-thumbs-o-up"></i> 08</a>
                                <a href="#" class="comments"><i class="fa fa-comments-o"></i> 49</a>			
                                <span class="read-more"><a href="single.php?ArticleId=<?php echo $article['ArticleId'] ?>">Read More</a></span>
                            </div>
                        </div> <!-- /.blog-text -->

                    </article>
                <?php } ?>

                <div class="clearfix"></div>
                <nav class="nav-paging">
                    <ul>
                        <li><a href="#pre"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><span class="current">3</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#next"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </nav>



            </section> <!-- /#ccr-blog -->








        </section><!-- /.col-md-8 / #ccr-left-section -->



        <?php include './aside.php'; ?>


    </div><!-- /.container -->
</section><!-- / #ccr-main-section -->

<?php include './footer.php'; ?>