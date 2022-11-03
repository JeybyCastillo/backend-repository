<?php

namespace App\Entity;

use App\Repository\ListaAsociacionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaAsociacionRepository::class)]
class ListaAsociacion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_asociacion = null;

    #[ORM\Column(nullable: true)]
    private ?bool $estado_asociacion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?CatalogoAsociacion $id_asociacion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreAsociacion(): ?string
    {
        return $this->nombre_asociacion;
    }

    public function setNombreAsociacion(string $nombre_asociacion): self
    {
        $this->nombre_asociacion = $nombre_asociacion;

        return $this;
    }

    public function isEstadoAsociacion(): ?bool
    {
        return $this->estado_asociacion;
    }

    public function setEstadoAsociacion(?bool $estado_asociacion): self
    {
        $this->estado_asociacion = $estado_asociacion;

        return $this;
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

    public function getIdAsociacion(): ?CatalogoAsociacion
    {
        return $this->id_asociacion;
    }

    public function setIdAsociacion(?CatalogoAsociacion $id_asociacion): self
    {
        $this->id_asociacion = $id_asociacion;

        return $this;
    }
}
