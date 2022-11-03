<?php

namespace App\Entity;

use App\Repository\ExpedienteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExpedienteRepository::class)]
class Expediente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero_expediente = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Asociado $id_asociado = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroExpediente(): ?int
    {
        return $this->numero_expediente;
    }

    public function setNumeroExpediente(int $numero_expediente): self
    {
        $this->numero_expediente = $numero_expediente;

        return $this;
    }

    public function getIdAsociado(): ?Asociado
    {
        return $this->id_asociado;
    }

    public function setIdAsociado(Asociado $id_asociado): self
    {
        $this->id_asociado = $id_asociado;

        return $this;
    }
}
