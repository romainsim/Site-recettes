<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;


/**
 * /**
 * @ApiResource(
 *
 * )
 * @ApiFilter(SearchFilter::class, properties={"id": "exact"})
 * @ApiFilter(OrderFilter::class, properties={"id"}, arguments={"orderParameterName"="order"})
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $heure;

    /**
     * @ORM\Column(type="integer")
     */
    private $personne;

    /**
     * @ORM\ManyToMany(targetEntity=Entree::class, inversedBy="reservations")
     */
    private $entrees; // Une réservation peut contenir plusieurs entrées

    /**
     * @ORM\ManyToMany(targetEntity=Plat::class, inversedBy="reservations")
     */
    private $plats; // Une réservation peut contenir plusieurs plats

    /**
     * @ORM\ManyToMany(targetEntity=Dessert::class, inversedBy="reservations")
     */
    private $desserts; // Une réservation peut contenir plusieurs desserts

    /**
     * @ORM\ManyToOne(targetEntity=Membre::class, inversedBy="reservations")
     */
    private $membres; // Une réservation est associée à un seul membre

    public function __construct()
    {
        $this->entrees = new ArrayCollection();
        $this->plats = new ArrayCollection();
        $this->desserts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?int
    {
        return $this->heure;
    }

    public function setHeure(int $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getPersonne(): ?int
    {
        return $this->personne;
    }

    public function setPersonne(int $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * @return Collection|Entree[]
     */
    public function getEntrees(): Collection
    {
        return $this->entrees;
    }

    public function addEntree(Entree $entree): self
    {
        if (!$this->entrees->contains($entree)) {
            $this->entrees[] = $entree;
        }

        return $this;
    }

    public function removeEntree(Entree $entree): self
    {
        $this->entrees->removeElement($entree);

        return $this;
    }

    /**
     * @return Collection|Plat[]
     */
    public function getPlats(): Collection
    {
        return $this->plats;
    }

    public function addPlat(Plat $plat): self
    {
        if (!$this->plats->contains($plat)) {
            $this->plats[] = $plat;
        }

        return $this;
    }

    public function removePlat(Plat $plat): self
    {
        $this->plats->removeElement($plat);

        return $this;
    }

    /**
     * @return Collection|Dessert[]
     */
    public function getDesserts(): Collection
    {
        return $this->desserts;
    }

    public function addDessert(Dessert $dessert): self
    {
        if (!$this->desserts->contains($dessert)) {
            $this->desserts[] = $dessert;
        }

        return $this;
    }

    public function removeDessert(Dessert $dessert): self
    {
        $this->desserts->removeElement($dessert);

        return $this;
    }

    public function getMembres(): ?Membre
    {
        return $this->membres;
    }

    public function setMembres(?Membre $membres): self
    {
        $this->membres = $membres;

        return $this;
    }
}
