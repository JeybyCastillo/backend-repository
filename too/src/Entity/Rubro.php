<?php

namespace App\Entity;

use App\Repository\RubroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RubroRepository::class)]
class Rubro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_rubro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreRubro(): ?string
    {
        return $this->nombre_rubro;
    }

    public function setNombreRubro(string $nombre_rubro): self
    {
        $this->nombre_rubro = $nombre_rubro;

        return $this;
    }
}
