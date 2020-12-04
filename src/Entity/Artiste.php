<?php

namespace App\Entity;

use App\Repository\ArtisteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArtisteRepository::class)
 */
class Artiste
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_de_artiste;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getTypeDeArtiste(): ?string
    {
        return $this->type_de_artiste;
    }

    public function setTypeDeArtiste(string $type_de_artiste): self
    {
        $this->type_de_artiste = $type_de_artiste;

        return $this;
    }
}
