<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Emplacement
 *
 * @ORM\Table(name="emplacement", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_commune", columns={"id_commune"})})
 * @ORM\Entity(repositoryClass="App\Repository\EmplacementRepository")
 * 
 * @ApiResource(
 *  collectionOperations={"get"},
 *  itemOperations={"get"},
 *  attributes={
 *      "normalization_context"={
 *          "groups"={
 *              "read"
 *          }
 *      }
 *  }
 * )
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
     * @Groups({ "read" })
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnees", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $coordonnees;

    /**
     * @var bool
     *
     * @ORM\Column(name="abandon", type="boolean", nullable=false)
     * @Groups({ "read" })
     */
    private $abandon;

    /**
     * @var bool
     *
     * @ORM\Column(name="sans_concession", type="boolean", nullable=false)
     * @Groups({ "read" })
     */
    private $sansConcession;

    /**
     * @var bool
     *
     * @ORM\Column(name="en_vente", type="boolean", nullable=false)
     * @Groups({ "read" })
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commune", inversedBy="emplacements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commune", referencedColumnName="id")
     * })
     * @Groups({ "read" })
     */
    private $commune;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Concession", mappedBy="emplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_emplacement", referencedColumnName="id")
     * })
     * @ApiSubresource
     * @Groups({ "read" })
     */
    private $concessions;

    public function __construct()
    {
        $this->concessions = new ArrayCollection();
    }

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

    public function getCommune(): ?Commune
    {
        return $this->commune;
    }

    public function setCommune(?Commune $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * @return Collection|Concession[]
     */
    public function getConcessions(): Collection
    {
        return $this->concessions;
    }

    public function addConcession(Concession $concession): self
    {
        if (!$this->concessions->contains($concession)) {
            $this->concessions[] = $concession;
            $concession->setEmplacement($this);
        }

        return $this;
    }

    public function removeConcession(Concession $concession): self
    {
        if ($this->concessions->contains($concession)) {
            $this->concessions->removeElement($concession);
            // set the owning side to null (unless already changed)
            if ($concession->getEmplacement() === $this) {
                $concession->setEmplacement(null);
            }
        }

        return $this;
    }


}
