<?php

namespace App\Entity;

use App\Repository\TipoRegionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoRegionRepository::class)]
class TipoRegion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nombre_tipo_region = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipoRegion(): ?string
    {
        return $this->nombre_tipo_region;
    }

    public function setNombreTipoRegion(string $nombre_tipo_region): self
    {
        $this->nombre_tipo_region = $nombre_tipo_region;

        return $this;
    }
}
