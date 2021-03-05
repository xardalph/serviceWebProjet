<?php


namespace App\Soap;
/**
* @package    \App\Soap
 *
 */
class MorceauSoap
{
    /**
     * @var int $id id du morceau
     */
    public $id;
    /**
     * @var string $titre titre du morceau
     */
    public $titre;
    /**
     * @var string $duree $duree du morceau
     */
    public $duree;

    /**
     * MorceauSoap constructor.
     * @param int $id
     * @param string $titre
     * @param string $duree
     */
    public function __construct(int $id, string $titre, string $duree)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->duree = $duree;
    }

}