<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="artiste")
 * @ORM\Entity
 */
class Artiste
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
     * @ORM\Column(name="NOM", type="string", length=300, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ESTCHANTEUR", type="string", length=1, nullable=false, options={"fixed"=true})
     */
    private $estchanteur;


}
