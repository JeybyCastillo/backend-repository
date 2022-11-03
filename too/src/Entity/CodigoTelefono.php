<?php

namespace App\Entity;

use App\Repository\CodigoTelefonoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CodigoTelefonoRepository::class)]
class CodigoTelefono
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 15)]
    private ?string $codigo_telefono = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pais $id_pais = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigoTelefono(): ?string
    {
        return $this->codigo_telefono;
    }

    public function setCodigoTelefono(string $codigo_telefono): self
    {
        $this->codigo_telefono = $codigo_telefono;

        return $this;
    }

    public function getIdPais(): ?Pais
    {
        return $this->id_pais;
    }

    public function setIdPais(Pais $id_pais): self
    {
        $this->id_pais = $id_pais;

        return $this;
    }
}
