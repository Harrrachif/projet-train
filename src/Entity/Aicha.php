<?php

namespace App\Entity;

use App\Repository\AichaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AichaRepository::class)
 */
class Aicha
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
    private $produit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fruits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(string $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getFruits(): ?string
    {
        return $this->fruits;
    }

    public function setFruits(string $fruits): self
    {
        $this->fruits = $fruits;

        return $this;
    }
}
