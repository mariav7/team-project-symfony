<?php

namespace App\Entity;

use App\Repository\CategorieArtRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieArtRepository::class)
 */
class CategorieArt
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
    private $type_de_art;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeDeArt(): ?string
    {
        return $this->type_de_art;
    }

    public function setTypeDeArt(string $type_de_art): self
    {
        $this->type_de_art = $type_de_art;

        return $this;
    }
}
