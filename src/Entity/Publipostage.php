<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publipostage
 *
 * @ORM\Table(name="publipostage", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity(repositoryClass="App\Repository\PublipostageRepository")
 */
class Publipostage
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
     * @ORM\Column(name="fichier", type="text", length=65535, nullable=false)
     */
    private $fichier;

    /**
     * @var string
     *
     * @ORM\Column(name="recherche", type="text", length=65535, nullable=false)
     */
    private $recherche;

    /**
     * @var string
     *
     * @ORM\Column(name="remplace", type="text", length=65535, nullable=false)
     */
    private $remplace;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getRecherche(): ?string
    {
        return $this->recherche;
    }

    public function setRecherche(string $recherche): self
    {
        $this->recherche = $recherche;

        return $this;
    }

    public function getRemplace(): ?string
    {
        return $this->remplace;
    }

    public function setRemplace(string $remplace): self
    {
        $this->remplace = $remplace;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }


}
