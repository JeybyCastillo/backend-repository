<?php

namespace App\Entity;

use App\Repository\ListaCuentaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ListaCuentaRepository::class)]
class ListaCuenta
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Expediente $id_expediente = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdExpediente(): ?Expediente
    {
        return $this->id_expediente;
    }

    public function setIdExpediente(Expediente $id_expediente): self
    {
        $this->id_expediente = $id_expediente;

        return $this;
    }
}
