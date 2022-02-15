<?php

namespace App\Entity;

use App\Repository\DessertRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;


/**
 * /**
 * @ApiResource(
 *
 * )
 * @ApiFilter(SearchFilter::class, properties={"designation": "exact"})
 * @ApiFilter(OrderFilter::class, properties={"designation"}, arguments={"orderParameterName"="order"})
 * @ORM\Entity(repositoryClass=DessertRepository::class)
 * @Vich\Uploadable
 */

class Dessert
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $ingredients;

    /**
     * @ORM\Column(type="text")
     */
    private $recette;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tempspreparation;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tempscuisson;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="recette_image", fileNameProperty="imgrecette")
     *
     * @var File|null
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imgrecette;

    /**
     * @ORM\ManyToMany(targetEntity=Reservation::class, mappedBy="desserts")
     */
    private $reservations; // Un dessert peut etre associé à plusieurs réservations

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getRecette(): ?string
    {
        return $this->recette;
    }

    public function setRecette(string $recette): self
    {
        $this->recette = $recette;

        return $this;
    }

    public function getTempspreparation(): ?int
    {
        return $this->tempspreparation;
    }

    public function setTempspreparation(?int $tempspreparation): self
    {
        $this->tempspreparation = $tempspreparation;

        return $this;
    }

    public function getTempscuisson(): ?int
    {
        return $this->tempscuisson;
    }

    public function setTempscuisson(?int $tempscuisson): self
    {
        $this->tempscuisson = $tempscuisson;

        return $this;
    }

    public function getImgrecette(): ?string
    {
        return $this->imgrecette;
    }

    public function setImgrecette(?string $imgrecette): self
    {
        $this->imgrecette = $imgrecette;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->addDessert($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            $reservation->removeDessert($this);
        }

        return $this;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function __toString()
    {
        return $this->getDesignation();
    }


}
