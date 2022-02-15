<?php
namespace recette\controller\admin;

use \recette\model\RecetteModel;

class ControllerAdmin {
    private $model;

    public function __construct() {
        $this->model = new RecetteModel();
    }

    public function logAdmin() {
        if (isset($_POST["logAdmin"])) {
            $id = htmlspecialchars($_POST['login']);
            $pwd = hash('sha256',$_POST['pwd']);
            unset($_POST);
            $this->model->loginAdmin($id, $pwd);
        } else
            include ('recette/view/admin/loginAdmin.php');
    }

    public function newRecette() {
        if (isset($_POST["ajoutR"])) {
            if (isset($_POST['categorie']))
                $categorie = $_POST['categorie'];
            else
                $categorie = '';

            if (isset($_POST['designation']))
                $designation = htmlspecialchars($_POST['designation']);
            else
                $designation = '';

            if (isset($_POST['description']))
                $description = htmlspecialchars($_POST['description']);
            else
                $description = '';

            if (isset($_POST['ingredients']))
                $ingredients = htmlspecialchars($_POST['ingredients']);
            else
                $ingredients = '';

            if (isset($_POST['recette']))
                $recette = htmlspecialchars($_POST['recette']);
            else
                $recette = '';

            if (isset($_POST['preparation']))
                $preparation = htmlspecialchars($_POST['preparation']);
            else
                $preparation = 0;

            if (isset($_POST['cuisson']))
                $cuisson = htmlspecialchars($_POST['cuisson']);
            else
                $cuisson = 0;

            if (isset($_FILES['image'])) {
                $image = $_FILES["image"]["name"];
                $tmp_name = $_FILES["image"]["tmp_name"];
            } else {
                $image = '';
            }

            $target_dir = "../../../images/";
            move_uploaded_file($tmp_name, "$target_dir/$image");
            $img = "images/" . $image;

            $data=array(
                "idcategorie"=>$categorie,
                "designation"=>$designation,
                "description"=>$description,
                "ingredients"=>$ingredients,
                "recette"=>$recette,
                "tempspreparation"=>$preparation,
                "tempscuisson"=>$cuisson,
                "imgrecette"=>$img
            );
            unset($_POST);
            $this->model->ajoutR($data);
            include('recette/view/admin/ajoutRecette.php');
        } else
            include('recette/view/admin/ajoutRecette.php');
    }

}