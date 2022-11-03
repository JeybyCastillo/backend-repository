<?php

namespace App\Entity;

use App\Repository\GeneroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GeneroRepository::class)]
class Genero
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $tipo_genero = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoGenero(): ?string
    {
        return $this->tipo_genero;
    }

    public function setTipoGenero(string $tipo_genero): self
    {
        $this->tipo_genero = $tipo_genero;

        return $this;
    }
}
