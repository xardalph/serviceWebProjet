<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * Membregroupe
 *  @ApiResource()
 * @ORM\Table(name="membregroupe", indexes={@ORM\Index(name="FK_MG_GROUPE", columns={"IDGROUPE"}), @ORM\Index(name="FK_MG_ARTISTE", columns={"IDARTISTE"})})
 * @ORM\Entity
 */
class Membregroupe
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


}
