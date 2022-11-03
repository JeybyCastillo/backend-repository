<?php

namespace App\Entity;

use App\Repository\TipoViviendaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoViviendaRepository::class)]
class TipoVivienda
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nombre_tipo_vivienda = null;

    #[ORM\OneToMany(mappedBy: 'tipo_vivienda', targetEntity: Persona::class)]
    private Collection $personas;

    public function __construct()
    {
        $this->personas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreTipoVivienda(): ?string
    {
        return $this->nombre_tipo_vivienda;
    }

    public function setNombreTipoVivienda(string $nombre_tipo_vivienda): self
    {
        $this->nombre_tipo_vivienda = $nombre_tipo_vivienda;

        return $this;
    }

}
