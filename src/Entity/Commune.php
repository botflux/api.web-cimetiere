<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Commune
 *
 * @ORM\Table(name="commune", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommuneRepository")
 * @ApiResource(
 *  collectionOperations={"get"},
 *  itemOperations={"get"},
 *  attributes={
 *      "normalization_context"={
 *          "groups"={
 *              "get"
 *          }
 *      }
 *  }
 * )
 * @ApiFilter(
 *  SearchFilter::class,
 *  properties={
 *      "id": "exact",
 *      "nom": "partial",
 *      "departement": "partial"
 *  }
 * )
 * @ApiFilter(
 *  OrderFilter::class,
 *  properties={
 *      "nom"="ASC",
 *      "departement": "ASC"
 *  }
 * )
 */
class Commune implements UserInterface, \Serializable
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
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     * @Groups({"get"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=4, nullable=false)
     * @Groups({"get"})
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", length=65535, nullable=false)
     * @Groups({"get"})
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=10, nullable=false)
     * @Groups({"get"})
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=65535, nullable=false)
     * @Groups({"get"})
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="text", length=65535, nullable=false)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="concessions", type="boolean", nullable=false)
     */
    private $concessions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="date", nullable=false)
     */
    private $creation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modification", type="date", nullable=false)
     */
    private $modification;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="connexion", type="datetime", nullable=false)
     */
    private $connexion;

    /**
     * @var string
     *
     * @ORM\Column(name="notification", type="string", length=5, nullable=false)
     */
    private $notification;

    /**
     * @var bool
     *
     * @ORM\Column(name="hidden", type="boolean", nullable=false)
     */
    private $hidden;

    /**
     * @var bool
     *
     * @ORM\Column(name="interne_fleurir", type="boolean", nullable=false)
     */
    private $interneFleurir;

    /**
     * @var bool
     *
     * @ORM\Column(name="interne_entretenir", type="boolean", nullable=false)
     */
    private $interneEntretenir;

    /**
     * @var int
     *
     * @ORM\Column(name="hide_fin_droit", type="integer", nullable=false, options={"comment"="0 = vrai"})
     */
    private $hideFinDroit = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=10, nullable=false)
     */
    private $codePostal;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getConcessions(): ?bool
    {
        return $this->concessions;
    }

    public function setConcessions(bool $concessions): self
    {
        $this->concessions = $concessions;

        return $this;
    }

    public function getCreation(): ?\DateTimeInterface
    {
        return $this->creation;
    }

    public function setCreation(\DateTimeInterface $creation): self
    {
        $this->creation = $creation;

        return $this;
    }

    public function getModification(): ?\DateTimeInterface
    {
        return $this->modification;
    }

    public function setModification(\DateTimeInterface $modification): self
    {
        $this->modification = $modification;

        return $this;
    }

    public function getConnexion(): ?\DateTimeInterface
    {
        return $this->connexion;
    }

    public function setConnexion(\DateTimeInterface $connexion): self
    {
        $this->connexion = $connexion;

        return $this;
    }

    public function getNotification(): ?string
    {
        return $this->notification;
    }

    public function setNotification(string $notification): self
    {
        $this->notification = $notification;

        return $this;
    }

    public function getHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(bool $hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getInterneFleurir(): ?bool
    {
        return $this->interneFleurir;
    }

    public function setInterneFleurir(bool $interneFleurir): self
    {
        $this->interneFleurir = $interneFleurir;

        return $this;
    }

    public function getInterneEntretenir(): ?bool
    {
        return $this->interneEntretenir;
    }

    public function setInterneEntretenir(bool $interneEntretenir): self
    {
        $this->interneEntretenir = $interneEntretenir;

        return $this;
    }

    public function getHideFinDroit(): ?int
    {
        return $this->hideFinDroit;
    }

    public function setHideFinDroit(int $hideFinDroit): self
    {
        $this->hideFinDroit = $hideFinDroit;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getRoles () {
        return ['ROLE_USER'];
    }

    public function getSalt () {
        return null;
    }

    public function serialize () {
        return serialize(array(
            $this->id,
            $this->nom,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize ($serialized) {
        list (
            $this->id,
            $this->nom,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, array('allowed_classes' => false));
    }

    public function eraseCredentials () {}

    public function getUsername () {
        return $this->nom;
    }
}
