<?php
namespace recette\entity;

class Recette
{
    public $id_recette;
    public $id_categorie;
    public $designation;
    public $description;
    public $ingredients;
    public $recette;
    public $temps_preparation;
    public $temps_cuisson;
    public $img_recette;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method))
            {
                $this->$method($value);

            }
        }
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param mixed $ingredients
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return mixed
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * @param mixed $recette
     */
    public function setRecette($recette)
    {
        $this->recette = $recette;
    }

    /**
     * @return mixed
     */
    public function getTempsPreparation()
    {
        return $this->temps_preparation;
    }

    /**
     * @param mixed $temps_preparation
     */
    public function setTempsPreparation($temps_preparation)
    {
        $this->temps_preparation = $temps_preparation;
    }

    /**
     * @return mixed
     */
    public function getTempsCuisson()
    {
        return $this->temps_cuisson;
    }

    /**
     * @param mixed $temps_cuisson
     */
    public function setTempsCuisson($temps_cuisson)
    {
        $this->temps_cuisson = $temps_cuisson;
    }

    /**
     * @return mixed
     */
    public function getIdRecette()
    {
        return $this->id_recette;
    }

    /**
     * @param mixed $id_recette
     */
    public function setIdRecette($id_recette)
    {
        $this->id_recette = $id_recette;
    }

    /**
     * @return mixed
     */
    public function getImgRecette()
    {
        return $this->img_recette;
    }

    /**
     * @param mixed $img_recette
     */
    public function setImgRecette($img_recette)
    {
        $this->img_recette = $img_recette;
    }

    public function __toString() {
        return $this->designation. " : " .$this->description;
    }
}