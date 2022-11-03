<?php

namespace App\Entity;

use App\Repository\TipoReferenciaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoReferenciaRepository::class)]
class TipoReferencia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $tipo_referencia = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoReferencia(): ?string
    {
        return $this->tipo_referencia;
    }

    public function setTipoReferencia(string $tipo_referencia): self
    {
        $this->tipo_referencia = $tipo_referencia;

        return $this;
    }
}
