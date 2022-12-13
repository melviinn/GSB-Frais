<?php

namespace App\Entity;

use App\Repository\FraisForfaitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FraisForfaitRepository::class)]
class FraisForfait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $libelle = null;

    #[ORM\Column]
    private ?int $montant = null;


    #[ORM\OneToMany(mappedBy: 'idFraisForfait', targetEntity: LigneFraisForfait::class)]
    private Collection $ligneFraisForfaitsIdFraisForfait;

    public function __construct()
    {
        $this->ligneFraisForfaitsIdFraisForfait = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }


    /**
     * @return Collection<int, LigneFraisForfait>
     */
    public function getLigneFraisForfaitsIdFraisForfait(): Collection
    {
        return $this->ligneFraisForfaitsIdFraisForfait;
    }

    public function addLigneFraisForfaitsIdFraisForfait(LigneFraisForfait $ligneFraisForfaitsIdFraisForfait): self
    {
        if (!$this->ligneFraisForfaitsIdFraisForfait->contains($ligneFraisForfaitsIdFraisForfait)) {
            $this->ligneFraisForfaitsIdFraisForfait->add($ligneFraisForfaitsIdFraisForfait);
            $ligneFraisForfaitsIdFraisForfait->setIdFraisForfait($this);
        }

        return $this;
    }

    public function removeLigneFraisForfaitsIdFraisForfait(LigneFraisForfait $ligneFraisForfaitsIdFraisForfait): self
    {
        if ($this->ligneFraisForfaitsIdFraisForfait->removeElement($ligneFraisForfaitsIdFraisForfait)) {
            // set the owning side to null (unless already changed)
            if ($ligneFraisForfaitsIdFraisForfait->getIdFraisForfait() === $this) {
                $ligneFraisForfaitsIdFraisForfait->setIdFraisForfait(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->libelle;
    }



}
