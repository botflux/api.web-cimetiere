<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emplacement
 *
 * @ORM\Table(name="emplacement", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_commune", columns={"id_commune"})})
 * @ORM\Entity(repositoryClass="App\Repository\EmplacementRepository")
 */
class Emplacement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="text", length=65535, nullable=false)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnees", type="text", length=65535, nullable=false)
     */
    private $coordonnees;

    /**
     * @var bool
     *
     * @ORM\Column(name="abandon", type="boolean", nullable=false)
     */
    private $abandon;

    /**
     * @var bool
     *
     * @ORM\Column(name="sans_concession", type="boolean", nullable=false)
     */
    private $sansConcession;

    /**
     * @var bool
     *
     * @ORM\Column(name="en_vente", type="boolean", nullable=false)
     */
    private $enVente;

    /**
     * @var \Commune
     *
     * @ORM\ManyToOne(targetEntity="Commune")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commune", referencedColumnName="id")
     * })
     */
    private $idCommune;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getCoordonnees(): ?string
    {
        return $this->coordonnees;
    }

    public function setCoordonnees(string $coordonnees): self
    {
        $this->coordonnees = $coordonnees;

        return $this;
    }

    public function getAbandon(): ?bool
    {
        return $this->abandon;
    }

    public function setAbandon(bool $abandon): self
    {
        $this->abandon = $abandon;

        return $this;
    }

    public function getSansConcession(): ?bool
    {
        return $this->sansConcession;
    }

    public function setSansConcession(bool $sansConcession): self
    {
        $this->sansConcession = $sansConcession;

        return $this;
    }

    public function getEnVente(): ?bool
    {
        return $this->enVente;
    }

    public function setEnVente(bool $enVente): self
    {
        $this->enVente = $enVente;

        return $this;
    }

    public function getIdCommune(): ?Commune
    {
        return $this->idCommune;
    }

    public function setIdCommune(?Commune $idCommune): self
    {
        $this->idCommune = $idCommune;

        return $this;
    }


}
