<?php

namespace App\Entity;

use App\Repository\ProfesionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfesionRepository::class)]
class Profesion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_profesion = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreProfesion(): ?string
    {
        return $this->nombre_profesion;
    }

    public function setNombreProfesion(string $nombre_profesion): self
    {
        $this->nombre_profesion = $nombre_profesion;

        return $this;
    }
}
