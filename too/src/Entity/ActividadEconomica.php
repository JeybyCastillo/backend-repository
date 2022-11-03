<?php

namespace App\Entity;

use App\Repository\ActividadEconomicaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActividadEconomicaRepository::class)]
class ActividadEconomica
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoActividadEconomica $id_tipo_actividad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdTipoActividad(): ?TipoActividadEconomica
    {
        return $this->id_tipo_actividad;
    }

    public function setIdTipoActividad(?TipoActividadEconomica $id_tipo_actividad): self
    {
        $this->id_tipo_actividad = $id_tipo_actividad;

        return $this;
    }
}
