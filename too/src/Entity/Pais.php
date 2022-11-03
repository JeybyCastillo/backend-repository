<?php

namespace App\Entity;

use App\Repository\PaisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaisRepository::class)]
class Pais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_pais = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoRegion $id_tipo_region = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoSubregion $id_tipo_subregion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombrePais(): ?string
    {
        return $this->nombre_pais;
    }

    public function setNombrePais(string $nombre_pais): self
    {
        $this->nombre_pais = $nombre_pais;

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

    public function getIdTipoSubregion(): ?TipoSubregion
    {
        return $this->id_tipo_subregion;
    }

    public function setIdTipoSubregion(?TipoSubregion $id_tipo_subregion): self
    {
        $this->id_tipo_subregion = $id_tipo_subregion;

        return $this;
    }
}
