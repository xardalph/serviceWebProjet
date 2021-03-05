<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use App\Entity\Artiste;
use App\Entity\Groupe;


/**
 * @ApiResource(attributes={"filters"={"offer.date"}})
/**
 * Album

 * @ORM\Table(name="album", indexes={@ORM\Index(name="FK_ALBUM_GROUPE", columns={"IDGROUPE"}), @ORM\Index(name="FK_ALBUM_ARTISTE", columns={"IDARTISTE"})})
 * @ORM\Entity
 */
class Album
{


    /**
     * @var string
     *
     * @ORM\Column(name="TITRE", type="string", length=300, nullable=false)
     */
    public $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="GENRE", type="string", length=100, nullable=false)
     */
    public $genre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATESORTIE", type="datetime", nullable=false)
     */
    public $datesortie;

    /**
     * @var float
     *
     * @ORM\Column(name="PRIX", type="float", precision=10, scale=0, nullable=false)
     */
    public $prix;

    /**
     * @var Artiste
     *
     * @ORM\ManyToOne(targetEntity="Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDARTISTE", referencedColumnName="ID")
     * })
     */
    public $idartiste;

    /**
     * @var Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDGROUPE", referencedColumnName="ID")
     * })
     */
    public $idgroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;



}
