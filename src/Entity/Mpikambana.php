<?php

namespace App\Entity;

use App\Repository\MpikambanaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MpikambanaRepository::class)
 */
class Mpikambana
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Kristiana::class, inversedBy="mpikambanas")
     */
    private $kristiana;

    /**
     * @ORM\ManyToOne(targetEntity=Tossafi::class, inversedBy="mpikambanas")
     */
    private $tossafi;

    /**
     * @ORM\ManyToOne(targetEntity=Toerana::class, inversedBy="mpikambanas")
     */
    private $toerana;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datyNahaMpikambana;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKristiana(): ?Kristiana
    {
        return $this->kristiana;
    }

    public function setKristiana(?Kristiana $kristiana): self
    {
        $this->kristiana = $kristiana;

        return $this;
    }

    public function getTossafi(): ?Tossafi
    {
        return $this->tossafi;
    }

    public function setTossafi(?Tossafi $tossafi): self
    {
        $this->tossafi = $tossafi;

        return $this;
    }

    public function getToerana(): ?Toerana
    {
        return $this->toerana;
    }

    public function setToerana(?Toerana $toerana): self
    {
        $this->toerana = $toerana;

        return $this;
    }

    public function getDatyNahaMpikambana(): ?\DateTimeInterface
    {
        return $this->datyNahaMpikambana;
    }

    public function setDatyNahaMpikambana(?\DateTimeInterface $datyNahaMpikambana): self
    {
        $this->datyNahaMpikambana = $datyNahaMpikambana;

        return $this;
    }
}
