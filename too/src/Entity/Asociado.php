<?php

namespace App\Entity;

use App\Repository\AsociadoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsociadoRepository::class)]
class Asociado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $estado_asociado = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstadoAsociado(): ?string
    {
        return $this->estado_asociado;
    }

    public function setEstadoAsociado(string $estado_asociado): self
    {
        $this->estado_asociado = $estado_asociado;

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
}
