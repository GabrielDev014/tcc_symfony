<?php

namespace App\Entity;

use App\Repository\EmpresasRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpresasRepository::class)]
class Empresas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $cnpj_basico = null;

    #[ORM\Column(length: 255)]
    private ?string $razao_social = null;

    #[ORM\Column(length: 255)]
    private ?string $natureza_juridica = null;

    #[ORM\Column(length: 255)]
    private ?string $qualificacao = null;

    #[ORM\Column(length: 255)]
    private ?string $capital_social = null;

    #[ORM\Column(length: 255)]
    private ?string $porte = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ente_federativo_responsavel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCnpjBasico(): ?string
    {
        return $this->cnpj_basico;
    }

    public function setCnpjBasico(string $cnpj_basico): static
    {
        $this->cnpj_basico = $cnpj_basico;

        return $this;
    }

    public function getRazaoSocial(): ?string
    {
        return $this->razao_social;
    }

    public function setRazaoSocial(string $razao_social): static
    {
        $this->razao_social = $razao_social;

        return $this;
    }

    public function getNaturezaJuridica(): ?string
    {
        return $this->natureza_juridica;
    }

    public function setNaturezaJuridica(string $natureza_juridica): static
    {
        $this->natureza_juridica = $natureza_juridica;

        return $this;
    }

    public function getQualificacao(): ?string
    {
        return $this->qualificacao;
    }

    public function setQualificacao(string $qualificacao): static
    {
        $this->qualificacao = $qualificacao;

        return $this;
    }

    public function getCapitalSocial(): ?string
    {
        return $this->capital_social;
    }

    public function setCapitalSocial(string $capital_social): static
    {
        $this->capital_social = $capital_social;

        return $this;
    }

    public function getPorte(): ?string
    {
        return $this->porte;
    }

    public function setPorte(string $porte): static
    {
        $this->porte = $porte;

        return $this;
    }

    public function getEnteFederativoResponsavel(): ?string
    {
        return $this->ente_federativo_responsavel;
    }

    public function setEnteFederativoResponsavel(?string $ente_federativo_responsavel): static
    {
        $this->ente_federativo_responsavel = $ente_federativo_responsavel;

        return $this;
    }
}
