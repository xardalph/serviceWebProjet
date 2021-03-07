<?php


namespace App\Soap;

use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;

/**
 * Class SoapOperations
 * @package App\Soap
 */
class SoapOperations
{
    private $doct;

    /**
     * SoapOperations constructor.
     * @param ManagerRegistry $doct
     */
    public function __construct(ManagerRegistry $doct)
    {
        $this->doct = $doct;
    }
    /**
     * Récupère morceau Depuis la base de données avec son id
     * @return \App\Soap\MorceauSoap Le morceau
     */
    public function getMorceauLibelle($mor)
    {

        $mor2 = $this->doct->getRepository(\App\Entity\Morceau::class)->find($mor);
        $morceau = new MorceauSoap($mor2->getId(), $mor2->getTitre(), $mor2->getDuree() );

        file_put_contents("./tests2", serialize($morceau->titre));

        return $morceau;
    }
}