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
    <title>Papilles - Accueil</title>

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
                <h1 id="fh5co-logo"><a href="index.php">Papilles<span>.</span></a></h1>
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

    <section id="fh5co-hero" class="js-fullheight" style="background-image: url(../../images/food_acceuil.jpg);" data-next="yes">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="fh5co-intro js-fullheight">
                <div class="fh5co-intro-text">
                    <!--
                        INFO:
                        Change the class to 'fh5co-right-position' or 'fh5co-center-position' to change the layout position
                        Example:
                        <div class="fh5co-right-position">
                    -->
                    <div class="fh5co-center-position">
                        <form id=reservation method="post" action="../../index.php?paiement=<?=$number ?>">
                            <p><i>Choisissez la ou les recettes.</p>
                            <fieldset>
                                <p>
                                    <label for="dateR">Date :</label>
                                    <input type="date" id="dateR" name="date"  />
                                </p>
                                <p>
                                    <?php if($number == 1 || $number == 2) : ?>
                                    <label for="heureR">Heure :</label>
                                    <select name="heure">
                                        <option value="8">8h</option>
                                        <option value="10">10h</option>
                                        <option value="12">12h</option>
                                        <option value="14">14h</option>
                                        <option value="16">16h</option>
                                        <option value="18">18h</option>
                                    </select>
                                    <?php elseif($number == 3) : ?>
                                    <label for="heureR">Heure :</label>
                                    <select name="heure">
                                        <option value="8">Matin</option>
                                        <option value="14">Après-midi</option>
                                    </select>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    <label for="nbP">Nombre de personne(s) :</label>
                                    <input type="text" id="nbP" name="personne"  />
                                </p>
                                <p>
                                    <?php if ($number == 1) : ?>
                                        <label for="recetteR">Recette :</label>
                                        <select name="plat1">
                                        <?php foreach($content as $key => $value) {
                                            echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                        } ?>
                                        </select>
                                    <?php elseif ($number == 4) : ?>
                                        <label for="recetteR">Entrée 1 :</label>
                                        <select name="entree1">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 1)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Entrée 2 :</label>
                                        <select name="entree2">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 1)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Plat 1 :</label>
                                        <select name="plat1">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 2)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Plat 2 :</label>
                                        <select name="plat2">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 2)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Dessert 1 :</label>
                                        <select name="dessert1">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 3)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Dessert 2 :</label>
                                        <select name="dessert2">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 3)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                    <?php else : ?>
                                        <label for="recetteR">Entrée :</label>
                                        <select name="entree1">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 1)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Plat :</label>
                                        <select name="plat1">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 2)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                        <label for="recetteR">Dessert :</label>
                                        <select name="dessert1">
                                            <?php foreach($content as $key => $value) {
                                                if ($value->id_categorie == 3)
                                                    echo '<option value="'.$value->designation.'">'.$value->designation.'</option>';
                                            } ?>
                                        </select>
                                    <?php endif; ?>
                                </p>
                                <p class="submit">
                                    <input type="submit" id="btnSubmit" name="reserver" value="Envoyer" />
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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