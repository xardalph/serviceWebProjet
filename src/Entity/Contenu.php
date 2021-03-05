<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Contenu
 *
 * @ORM\Table(name="contenu", indexes={@ORM\Index(name="FK_CONTENU_MORCEAU", columns={"IDMORCEAU"}), @ORM\Index(name="FK_CONTENU_ALBUM", columns={"IDALBUM"})})
 * @ORM\Entity
 */
class Contenu
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
     * @var Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="ID")
     * })
     */
    public $idalbum;

    /**
     * @var Morceau
     *
     * @ORM\ManyToOne(targetEntity="Morceau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMORCEAU", referencedColumnName="ID")
     * })
     */
    public $idmorceau;


}
