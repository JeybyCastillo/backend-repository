<?php

namespace App\Entity;

use App\Repository\EstadoCivilRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstadoCivilRepository::class)]
class EstadoCivil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $estado_civil = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstadoCivil(): ?string
    {
        return $this->estado_civil;
    }

    public function setEstadoCivil(string $estado_civil): self
    {
        $this->estado_civil = $estado_civil;

        return $this;
    }
}
