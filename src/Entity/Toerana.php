<?php

namespace App\Entity;

use App\Repository\ToeranaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ToeranaRepository::class)
 */
class Toerana
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $anarana;

    /**
     * @ORM\OneToMany(targetEntity=Mpikambana::class, mappedBy="toerana")
     */
    private $mpikambanas;

    public function __construct()
    {
        $this->mpikambanas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnarana(): ?string
    {
        return $this->anarana;
    }

    public function setAnarana(?string $anarana): self
    {
        $this->anarana = $anarana;

        return $this;
    }

    /**
     * @return Collection|Mpikambana[]
     */
    public function getMpikambanas(): Collection
    {
        return $this->mpikambanas;
    }

    public function addMpikambana(Mpikambana $mpikambana): self
    {
        if (!$this->mpikambanas->contains($mpikambana)) {
            $this->mpikambanas[] = $mpikambana;
            $mpikambana->setToerana($this);
        }

        return $this;
    }

    public function removeMpikambana(Mpikambana $mpikambana): self
    {
        if ($this->mpikambanas->contains($mpikambana)) {
            $this->mpikambanas->removeElement($mpikambana);
            // set the owning side to null (unless already changed)
            if ($mpikambana->getToerana() === $this) {
                $mpikambana->setToerana(null);
            }
        }

        return $this;
    }
}
