<?php

namespace App\Entity;

use App\Repository\ChefRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChefRepository::class)
 */
class Chef
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Chef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pr�nom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChef(): ?string
    {
        return $this->Chef;
    }

    public function setChef(string $Chef): self
    {
        $this->Chef = $Chef;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPr�nom(): ?string
    {
        return $this->Pr�nom;
    }

    public function setPr�nom(string $Pr�nom): self
    {
        $this->Pr�nom = $Pr�nom;

        return $this;
    }
}
