<?php

namespace App\Entity;

use App\Repository\LigneFraisForfaitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneFraisForfaitRepository::class)]
class LigneFraisForfait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $idVisiteur = null;

    #[ORM\Column]
    private ?int $mois = null;

    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaitsIdFraisForfait')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FraisForfait $idFraisForfait = null;

    protected $fraisForfait;

    #[ORM\Column]
    private ?int $quantite = null;

    public function __construct()
    {
        $this->fraisForfait = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdVisiteur(): ?User
    {
        return $this->idVisiteur;
    }

    public function setIdVisiteur(?User $idVisiteur): self
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    public function getMois(): ?int
    {
        return $this->mois;
    }

    public function setMois(?int $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getIdFraisForfait(): ?FraisForfait
    {
        return $this->idFraisForfait;
    }

    public function setIdFraisForfait(?FraisForfait $idFraisForfait): self
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function __toString()
    {
        if ($this->mois = 1){
            return "Janvier";
        } else if ($this->mois = 2){
            return "Février";
        }
    }
}
