<?php

namespace App\Entity;

use App\Repository\TipoParentezcoBeneficiarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoParentezcoBeneficiarioRepository::class)]
class TipoParentezcoBeneficiario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $tipo_parentezco_beneficiario = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoParentezcoBeneficiario(): ?string
    {
        return $this->tipo_parentezco_beneficiario;
    }

    public function setTipoParentezcoBeneficiario(string $tipo_parentezco_beneficiario): self
    {
        $this->tipo_parentezco_beneficiario = $tipo_parentezco_beneficiario;

        return $this;
    }
}
