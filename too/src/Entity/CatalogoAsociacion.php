<?php

namespace App\Entity;

use App\Repository\CatalogoAsociacionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatalogoAsociacionRepository::class)]
class CatalogoAsociacion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_asociacion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreAsociacion(): ?string
    {
        return $this->nombre_asociacion;
    }

    public function setNombreAsociacion(string $nombre_asociacion): self
    {
        $this->nombre_asociacion = $nombre_asociacion;

        return $this;
    }
}
