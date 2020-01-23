<?php

namespace App\Entity\Rentasmunicipales;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="rentasmpales.tipoconcepto")
 * @ORM\Entity(repositoryClass="App\Repository\Rentasmunicipales\tipoconceptoRepository")
 */
class tipoconcepto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idCompania;

    /**
     * @ORM\Column(type="text")
     */
    private $tipo;

    /**
     * @ORM\Column(type="text")
     */
    private $cod_convenio;

    /**
     * @ORM\Column(type="integer")
     */
    private $usu_cre;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_crea;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $usu_mod;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fecha_mod;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCompania(): ?int
    {
        return $this->idCompania;
    }

    public function setIdCompania(int $idCompania): self
    {
        $this->idCompania = $idCompania;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCodConvenio(): ?string
    {
        return $this->cod_convenio;
    }

    public function setCodConvenio(string $cod_convenio): self
    {
        $this->cod_convenio = $cod_convenio;

        return $this;
    }

    public function getUsuCre(): ?int
    {
        return $this->usu_cre;
    }

    public function setUsuCre(int $usu_cre): self
    {
        $this->usu_cre = $usu_cre;

        return $this;
    }

    public function getFechaCrea(): ?\DateTimeInterface
    {
        return $this->fecha_crea;
    }

    public function setFechaCrea(\DateTimeInterface $fecha_crea): self
    {
        $this->fecha_crea = $fecha_crea;

        return $this;
    }

    public function getUsuMod(): ?int
    {
        return $this->usu_mod;
    }

    public function setUsuMod(?int $usu_mod): self
    {
        $this->usu_mod = $usu_mod;

        return $this;
    }

    public function getFechaMod(): ?\DateTimeInterface
    {
        return $this->fecha_mod;
    }

    public function setFechaMod(?\DateTimeInterface $fecha_mod): self
    {
        $this->fecha_mod = $fecha_mod;

        return $this;
    }
}
