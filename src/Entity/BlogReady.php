<?php

namespace App\Entity;

use App\Repository\BlogReadyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogReadyRepository::class)
 */
class BlogReady
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
    private $BlogReady;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlogReady(): ?string
    {
        return $this->BlogReady;
    }

    public function setBlogReady(string $BlogReady): self
    {
        $this->BlogReady = $BlogReady;

        return $this;
    }
}
