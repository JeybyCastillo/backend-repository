<?php

namespace App\Entity;

use App\Repository\PagoAsociadoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PagoAsociadoRepository::class)]
class PagoAsociado
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
    private ?string $monto_estado_asociado = null;

    #[ORM\Column]
    private ?bool $estado_pago_asociado = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Asociado $id_asociado = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontoEstadoAsociado(): ?string
    {
        return $this->monto_estado_asociado;
    }

    public function setMontoEstadoAsociado(string $monto_estado_asociado): self
    {
        $this->monto_estado_asociado = $monto_estado_asociado;

        return $this;
    }

    public function isEstadoPagoAsociado(): ?bool
    {
        return $this->estado_pago_asociado;
    }

    public function setEstadoPagoAsociado(bool $estado_pago_asociado): self
    {
        $this->estado_pago_asociado = $estado_pago_asociado;

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
