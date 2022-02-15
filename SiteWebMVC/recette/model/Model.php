<?php

namespace recette\model;
use recette\config\Database;
use \PDO;

class Model
{
    private $connexion;
    protected $table;

    public function __construct() {
        $db = new Database();

        $this->connexion = $db->getConnection();
    }

    public function read($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE idrecette=" . $id;

        $retour = $this->connexion->query($sql);
        $content = $retour->fetch(PDO::FETCH_ASSOC);

        return $content;

    }

    public function categorie($cat) {
        $sql = "SELECT * FROM ". $this->table . " WHERE idcategorie =" . $cat;
        $prepa = $this->connexion->prepare($sql);

        $prepa->execute();

        $data = $prepa->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    public function find($data = array())
    {
        $conditions = "1";
        $fields = "*";
        $limit = "";
        $order = $this->table . ".idrecette DESC";
        if (isset($data["conditions"])) {
            $conditions = $data["conditions"];
        }
        if (isset($data["fields"])) {
            $fields = $data["fields"];
        }
        if (isset($data["limit"])) {
            $limit = "LIMIT " . $data["limit"];
        }
        if (isset($data["order"])) {
            $order = $data["order"];
        }


        $sql = "SELECT $fields FROM " . $this->table . " WHERE $conditions ORDER BY $order $limit";
        $prepa = $this->connexion->prepare($sql);

        $prepa->execute();

        $data = $prepa->fetchAll(PDO::FETCH_ASSOC);
        return $data;

    }


    public function save($data)
    {
        $test=array(
            "Email"=>$data["Email"],
        );
        $existant = $this->verifMembre($test);
        if (!$existant) {
            $sql = "INSERT INTO Membre (";
            foreach ($data as $key => $value) {
                unset($data["id"]);
                $sql .= "`$key`,";
            }
            //suppression de la virgule
            $sql = substr($sql, 0, -1);
            $sql .= " ) VALUES (";
            foreach ($data as $key => $value) {
                if (is_numeric($value)) $sql .= $value . ",";
                else
                    $sql .= "'$value',";
            }
            $sql = substr($sql, 0, -1);
            $sql .= " )";


            //echo $sql;
            //Envoie de la requete

            $retour = $this->connexion->exec($sql);


            return $retour;
        } else {
            echo '<body onLoad="alert(\'Email déjà utilisé\')">';
            echo '<meta http-equiv="refresh" content="0;URL=../../index.php?action=save">';
        }
    }

    public function verifMembre($data) {
        $email = $data["Email"];

        if (isset($data["Password"])) {
            $pwd = $data["Password"];
            $prepa = $this->connexion->prepare("SELECT Email FROM Membre WHERE Email = :email AND Password = :pwd");
            $prepa->bindParam(':email',$email);
            $prepa->bindParam(':pwd',$pwd);
            $prepa->execute();
            $existe = $prepa->fetch(PDO::FETCH_ASSOC);

            if (is_array($existe))
                return true;
            else
                return false;

        }

        $prepa = $this->connexion->prepare("SELECT Email FROM Membre WHERE Email = :email");
        $prepa->bindParam(':email',$email);
        $prepa->execute();

        $existe = $prepa->fetch(PDO::FETCH_ASSOC);

        if (is_array($existe))
            return true;
        else
            return false;
    }

    public function logA ($id,$pwd)
    {
        $requete_preparee = $this->connexion->prepare("SELECT login FROM admin WHERE login = :login AND pwd = :pwd");
        $requete_preparee->bindParam(':login', $id);
        $requete_preparee->bindParam(':pwd', $pwd);
        $requete_preparee->execute();
        $data = $requete_preparee->fetch(PDO::FETCH_ASSOC);

        if (is_array($data)) {
            session_start();
            $_SESSION['login'] = $id;
            header('location: indexAdmin.php');
        } else {
            echo '<body onLoad="alert(\'Membre non reconnu...\')">';
            echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
        }
    }

    public function addR ($data) {
        $designation = $data["designation"];

        $requete = "SELECT * FROM Recette";
        $resultat = $this->connexion->query($requete);
        $total = $resultat->fetchAll(PDO::FETCH_OBJ);

        $existant = false;
        foreach ($total as $key => $value) { // teste si une recette est déjà dans la base de données.
            if ($designation == $value->designation)
                $existant = true;
        }

        if (!$existant) { // si la recette n'est pas dans la base de données alors on l'ajoute.
            $sql = "INSERT INTO Recette (";
            foreach ($data as $key => $value) {
                $sql .= "`$key`,";
            }
            //suppression de la virgule
            $sql = substr($sql, 0, -1);
            $sql .= " ) VALUES (";
            foreach ($data as $key => $value) {
                if (is_numeric($value)) $sql .= $value . ",";
                else
                    $sql .= "'$value',";
            }
            $sql = substr($sql, 0, -1);
            $sql .= " )";

            $retour = $this->connexion->exec($sql);

            echo "<script type=\"text/javascript\">";
            echo "alert('Enregistrement effectué');";
            echo "</script>";
        }
    }

    public function ajoutReservation($data) {
        $sql = "INSERT INTO Reservation (";
        foreach ($data as $key => $value) {
            unset($data["id"]);
            $sql .= "`$key`,";
        }
        //suppression de la virgule
        $sql = substr($sql, 0, -1);
        $sql .= " ) VALUES (";
        foreach ($data as $key => $value) {
            if (is_numeric($value)) $sql .= $value . ",";
            else
                $sql .= "'$value',";
        }
        $sql = substr($sql, 0, -1);
        $sql .= " )";

        $retour = $this->connexion->exec($sql);


        return $retour;
    }
}