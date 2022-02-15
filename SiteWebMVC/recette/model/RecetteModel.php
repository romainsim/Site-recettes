<?php


namespace recette\model;

use \recette\entity\Recette;
use \recette\model\Model;

class RecetteModel extends Model {

    public function __construct() {
        $this->table = "Recette";
        parent::__construct($this->table);
    }

    public function findAll() { // cherche toutes les recettes
        $data = array(
            "fields" => "designation,idcategorie",
        );
        $arrayRecette = $this->find($data);
        $newTab = array();

        foreach ($arrayRecette as $uneRecette) {
            $newTab[] = new Recette($uneRecette);
        }

        return $newTab;
    }

    public function findRandom() { // cherche 6 recettes aléatoires
        $data = array(
            "order" => "RAND()",
            "limit" => "6",
        );

        $arrayRandom = $this->find($data);
        $randomTab = array();

        foreach ($arrayRandom as $uneRecette) {
            $randomTab[] = new Recette($uneRecette);
        }

        return $randomTab;
    }

    public function findOne($id) { // cherche une recette via son id
        $data = $this->read($id);
        return new Recette($data);
    }

    public function findByCat($categorie) { // cherche les recettes par idcategorie
        $arrayCategorie = $this->categorie($categorie);
        $categorieTab = array();

        foreach($arrayCategorie as $uneRecette) {
            $categorieTab[] = new Recette($uneRecette);
        }

        return $categorieTab;
    }

    public function saveCompte($data) { // ajoute un compte membre
        return $this->save($data);
    }

    public function connexionMembre($data) { // connecte un membre
        return $this->verifMembre($data);
    }

    public function loginAdmin($id,$pwd) { // connecte un admin
        return $this->logA($id,$pwd);
    }

    public function ajoutR ($data) { // ajoute une recette
        return $this->addR($data);
    }

    public function saveRes ($data) { // ajoute une réservation
        return $this->ajoutReservation($data);
    }
}