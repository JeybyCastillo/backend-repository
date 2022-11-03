<?php

namespace App\Entity;

use App\Repository\DetalleAportacionCuentaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetalleAportacionCuentaRepository::class)]
class DetalleAportacionCuenta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $monto_detalle_aportacion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cuenta $id_cuenta = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontoDetalleAportacion(): ?int
    {
        return $this->monto_detalle_aportacion;
    }

    public function setMontoDetalleAportacion(int $monto_detalle_aportacion): self
    {
        $this->monto_detalle_aportacion = $monto_detalle_aportacion;

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
