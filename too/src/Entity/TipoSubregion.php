<?php

namespace App\Entity;

use App\Repository\TipoSubregionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoSubregionRepository::class)]
class TipoSubregion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nombre_tipo_subregion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipoSubregion(): ?string
    {
        return $this->nombre_tipo_subregion;
    }

    public function setNombreTipoSubregion(string $nombre_tipo_subregion): self
    {
        $this->nombre_tipo_subregion = $nombre_tipo_subregion;

        return $this;
    }
}
