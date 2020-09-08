<?php

namespace App\Entity;

use App\Repository\TossafiRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TossafiRepository::class)
 */
class Tossafi
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $kaody;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $anarana;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datyNipoirany;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $loko;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $tobyMiahy;

    /**
     * @ORM\OneToMany(targetEntity=Mpikambana::class, mappedBy="tossafi")
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

    public function getKaody(): ?string
    {
        return $this->kaody;
    }

    public function setKaody(string $kaody): self
    {
        $this->kaody = $kaody;

        return $this;
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

    public function getDatyNipoirany(): ?\DateTimeInterface
    {
        return $this->datyNipoirany;
    }

    public function setDatyNipoirany(?\DateTimeInterface $datyNipoirany): self
    {
        $this->datyNipoirany = $datyNipoirany;

        return $this;
    }

    public function getLoko(): ?string
    {
        return $this->loko;
    }

    public function setLoko(?string $loko): self
    {
        $this->loko = $loko;

        return $this;
    }

    public function getTobyMiahy(): ?string
    {
        return $this->tobyMiahy;
    }

    public function setTobyMiahy(?string $tobyMiahy): self
    {
        $this->tobyMiahy = $tobyMiahy;

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
            $mpikambana->setTossafi($this);
        }

        return $this;
    }

    public function removeMpikambana(Mpikambana $mpikambana): self
    {
        if ($this->mpikambanas->contains($mpikambana)) {
            $this->mpikambanas->removeElement($mpikambana);
            // set the owning side to null (unless already changed)
            if ($mpikambana->getTossafi() === $this) {
                $mpikambana->setTossafi(null);
            }
        }

        return $this;
    }
}
