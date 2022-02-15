<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Papilles - Ajout recette</title>

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
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="../css/flexslider.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">




    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="fh5co-page">
    <section id="fh5co-header">
        <div class="container">
            <nav role="navigation">
                <h1 id="fh5co-logo"><a href="index.php">Papilles<span>.</span></a></h1>
            </nav>
        </div>
    </section>
    <!-- #fh5co-header -->

    <section id="fh5co-hero" class="js-fullheight" style="background-image: url(../../../images/food_acceuil.jpg);" data-next="yes">
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
                        <form id="formulaire" method="post" action="indexAdmin.php" enctype="multipart/form-data">
                            <fieldset>
                                <legend>.</legend>
                                <p>
                                    <label for="cat">Categorie :</label>
                                    <select id="cat" name="categorie">
                                        <option value="1">Entrée</option>
                                        <option value="2">Plat</option>
                                        <option value="3">Dessert</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="desi">Nom de la recette :</label>
                                    <input type="text" id="desi" name="designation"  />
                                </p>
                                <p>
                                    <label for="desc">Description :</label>
                                    <textarea id="desc" name="description" placeholder="Pas plus de 42 caractères."></textarea>
                                </p>
                                <p>
                                    <label for="ing">Ingredients :</label>
                                    <textarea id="ing" name="ingredients" placeholder="Exemple : - 100g de sucre.<br /> -200g de farine. ..."></textarea>
                                </p>
                                <p>
                                    <label for="rec">Recette :</label>
                                    <textarea id="rec" name="recette" placeholder="Exemple : 1/ Préchauffer le four à 220 degrés.<br /><br /> 2/ ... NE PAS METTRE D'APOSTROPHE"></textarea>
                                </p>
                                <p>
                                    <label for="prepa">Temps de préparation :</label>
                                    <input type="text" id="prepa" name="preparation"  />
                                </p>
                                <p>
                                    <label for="cuiss">Temps de cuisson :</label>
                                    <input type="text" id="cuiss" name="cuisson"  />
                                </p>
                                <p>
                                    <label for="imageRecette">Image : </label>
                                    <input type="file" id="imageRecette" name="image" accept="image" />
                                </p>
                                <p class="submit">
                                    <input type="submit" id="btnSubmit" name="ajoutR" value="Ajouter" />
                                </p>
                                <p>
                                    <a href="../../../logout.php">Déconnexion</a>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>
