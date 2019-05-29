<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Defunt
 *
 * @ORM\Table(name="defunt", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_commune", columns={"id_commune"})})
 * @ORM\Entity(repositoryClass="App\Repository\DefuntRepository")
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
class Defunt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({ "read" })
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin_droit", type="date", nullable=false)
     * @Groups({ "user:read" })
     */
    private $finDroit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_naissance", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $nomNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     * @Groups({ "user:read" })
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deces", type="date", nullable=false)
     * @Groups({ "user:read" })
     */
    private $dateDeces;

    /**
     * @var string
     *
     * @ORM\Column(name="mouvements", type="text", length=65535, nullable=false)
     * @Groups({ "user:read" })
     */
    private $mouvements;

    /**
     * @var string
     *
     * @ORM\Column(name="dates_mouvements", type="text", length=65535, nullable=false)
     * @Groups({ "user:read" })
     */
    private $datesMouvements;

    /**
     * @var string
     *
     * @ORM\Column(name="situation", type="text", length=65535, nullable=false)
     * @Groups({ "user:read" })
     */
    private $situation;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=false)
     * @Groups({ "user:read" })
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="biographie", type="text", length=65535, nullable=false)
     * @Groups({ "user:read" })
     */
    private $biographie;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Emplacement", inversedBy="defunts")
     * @ORM\JoinColumn(name="id", unique=true)
     */
    private $emplacement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmplacement(): ?Emplacement
    {
        return $this->emplacement;
    }

    public function setEmplacement(Emplacement $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getFinDroit(): ?\DateTimeInterface
    {
        return $this->finDroit;
    }

    public function setFinDroit(\DateTimeInterface $finDroit): self
    {
        $this->finDroit = $finDroit;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getNomNaissance(): ?string
    {
        return $this->nomNaissance;
    }

    public function setNomNaissance(string $nomNaissance): self
    {
        $this->nomNaissance = $nomNaissance;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateDeces(): ?\DateTimeInterface
    {
        return $this->dateDeces;
    }

    public function setDateDeces(\DateTimeInterface $dateDeces): self
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    public function getMouvements(): ?string
    {
        return $this->mouvements;
    }

    public function setMouvements(string $mouvements): self
    {
        $this->mouvements = $mouvements;

        return $this;
    }

    public function getDatesMouvements(): ?string
    {
        return $this->datesMouvements;
    }

    public function setDatesMouvements(string $datesMouvements): self
    {
        $this->datesMouvements = $datesMouvements;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(string $biographie): self
    {
        $this->biographie = $biographie;

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
