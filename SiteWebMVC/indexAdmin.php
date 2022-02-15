<?php
session_start();
use \recette\controller\admin\ControllerAdmin;

//autoload
function chargerClasse($classe)
{
    $classe=str_replace('\\','/',$classe);
    require $classe . '.php';
}

spl_autoload_register('chargerClasse'); //fin Autoload
$cAdmin = new ControllerAdmin();

if (isset($_SESSION['login']))
    $cAdmin->newRecette();
else
    $cAdmin->logAdmin();

?>