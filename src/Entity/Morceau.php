<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Morceau
 *  @ApiResource()
 * @ORM\Table(name="morceau")
 * @ORM\Entity
 */
class Morceau
{
    /**
     * @var float
     *
     * @ORM\Column(name="ID", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=300, nullable=false)
     */
    public $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE", type="string", length=5, nullable=false)
     */
    public $duree;

    /**
     * @return float
     */
    public function getId(): float
    {
        return $this->id;
    }

    /**
     * @param float $id
     */
    public function setId(float $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDuree(): string
    {
        return $this->duree;
    }

    /**
     * @param string $duree
     */
    public function setDuree(string $duree): void
    {
        $this->duree = $duree;
    }


}
