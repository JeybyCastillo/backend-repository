<?php

namespace App\Entity;

use App\Repository\TipoTelefonoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoTelefonoRepository::class)]
class TipoTelefono
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_tipo_telefono = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipoTelefono(): ?string
    {
        return $this->nombre_tipo_telefono;
    }

    public function setNombreTipoTelefono(string $nombre_tipo_telefono): self
    {
        $this->nombre_tipo_telefono = $nombre_tipo_telefono;

        return $this;
    }
}
