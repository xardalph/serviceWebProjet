<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Morceau
 *
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
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=300, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="DUREE", type="string", length=5, nullable=false)
     */
    private $duree;


}
