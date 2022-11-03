<?php

namespace App\Entity;

use App\Repository\DetalleRetiroCuentaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetalleRetiroCuentaRepository::class)]
class DetalleRetiroCuenta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $monto_detalle_retiro = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cuenta $id_cuenta = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontoDetalleRetiro(): ?string
    {
        return $this->monto_detalle_retiro;
    }

    public function setMontoDetalleRetiro(string $monto_detalle_retiro): self
    {
        $this->monto_detalle_retiro = $monto_detalle_retiro;

        return $this;
    }

    public function getIdCuenta(): ?Cuenta
    {
        return $this->id_cuenta;
    }

    public function setIdCuenta(?Cuenta $id_cuenta): self
    {
        $this->id_cuenta = $id_cuenta;

        return $this;
    }
}
