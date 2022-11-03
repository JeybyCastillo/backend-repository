<?php

namespace App\Entity;

use App\Repository\PersonaActividadEconomicaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonaActividadEconomicaRepository::class)]
class PersonaActividadEconomica
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ActividadEconomica $id_actividad_economica = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPersona(): ?Persona
    {
        return $this->id_persona;
    }

    public function setIdPersona(?Persona $id_persona): self
    {
        $this->id_persona = $id_persona;

        return $this;
    }

    public function getIdActividadEconomica(): ?ActividadEconomica
    {
        return $this->id_actividad_economica;
    }

    public function setIdActividadEconomica(?ActividadEconomica $id_actividad_economica): self
    {
        $this->id_actividad_economica = $id_actividad_economica;

        return $this;
    }
}
