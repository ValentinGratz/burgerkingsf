<?php

namespace App\Entity;

use App\Repository\CatFoodRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CatFoodRepository::class)
 */
class CatFood
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
    private $CatFood;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatFood(): ?string
    {
        return $this->CatFood;
    }

    public function setCatFood(string $CatFood): self
    {
        $this->CatFood = $CatFood;

        return $this;
    }
}
