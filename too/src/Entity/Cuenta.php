<?php

namespace App\Entity;

use App\Repository\CuentaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CuentaRepository::class)]
class Cuenta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_cuenta = null;

    #[ORM\Column]
    private ?bool $estado_cuenta = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
    private ?string $saldo_cuenta = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ListaCuenta $id_lista_cuenta = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoCuenta $id_tipo_cuenta = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreCuenta(): ?string
    {
        return $this->nombre_cuenta;
    }

    public function setNombreCuenta(string $nombre_cuenta): self
    {
        $this->nombre_cuenta = $nombre_cuenta;

        return $this;
    }

    public function isEstadoCuenta(): ?bool
    {
        return $this->estado_cuenta;
    }

    public function setEstadoCuenta(bool $estado_cuenta): self
    {
        $this->estado_cuenta = $estado_cuenta;

        return $this;
    }

    public function getSaldoCuenta(): ?string
    {
        return $this->saldo_cuenta;
    }

    public function setSaldoCuenta(string $saldo_cuenta): self
    {
        $this->saldo_cuenta = $saldo_cuenta;

        return $this;
    }

    public function getIdListaCuenta(): ?ListaCuenta
    {
        return $this->id_lista_cuenta;
    }

    public function setIdListaCuenta(?ListaCuenta $id_lista_cuenta): self
    {
        $this->id_lista_cuenta = $id_lista_cuenta;

        return $this;
    }

    public function getIdTipoCuenta(): ?TipoCuenta
    {
        return $this->id_tipo_cuenta;
    }

    public function setIdTipoCuenta(?TipoCuenta $id_tipo_cuenta): self
    {
        $this->id_tipo_cuenta = $id_tipo_cuenta;

        return $this;
    }
}
