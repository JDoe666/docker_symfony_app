<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $hello = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHello(): ?string
    {
        return $this->hello;
    }

    public function setHello(string $hello): static
    {
        $this->hello = $hello;

        return $this;
    }
}
