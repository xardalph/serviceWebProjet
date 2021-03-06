<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use App\Entity\Album;
/**
 * Vente
 *  @ApiResource()
 * @ORM\Table(name="vente", indexes={@ORM\Index(name="FK_VENTE_ALBUM", columns={"IDALBUM"})})
 * @ORM\Entity
 */
class Vente
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
     * @var float
     *
     * @ORM\Column(name="MOIS", type="float", precision=10, scale=0, nullable=false)
     */
    public $mois;

    /**
     * @var float
     *
     * @ORM\Column(name="ANNEE", type="float", precision=10, scale=0, nullable=false)
     */
    public $annee;

    /**
     * @var float
     *
     * @ORM\Column(name="NBVENTES", type="float", precision=10, scale=0, nullable=false)
     */
    public $nbventes;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="ID")
     * })
     */
    public $idalbum;


}
