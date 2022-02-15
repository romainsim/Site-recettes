<?php

namespace recette\controller;

use \recette\model\RecetteModel;

class ControllerRecette
{
    private $model;

    public function __construct() {
        $this->model = new RecetteModel();
    }

    public function getRandom() {
        $content = $this->model->findRandom();

        include('recette/view/accueil.php');
    }

    public function getEntree() {
        $content = $this->model->findByCat(1);

        include('recette/view/entree.php');
    }

    public function getPlat() {
        $content = $this->model->findByCat(2);

        include('recette/view/plat.php');
    }

    public function getDessert() {
        $content = $this->model->findByCat(3);

        include('recette/view/dessert.php');
    }

    public function getReservation() {
        include('recette/view/reservation.php');
    }

    public function getRecette($id) {
        $content = $this->model->findOne($id);

        include('recette/view/vue_recette.php');
    }

    public function ajouterCompte() {
        if(isset($_POST["account"])){
            $nom=htmlspecialchars($_POST["nom"]);
            $prenom=htmlspecialchars($_POST["prenom"]);
            $email=htmlspecialchars($_POST["email"]);
            $pwd = hash('sha256',$_POST['pwd']);
            $tel= $_POST['telephone'];

            $data=array(
                "Nom"=>$nom,
                "Prenom"=>$prenom,
                "Email"=>$email,
                "Password"=>$pwd,
                "Telephone"=>$tel,
            );

            unset($_POST);
            $content = $this->model->saveCompte($data);

            if ($content == 1) {
                echo '<body onLoad="alert(\'Enregistrement effectué\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../../index.php">';
            } else {
                echo '<body onLoad="alert(\'Enregistrement a échoué\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../../index.php?action=save">';
            }
        }
        else {
            include('recette/view/creer_compte.php');
        }
    }

    public function connecterMembre() {
        if (isset($_POST['log'])) {
            $email=htmlspecialchars($_POST["email"]);
            $pwd = hash('sha256',$_POST['pwd']);

            $data=array(
                "Email"=>$email,
                "Password"=>$pwd,
            );

            unset($_POST);
            $content = $this->model->connexionMembre($data);
            if ($content) {
                session_start();
                $_SESSION['login'] = $email;
                header('location: index.php');
            } else {
                echo '<body onLoad="alert(\'Membre non reconnu\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../../index.php?action=login">';
            }
        }
        else {
            include('recette/view/connexion.php');
        }
    }

    public function reservation($number) {
        $content = $this->model->findAll();

        include('recette/view/vue_reservation.php');
    }

    public function payer($number,$personne) {
        if (isset($_POST["reserver"])) {
            $date = $_POST['date'];
            $heure = $_POST['heure'];
            $personne = $_POST['personne'];
            if (isset($_POST['entree1']))
                $entree1 = $_POST['entree1'];
            else
                $entree1 = '';
            if (isset($_POST['entree2']))
                $entree2 = $_POST['entree2'];
            else
                $entree2 = '';
            if (isset($_POST['dessert2']))
                $dessert2 = $_POST['dessert2'];
            else
                $dessert2 = '';
            if (isset($_POST['plat1']))
                $plat1 = $_POST['plat1'];
            else
                $plat1 = '';
            if (isset($_POST['plat2']))
                $plat2 = $_POST['plat2'];
            else
                $plat2 = '';
            if (isset($_POST['dessert1']))
                $dessert1 = $_POST['dessert1'];
            else
                $dessert1 = '';

            $data = array(
                "date"=>$date,
                "heure"=>$heure,
                "personne"=>$personne,
                "entree1"=>$entree1,
                "entree2"=>$entree2,
                "plat1"=>$plat1,
                "plat2"=>$plat2,
                "dessert1"=>$dessert1,
                "dessert2"=>$dessert2
            );
            unset($_POST);
            $this->model->saveRes($data);
        }

        include('recette/view/paiement.php');
    }
}