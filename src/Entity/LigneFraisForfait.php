<?php

namespace App\Entity;

use App\Repository\LigneFraisForfaitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneFraisForfaitRepository::class)]
class LigneFraisForfait
{

    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaits')]
    #[ORM\Id]
    private ?User $idVisiteur = null;

    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaits')]
    #[ORM\Id]
    private ?FraisForfait $idFraisForfait = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\ManyToOne(inversedBy: 'ligneFraisForfaits')]
    private ?FicheFrais $mois = null;

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
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

    public function getIdFraisForfait(): ?FraisForfait
    {
        return $this->idFraisForfait;
    }

    public function setIdFraisForfait(?FraisForfait $idFraisForfait): self
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }

    public function getMois(): ?FicheFrais
    {
        return $this->mois;
    }

    public function setMois(?FicheFrais $mois): self
    {
        $this->mois = $mois;

        return $this;
    }
}
