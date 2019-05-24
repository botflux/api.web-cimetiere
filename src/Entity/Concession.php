<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Concession
 *
 * @ORM\Table(name="concession", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="id_commune", columns={"id_commune"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConcessionRepository")
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
 * 
 */
class Concession
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
     * @var string
     *
     * @ORM\Column(name="numero", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="date", nullable=false)
     * @Groups({ "read" })
     */
    private $debut;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=0, nullable=false)
     * @Groups({ "read" })
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     * @Groups({ "read" })
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     * @Groups({ "read" })
     */
    private $tarif;

    /**
     * @var string
     *
     * @ORM\Column(name="juridique", type="string", length=0, nullable=false)
     * @Groups({ "read" })
     */
    private $juridique;

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
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=false)
     * @Groups({ "read" })
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="text", length=65535, nullable=false)
     * @Groups({ "read" })
     */
    private $commentaires;

    /**
     * @var string
     *
     * @ORM\Column(name="concessionnaire_origine_nom", type="string", length=255, nullable=false)
     * @Groups({ "read" })
     */
    private $concessionnaireOrigineNom;

    /**
     * @var string
     *
     * @ORM\Column(name="concessionnaire_origine_prenom", type="string", length=255, nullable=false)
     * @Groups({ "read" })
     */
    private $concessionnaireOriginePrenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="concessionnaire_origine_acquisition", type="date", nullable=false)
     * @Groups({ "read" })
     */
    private $concessionnaireOrigineAcquisition;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Emplacement", inversedBy="concessions")
     * @ORM\JoinColumn(name="id", unique=true)
     */
    private $emplacement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
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

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getJuridique(): ?string
    {
        return $this->juridique;
    }

    public function setJuridique(string $juridique): self
    {
        $this->juridique = $juridique;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getConcessionnaireOrigineNom(): ?string
    {
        return $this->concessionnaireOrigineNom;
    }

    public function setConcessionnaireOrigineNom(string $concessionnaireOrigineNom): self
    {
        $this->concessionnaireOrigineNom = $concessionnaireOrigineNom;

        return $this;
    }

    public function getConcessionnaireOriginePrenom(): ?string
    {
        return $this->concessionnaireOriginePrenom;
    }

    public function setConcessionnaireOriginePrenom(string $concessionnaireOriginePrenom): self
    {
        $this->concessionnaireOriginePrenom = $concessionnaireOriginePrenom;

        return $this;
    }

    public function getConcessionnaireOrigineAcquisition(): ?\DateTimeInterface
    {
        return $this->concessionnaireOrigineAcquisition;
    }

    public function setConcessionnaireOrigineAcquisition(\DateTimeInterface $concessionnaireOrigineAcquisition): self
    {
        $this->concessionnaireOrigineAcquisition = $concessionnaireOrigineAcquisition;

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
