<?php
use \recette\controller\ControllerRecette;

//autoload
function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //fin Autoload

if (isset($_GET["admin"])) {
    header('location: indexAdmin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Papilles</title>
</head>
<body>

<?php
$cRecette = new ControllerRecette();

if (isset($_GET['id'])) {
    if ($_GET['id'] == 1)
        $cRecette->getEntree();
    else if ($_GET['id'] == 2)
        $cRecette->getPlat();
    else if ($_GET['id'] == 3)
        $cRecette->getDessert();
    else if ($_GET['id'] == 4)
        $cRecette->getReservation();
} else if (isset($_GET['recette'])) {
    $id = $_GET['recette'];
    $cRecette->getRecette($id);
} else if (isset($_GET['action'])) {
    if (($_GET['action']) === "save")
        $cRecette->ajouterCompte();
    else if (($_GET['action']) === "login")
        $cRecette->connecterMembre();
} else if (isset($_GET['reserver'])) {
    $number = $_GET['reserver'];
    $cRecette->reservation($number);
} else if (isset($_GET['paiement'])) {
    $number = $_GET['paiement'];
    $personne = $_POST['personne'];
    $cRecette->payer($number,$personne);
    unset($_POST);
} else
    $cRecette->getRandom();
?>

</body>
</html>
