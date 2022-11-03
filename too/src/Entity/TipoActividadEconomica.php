<?php

namespace App\Entity;

use App\Repository\TipoActividadEconomicaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoActividadEconomicaRepository::class)]
class TipoActividadEconomica
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre_tipo_actividad = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Profesion $id_profesion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Rubro $id_rubro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipoActividad(): ?string
    {
        return $this->nombre_tipo_actividad;
    }

    public function setNombreTipoActividad(string $nombre_tipo_actividad): self
    {
        $this->nombre_tipo_actividad = $nombre_tipo_actividad;

        return $this;
    }

    public function getIdProfesion(): ?Profesion
    {
        return $this->id_profesion;
    }

    public function setIdProfesion(?Profesion $id_profesion): self
    {
        $this->id_profesion = $id_profesion;

        return $this;
    }

    public function getIdRubro(): ?Rubro
    {
        return $this->id_rubro;
    }

    public function setIdRubro(?Rubro $id_rubro): self
    {
        $this->id_rubro = $id_rubro;

        return $this;
    }
}
