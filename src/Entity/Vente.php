<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
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
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="MOIS", type="float", precision=10, scale=0, nullable=false)
     */
    private $mois;

    /**
     * @var float
     *
     * @ORM\Column(name="ANNEE", type="float", precision=10, scale=0, nullable=false)
     */
    private $annee;

    /**
     * @var float
     *
     * @ORM\Column(name="NBVENTES", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbventes;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="ID")
     * })
     */
    private $idalbum;


}
