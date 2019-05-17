<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MinisitesMenu
 *
 * @ORM\Table(name="minisites_menu")
 * @ORM\Entity(repositoryClass="App\Repository\MinisitesMenuRepository")
 */
class MinisitesMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="menu", type="text", length=65535, nullable=false)
     */
    private $menu;

    /**
     * @var string
     *
     * @ORM\Column(name="page", type="text", length=65535, nullable=false)
     */
    private $page;

    /**
     * @var string
     *
     * @ORM\Column(name="page_header", type="text", length=65535, nullable=false)
     */
    private $pageHeader;

    /**
     * @var string
     *
     * @ORM\Column(name="default_content", type="text", length=65535, nullable=false)
     */
    private $defaultContent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMenu(): ?string
    {
        return $this->menu;
    }

    public function setMenu(string $menu): self
    {
        $this->menu = $menu;

        return $this;
    }

    public function getPage(): ?string
    {
        return $this->page;
    }

    public function setPage(string $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getPageHeader(): ?string
    {
        return $this->pageHeader;
    }

    public function setPageHeader(string $pageHeader): self
    {
        $this->pageHeader = $pageHeader;

        return $this;
    }

    public function getDefaultContent(): ?string
    {
        return $this->defaultContent;
    }

    public function setDefaultContent(string $defaultContent): self
    {
        $this->defaultContent = $defaultContent;

        return $this;
    }


}
