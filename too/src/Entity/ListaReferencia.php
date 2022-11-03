<?php

namespace App\Entity;

use App\Repository\ListaReferenciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaReferenciaRepository::class)]
class ListaReferencia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre_referencia = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre_lista_referencia = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoReferencia $id_tipo_referencia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreReferencia(): ?string
    {
        return $this->nombre_referencia;
    }

    public function setNombreReferencia(string $nombre_referencia): self
    {
        $this->nombre_referencia = $nombre_referencia;

        return $this;
    }

    public function getNombreListaReferencia(): ?string
    {
        return $this->nombre_lista_referencia;
    }

    public function setNombreListaReferencia(string $nombre_lista_referencia): self
    {
        $this->nombre_lista_referencia = $nombre_lista_referencia;

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

    public function getIdTipoReferencia(): ?TipoReferencia
    {
        return $this->id_tipo_referencia;
    }

    public function setIdTipoReferencia(?TipoReferencia $id_tipo_referencia): self
    {
        $this->id_tipo_referencia = $id_tipo_referencia;

        return $this;
    }
}
