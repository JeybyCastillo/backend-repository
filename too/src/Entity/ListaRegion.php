<?php

namespace App\Entity;

use App\Repository\ListaRegionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaRegionRepository::class)]
class ListaRegion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nombre_region = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoRegion $id_tipo_region = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pais $id_pais = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreRegion(): ?string
    {
        return $this->nombre_region;
    }

    public function setNombreRegion(string $nombre_region): self
    {
        $this->nombre_region = $nombre_region;

        return $this;
    }

    public function getIdTipoRegion(): ?TipoRegion
    {
        return $this->id_tipo_region;
    }

    public function setIdTipoRegion(?TipoRegion $id_tipo_region): self
    {
        $this->id_tipo_region = $id_tipo_region;

        return $this;
    }

    public function getIdPais(): ?Pais
    {
        return $this->id_pais;
    }

    public function setIdPais(?Pais $id_pais): self
    {
        $this->id_pais = $id_pais;

        return $this;
    }
}
