<?php

namespace App\Entity;

use App\Repository\TipoDocumentoIdentidadRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoDocumentoIdentidadRepository::class)]
class TipoDocumentoIdentidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $tipo_documento = null;

    #[ORM\Column(length: 100)]
    private ?string $regex_tipo_documento = null;

    #[ORM\Column(length: 100)]
    private ?string $documento_identidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoDocumento(): ?string
    {
        return $this->tipo_documento;
    }

    public function setTipoDocumento(string $tipo_documento): self
    {
        $this->tipo_documento = $tipo_documento;

        return $this;
    }

    public function getRegexTipoDocumento(): ?string
    {
        return $this->regex_tipo_documento;
    }

    public function setRegexTipoDocumento(string $regex_tipo_documento): self
    {
        $this->regex_tipo_documento = $regex_tipo_documento;

        return $this;
    }

    public function getDocumentoIdentidad(): ?string
    {
        return $this->documento_identidad;
    }

    public function setDocumentoIdentidad(string $documento_identidad): self
    {
        $this->documento_identidad = $documento_identidad;

        return $this;
    }
}
