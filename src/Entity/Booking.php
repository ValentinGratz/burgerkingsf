<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BookingRepository::class)
 */
class Booking
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
    private $Booking;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBooking(): ?string
    {
        return $this->Booking;
    }

    public function setBooking(string $Booking): self
    {
        $this->Booking = $Booking;

        return $this;
    }
}
