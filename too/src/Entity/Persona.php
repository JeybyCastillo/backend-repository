<?php

namespace App\Entity;

use App\Repository\PersonaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonaRepository::class)]
class Persona
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 12)]
    private ?string $primer_nombre = null;

    #[ORM\Column(length: 12)]
    private ?string $segundo_nombre = null;

    #[ORM\Column(length: 12)]
    private ?string $tercer_nombre = null;

    #[ORM\Column(length: 12)]
    private ?string $primer_apellido = null;

    #[ORM\Column(length: 12)]
    private ?string $segundo_apellido = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Genero $id_genero = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?EstadoCivil $id_estado_civil = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoDocumentoIdentidad $id_tipo_documento = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoVivienda $id_tipo_vivienda = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrimerNombre(): ?string
    {
        return $this->primer_nombre;
    }

    public function setPrimerNombre(string $primer_nombre): self
    {
        $this->primer_nombre = $primer_nombre;

        return $this;
    }

    public function getSegundoNombre(): ?string
    {
        return $this->segundo_nombre;
    }

    public function setSegundoNombre(string $segundo_nombre): self
    {
        $this->segundo_nombre = $segundo_nombre;

        return $this;
    }

    public function getTercerNombre(): ?string
    {
        return $this->tercer_nombre;
    }

    public function setTercerNombre(string $tercer_nombre): self
    {
        $this->tercer_nombre = $tercer_nombre;

        return $this;
    }

    public function getPrimerApellido(): ?string
    {
        return $this->primer_apellido;
    }

    public function setPrimerApellido(string $primer_apellido): self
    {
        $this->primer_apellido = $primer_apellido;

        return $this;
    }

    public function getSegundoApellido(): ?string
    {
        return $this->segundo_apellido;
    }

    public function setSegundoApellido(string $segundo_apellido): self
    {
        $this->segundo_apellido = $segundo_apellido;

        return $this;
    }

    public function getIdGenero(): ?Genero
    {
        return $this->id_genero;
    }

    public function setIdGenero(?Genero $id_genero): self
    {
        $this->id_genero = $id_genero;

        return $this;
    }

    public function getIdEstadoCivil(): ?EstadoCivil
    {
        return $this->id_estado_civil;
    }

    public function setIdEstadoCivil(?EstadoCivil $id_estado_civil): self
    {
        $this->id_estado_civil = $id_estado_civil;

        return $this;
    }

    public function getIdTipoDocumento(): ?TipoDocumentoIdentidad
    {
        return $this->id_tipo_documento;
    }

    public function setIdTipoDocumento(?TipoDocumentoIdentidad $id_tipo_documento): self
    {
        $this->id_tipo_documento = $id_tipo_documento;

        return $this;
    }

    public function getIdTipoVivienda(): ?TipoVivienda
    {
        return $this->id_tipo_vivienda;
    }

    public function setIdTipoVivienda(?TipoVivienda $id_tipo_vivienda): self
    {
        $this->id_tipo_vivienda = $id_tipo_vivienda;

        return $this;
    }
}
