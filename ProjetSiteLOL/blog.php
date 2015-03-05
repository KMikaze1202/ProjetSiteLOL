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