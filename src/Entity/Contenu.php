<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $id;

    /**
     * @var \Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDALBUM", referencedColumnName="ID")
     * })
     */
    private $idalbum;

    /**
     * @var \Morceau
     *
     * @ORM\ManyToOne(targetEntity="Morceau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IDMORCEAU", referencedColumnName="ID")
     * })
     */
    private $idmorceau;


}
