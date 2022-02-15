<?php
session_start();
include('utile.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Papilles - Desserts</title>

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="../../css/flexslider.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../../css/icomoon.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../../css/bootstrap.css">

    <link rel="stylesheet" href="../../css/style.css">



    <!-- Modernizr JS -->
    <script src="../../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../../js/respond.min.js"></script>
    <![endif]-->

</head>


<!--
    INFO:
    Add 'boxed' class to body element to make the layout as boxed style.
    Example:
    <body class="boxed">
-->
<body>

<!-- Loader -->
<div class="fh5co-loader"></div>

<div id="fh5co-page">
    <section id="fh5co-header">
        <div class="container">
            <nav role="navigation">
                <ul class="pull-left left-menu">
                    <li><a href="index.php?id=1">Entrées</a></li>
                    <li><a href="index.php?id=2">Plats</a></li>
                    <li><a href="index.php?id=3">Desserts</a></li>
                    <li><a href="index.php?id=4">Réservation</a></li>
                </ul>
                <h1 id="fh5co-logo"><a href="../../index.php">Papilles<span>.</span></a></h1>
                <ul class="pull-right right-menu">
                    <?php if(isset($_SESSION['login'])) : ?>
                        <li><p class="login">Bonjour <?=$_SESSION['login'] ?></p></li>
                        <li><a href="logout.php">Déconnexion</a></li>
                    <?php else : ?>
                        <li><a href="index.php?action=login">S'identifier</a></li>
                        <li class="fh5co-cta-btn"><a href="index.php?action=save">Créer un compte</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </section>
    <!-- #fh5co-header -->

    <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(../../images/food_dessert.webp);" data-next="yes">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="fh5co-intro no-js-fullheight">
                <div class="fh5co-intro-text">
                    <!--
                        INFO:
                        Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
                        Example:
                        <div class="fh5co-right-position">
                    -->
                    <div class="fh5co-center-position">
                        <h2 class="animate-box">Nos desserts</h2>
                        <h3 class="animate-box">Découvrez nos meilleures recettes de desserts, pour terminer votre repas en douceur.</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="fh5co-learn-more animate-box">
            <a href="#" class="scroll-btn">
                <span class="text">Voir nos recettes</span>
                <span class="arrow"><i class="icon-chevron-down"></i></span>
            </a>
        </div>
    </section>
    <!-- END #fh5co-hero -->


    <div id="fh5co-about">
        <div class="container">

            <div class="row">
                <?php foreach ($content as $key => $value) : ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="fh5co-person">
                        <figure class="animate-box">
                            <img src=<?=$value->img_recette ?> alt="img_food" class="img-responsive">
                        </figure>
                        <h3 class="fh5co-name animate-box"><?=$value->designation ?></h3>
                        <h4 class="fh5co-designation animate-box"><?=$value->description ?></h4>
                        <p class="fh5co-bio animate-box"><?=tronquer_texte($value->recette) ?></p>
                        <ul class="fh5co-social">
                            <li class="animate-box"><a href="index.php?recette=<?=$value->id_recette ?>">Voir la recette</a></li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- END #fh5co-about -->



</div>
<!-- END #fh5co-page -->


<!-- jQuery -->
<script src="../../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../../js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="../../js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="../../js/jquery.magnific-popup.min.js"></script>
<script src="../../js/magnific-popup-options.js"></script>

<!-- Main JS (Do not remove) -->
<script src="../../js/main.js"></script>


</body>
</html>
<?php
include('footer.php');
?>
