<?php

namespace App\Entity;

use App\Repository\TipoCuentaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoCuentaRepository::class)]
class TipoCuenta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $tipo_cuenta = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoCuenta(): ?string
    {
        return $this->tipo_cuenta;
    }

    public function setTipoCuenta(string $tipo_cuenta): self
    {
        $this->tipo_cuenta = $tipo_cuenta;

        return $this;
    }
}
