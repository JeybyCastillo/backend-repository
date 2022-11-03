<?php

namespace App\Entity;

use App\Repository\ListaSubregionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaSubregionRepository::class)]
class ListaSubregion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $nombre_subregion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoSubregion $id_tipo_subregion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pais $id_pais = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreSubregion(): ?string
    {
        return $this->nombre_subregion;
    }

    public function setNombreSubregion(string $nombre_subregion): self
    {
        $this->nombre_subregion = $nombre_subregion;

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
