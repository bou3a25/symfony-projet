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
     * @ORM\ManyToMany(targetEntity=Client::class, inversedBy="reservations")
     */
    private $pk_client;

    /**
     * @ORM\ManyToMany(targetEntity=Voiture::class, inversedBy="reservations")
     */
    private $pk_voiture;

    public function __construct()
    {
        $this->pk_client = new ArrayCollection();
        $this->pk_voiture = new ArrayCollection();
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

    /**
     * @return Collection|Client[]
     */
    public function getPkClient(): Collection
    {
        return $this->pk_client;
    }

    public function addPkClient(Client $pkClient): self
    {
        if (!$this->pk_client->contains($pkClient)) {
            $this->pk_client[] = $pkClient;
        }

        return $this;
    }

    public function removePkClient(Client $pkClient): self
    {
        $this->pk_client->removeElement($pkClient);

        return $this;
    }

    /**
     * @return Collection|Voiture[]
     */
    public function getPkVoiture(): Collection
    {
        return $this->pk_voiture;
    }

    public function addPkVoiture(Voiture $pkVoiture): self
    {
        if (!$this->pk_voiture->contains($pkVoiture)) {
            $this->pk_voiture[] = $pkVoiture;
        }

        return $this;
    }

    public function removePkVoiture(Voiture $pkVoiture): self
    {
        $this->pk_voiture->removeElement($pkVoiture);

        return $this;
    }
}
