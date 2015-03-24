<?php
$Keyword = trim(filter_input(INPUT_POST, "Keyword"));

if (filter_has_var(INPUT_POST, "search")) {
    if (!empty($Keyword)) {
        $Keyword = trim(filter_input(INPUT_POST, "Keyword"));
        header('Location: search.php?Keyword='.$Keyword);
        exit;
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="" >
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Acceuil - Nouveauté De League </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/Heure.js"></script>
        <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>




        <header id="ccr-header">
            <section id="ccr-nav-top" class="fullwidth">
                <div class="">
                    <div class="container">
                        <nav class="top-menu">
                            <ul class="left-top-menu">
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="contact.html">Nous Contacter</a></li>
                            </ul><!-- /.left-top-menu -->

                            <ul class="right-top-menu pull-right">
                                <?php if (isset($_SESSION['UserConnect'])): ?>
                                    <li><a>Bonjour, <?php echo $_SESSION['UserFirstName'] . ' ' . $_SESSION['UserLastName']; ?></a></li>
                                    <li><a href="logout.php">Déconnexion</a></li>
                                    <li><a href="add_post.php">Ajouter un Article</a></li>
                                <?php else : ?>
                                    <li><a href="login.php">Connexion</a></li>
                                    <li><a href="register.php">Inscription</a></li>
                                <?php endif; ?>

                                
                                
                                <li>
                                    <form enctype="multipart/form-data" method="post">
                                        <input type="search" name="Keyword" placeholder="Recherche..." required>
                                        <button type="submit" name="search"><i class="fa fa-search"></i></button>
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
                        <a href="index.php" class="navbar-brand">
                            <img src="img/logo.png" alt="Side Logo" />
                            <h1>LOL <span>News</span></h1>
                            <h3>Les Nouveautés De LOL</h3>
                        </a>
                    </div> <!-- / .navbar-header -->

                    <div class="add-space">
                        <img src="img/banner.png" alt="Banner" />
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
                                <li><a href="blog.php">Articles</a></li>
                                <?php if (isset($_SESSION['UserConnect'])){ ?>                                    
                                    <li><a href="add_post.php">Ajouter un Article</a></li>
                                    <?php if (($_SESSION['IsAdmin'] == 1) || ($_SESSION['IsModerator'] == 1)){ ?>
                                        <li><a href="users_modo.php">Gestion Utilisateurs</a></li>
                                        <li><a href="validate_articles.php">Validation Articles</a></li>
                                        <?php if (($_SESSION['IsAdmin'] == 1)){ ?>
                                        <li><a href="users_admin.php">Gestion Moderateurs</a></li>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </ul> <!-- /  .nav -->
                        </div><!-- /  .collapse .navbar-collapse  -->

                        <div id="currentTime" class="pull-right current-time">
                            <i class="fa fa-clock-o"> 
                            <b id="ejs_heure"></b></i>                          
                        </div><!-- / #currentTime -->

                    </div>	<!-- /.container -->
                </nav> <!-- /.main-menu -->
            </section> <!-- / #ccr-nav-main -->
            <section id="ccr-nav-below-main">
                <nav class="second-menu">                        
                    <div class="message">
                        <?php if (!empty($_SESSION['message'])): ?>
                                <div class="message"><?php echo $_SESSION['message'] ?></div>
                            <?php endif;
                            unset($_SESSION['message']);
                            ?>        
                    </div>    

                </nav><!-- /.second-menu -->
            </section><!-- / #ccr-nav-below-main -->

        </header> <!-- /#ccr-header -->