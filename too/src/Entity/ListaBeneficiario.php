<?php

namespace App\Entity;

use App\Repository\ListaBeneficiarioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaBeneficiarioRepository::class)]
class ListaBeneficiario
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre_beneficiario = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_beneficiario = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoParentezcoBeneficiario $id_tipo_parentezco_beneficiario = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $id_persona = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreBeneficiario(): ?string
    {
        return $this->nombre_beneficiario;
    }

    public function setNombreBeneficiario(string $nombre_beneficiario): self
    {
        $this->nombre_beneficiario = $nombre_beneficiario;

        return $this;
    }

    public function getNomBeneficiario(): ?string
    {
        return $this->nom_beneficiario;
    }

    public function setNomBeneficiario(string $nom_beneficiario): self
    {
        $this->nom_beneficiario = $nom_beneficiario;

        return $this;
    }

    public function getIdTipoParentezcoBeneficiario(): ?TipoParentezcoBeneficiario
    {
        return $this->id_tipo_parentezco_beneficiario;
    }

    public function setIdTipoParentezcoBeneficiario(?TipoParentezcoBeneficiario $id_tipo_parentezco_beneficiario): self
    {
        $this->id_tipo_parentezco_beneficiario = $id_tipo_parentezco_beneficiario;

        return $this;
    }

    public function getIdPersona(): ?Persona
    {
        return $this->id_persona;
    }

    public function setIdPersona(?Persona $id_persona): self
    {
        $this->id_persona = $id_persona;

        return $this;
    }
}
