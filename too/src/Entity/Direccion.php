<?php

namespace App\Entity;

use App\Repository\DireccionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DireccionRepository::class)]
class Direccion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 10)]
    private ?string $pasaje = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $latitud = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $longitud = null;

    #[ORM\Column(length: 10)]
    private ?string $colonia_calle = null;

    #[ORM\Column(length: 10)]
    private ?string $casa_departamento = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $barrio = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $residencia = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $codigo_postal = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pais $id_pais = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPasaje(): ?string
    {
        return $this->pasaje;
    }

    public function setPasaje(string $pasaje): self
    {
        $this->pasaje = $pasaje;

        return $this;
    }

    public function getLatitud(): ?string
    {
        return $this->latitud;
    }

    public function setLatitud(?string $latitud): self
    {
        $this->latitud = $latitud;

        return $this;
    }

    public function getLongitud(): ?string
    {
        return $this->longitud;
    }

    public function setLongitud(?string $longitud): self
    {
        $this->longitud = $longitud;

        return $this;
    }

    public function getColoniaCalle(): ?string
    {
        return $this->colonia_calle;
    }

    public function setColoniaCalle(string $colonia_calle): self
    {
        $this->colonia_calle = $colonia_calle;

        return $this;
    }

    public function getCasaDepartamento(): ?string
    {
        return $this->casa_departamento;
    }

    public function setCasaDepartamento(string $casa_departamento): self
    {
        $this->casa_departamento = $casa_departamento;

        return $this;
    }

    public function getBarrio(): ?string
    {
        return $this->barrio;
    }

    public function setBarrio(?string $barrio): self
    {
        $this->barrio = $barrio;

        return $this;
    }

    public function getResidencia(): ?string
    {
        return $this->residencia;
    }

    public function setResidencia(?string $residencia): self
    {
        $this->residencia = $residencia;

        return $this;
    }

    public function getCodigoPostal(): ?string
    {
        return $this->codigo_postal;
    }

    public function setCodigoPostal(?string $codigo_postal): self
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    public function getIdPersona(): ?Persona
    {
        return $this->id_persona;
    }

    public function setIdPersona(Persona $id_persona): self
    {
        $this->id_persona = $id_persona;

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
