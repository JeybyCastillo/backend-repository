<?php

namespace App\Entity;

use App\Repository\AgendaContactoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgendaContactoRepository::class)]
class AgendaContacto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $numero_contacto = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoTelefono $id_tipo_telefono = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?CodigoTelefono $id_codigo_telefono = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroContacto(): ?string
    {
        return $this->numero_contacto;
    }

    public function setNumeroContacto(string $numero_contacto): self
    {
        $this->numero_contacto = $numero_contacto;

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

    public function getIdTipoTelefono(): ?TipoTelefono
    {
        return $this->id_tipo_telefono;
    }

    public function setIdTipoTelefono(?TipoTelefono $id_tipo_telefono): self
    {
        $this->id_tipo_telefono = $id_tipo_telefono;

        return $this;
    }

    public function getIdCodigoTelefono(): ?CodigoTelefono
    {
        return $this->id_codigo_telefono;
    }

    public function setIdCodigoTelefono(?CodigoTelefono $id_codigo_telefono): self
    {
        $this->id_codigo_telefono = $id_codigo_telefono;

        return $this;
    }
}
