<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
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
    private $debut;

    /**
     * @ORM\Column(type="date")
     */
    private $fin;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixparjour;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="reservations")
     */
    private $pk_client;

    /**
     * @ORM\ManyToOne(targetEntity=Voiture::class, inversedBy="reservations")
     */
    private $pk_voiture;

   
    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

        return $this;
    }

    public function getPrixparjour(): ?int
    {
        return $this->prixparjour;
    }

    public function setPrixparjour(int $prixparjour): self
    {
        $this->prixparjour = $prixparjour;

        return $this;
    }

    public function getPkClient(): ?Client
    {
        return $this->pk_client;
    }

    public function setPkClient(?Client $pk_client): self
    {
        $this->pk_client = $pk_client;

        return $this;
    }

    public function getPkVoiture(): ?Voiture
    {
        return $this->pk_voiture;
    }

    public function setPkVoiture(?Voiture $pk_voiture): self
    {
        $this->pk_voiture = $pk_voiture;

        return $this;
    }

}
