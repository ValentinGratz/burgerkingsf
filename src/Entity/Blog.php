<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=3600)
     */
    private $Blog;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlog(): ?string
    {
        return $this->Blog;
    }

    public function setBlog(string $Blog): self
    {
        $this->Blog = $Blog;

        return $this;
    }
}
