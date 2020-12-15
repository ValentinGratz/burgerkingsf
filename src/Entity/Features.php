<?php

namespace App\Entity;

use App\Repository\FeaturesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FeaturesRepository::class)
 */
class Features
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
    private $Features;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeatures(): ?string
    {
        return $this->Features;
    }

    public function setFeatures(string $Features): self
    {
        $this->Features = $Features;

        return $this;
    }
}
