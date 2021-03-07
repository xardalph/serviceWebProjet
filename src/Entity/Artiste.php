<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Artiste
 * @ApiResource()
 * @ORM\Table(name="artiste")
 * @ORM\Entity
 */
class Artiste
{
    /**
     * @var float
     *
     * @ORM\Column(name="ID", type="integer", scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=300, nullable=false)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTCHANTEUR", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    public $estchanteur;


  


}
