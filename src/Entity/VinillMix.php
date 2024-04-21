<?php

namespace App\Entity;

use App\Repository\VinillMixRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VinillMixRepository::class)]
class VinillMix
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titlee = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descriptionn = null;

    #[ORM\Column]
    private ?int $trackcountt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAT = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlee(): ?string
    {
        return $this->titlee;
    }

    public function setTitlee(string $titlee): static
    {
        $this->titlee = $titlee;

        return $this;
    }

    public function getDescriptionn(): ?string
    {
        return $this->descriptionn;
    }

    public function setDescriptionn(?string $descriptionn): static
    {
        $this->descriptionn = $descriptionn;

        return $this;
    }

    public function getTrackcountt(): ?int
    {
        return $this->trackcountt;
    }

    public function setTrackcountt(int $trackcountt): static
    {
        $this->trackcountt = $trackcountt;

        return $this;
    }

    public function getCreatedAT(): ?\DateTimeImmutable
    {
        return $this->createdAT;
    }

    public function setCreatedAT(\DateTimeImmutable $createdAT): static
    {
        $this->createdAT = $createdAT;

        return $this;
    }
}
