<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Papilles - Réservation</title>

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

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

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

    <section id="fh5co-hero" class="no-js-fullheight" style="background-image: url(../../images/food_reservation.webp);" data-next="yes">
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
                        <h2 class="animate-box">Venez apprendre nos recettes</h2>
                        <h3 class="animate-box">Prenez rendez-vous avec nos chefs, pour apprendre une ou plusieurs de vos recettes préférées</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="fh5co-learn-more animate-box">
            <a href="#" class="scroll-btn">
                <span class="text">Faites votre choix</span>
                <span class="arrow"><i class="icon-chevron-down"></i></span>
            </a>
        </div>
    </section>
    <!-- END #fh5co-hero -->

    <section id="fh5co-pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">1 recette</h2>
                        <div class="price"><sup class="currency">€</sup>12<small>/personne</small></div>
                        <p>Apprenez une recette</p>
                        <hr>
                        <ul class="pricing-info">
                            <li>Recette de votre choix</li>
                            <li>Ingrédients & ustensiles fournis</li>
                        </ul>
                        <a href="index.php?reserver=1" class="btn btn-default btn-sm">Choisissez</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">Repas complet</h2>
                        <div class="price"><sup class="currency">€</sup>35<small>/personne</small></div>
                        <p>Apprenez à cuisiner un repas complet de votre choix</p>
                        <hr>
                        <ul class="pricing-info">
                            <li>1 entrée</li>
                            <li>1 plat</li>
                            <li>1 dessert</li>
                            <li>Ingrédients & ustensiles fournis</li>
                        </ul>
                        <a href="index.php?reserver=2" class="btn btn-default btn-sm">Choisissez</a>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="price-box popular">
                        <div class="popular-text">Prix réduit</div>
                        <h2 class="pricing-plan">Demi-journée</h2>
                        <div class="price"><sup class="currency">€</sup>65<small>/personne</small></div>
                        <p>Passez la demi-journée à cuisiner avec l'un de nos chefs, qui cuisinera pour vous votre diner</p>
                        <hr>
                        <ul class="pricing-info">
                            <li>Repas cuisiné par notre chef</li>
                            <li>3 recettes de votre choix à apprendre</li>
                            <li>Ingrédients & ustensiles fournis</li>
                        </ul>
                        <a href="index.php?reserver=3" class="btn btn-primary btn-sm">Choisissez</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box">
                    <div class="price-box">
                        <h2 class="pricing-plan">Journée complète</h2>
                        <div class="price"><sup class="currency">€</sup>150<small>/personne</small></div>
                        <p>Passez la journée à cuisiner avec l'un de nos chefs, qui cuisinera pour vous votre déjeuner et votre diner</p>
                        <hr>
                        <ul class="pricing-info">
                            <li>2 repas cuisinés par notre chef</li>
                            <li>6 recettes de votre choix à apprendre</li>
                            <li>Dégustation de vins en fin de journée</li>
                            <li>Ingrédients et ustensiles fournis</li>
                        </ul>
                        <a href="index.php?reserver=4" class="btn btn-default btn-sm">Choisissez</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- END #fh5co-pricing -->


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
