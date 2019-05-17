<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailing
 *
 * @ORM\Table(name="mailing")
 * @ORM\Entity(repositoryClass="App\Repository\MailingRepository")
 */
class Mailing
{
    /**
     * @var int
     *
     * @ORM\Column(name="mai_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $maiId;

    /**
     * @var string
     *
     * @ORM\Column(name="mai_file", type="string", length=255, nullable=false)
     */
    private $maiFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mai_createAt", type="datetime", nullable=false)
     */
    private $maiCreateat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mai_modifiedAt", type="datetime", nullable=false)
     */
    private $maiModifiedat;

    public function getMaiId(): ?int
    {
        return $this->maiId;
    }

    public function getMaiFile(): ?string
    {
        return $this->maiFile;
    }

    public function setMaiFile(string $maiFile): self
    {
        $this->maiFile = $maiFile;

        return $this;
    }

    public function getMaiCreateat(): ?\DateTimeInterface
    {
        return $this->maiCreateat;
    }

    public function setMaiCreateat(\DateTimeInterface $maiCreateat): self
    {
        $this->maiCreateat = $maiCreateat;

        return $this;
    }

    public function getMaiModifiedat(): ?\DateTimeInterface
    {
        return $this->maiModifiedat;
    }

    public function setMaiModifiedat(\DateTimeInterface $maiModifiedat): self
    {
        $this->maiModifiedat = $maiModifiedat;

        return $this;
    }


}
