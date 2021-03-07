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
     * Dis "Hello" à la personne passée en paramètre
     * @param string $name Le nom de la personne à qui dire "Hello!"
     * @return string The hello string
     */
    public function sayHello(string $name): string
    {
        return 'Hello ' . $name . '!';
    }

    /**
     * Réalise la somme de deux entiers
     * @param int $a 1er nombre
     * @param int $b 2ème nombre
     * @return int La somme des deux entiers
     */
    public function sumHello(int $a, int $b): int
    {
        return (int)($a + $b);
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @return float
     */
    public function sumFloats(float $a, float $b, float $c): float
    {
        return (float)($a + $b + $c);
    }


    /**
     * Récupère le libellé d'un secteur dont on connaît l'id
     * @return \App\Soap\MorceauSoap Le Morceau qu'on veux
     */
    public function getMorceauLibelle($mor)
    {

        $mor2 = $this->doct->getRepository(\App\Entity\Morceau::class)->find($mor);
        $morceau = new MorceauSoap($mor2->getId(), $mor2->getTitre(), $mor2->getDuree() );

        file_put_contents("./tests2", serialize($morceau->titre));

        return $morceau;
    }
    /**
     * Récupère le libellé d'un secteur dont on connaît l'id
     * @return \App\Soap\MorceauSoap Le Morceau qu'on veux
     */
    public function getGroupe($id)
    {

        $mor2 = $this->doct->getRepository(\App\Entity\Morceau::class)->find($id);
        $morceau = new MorceauSoap($mor2->getId(), $mor2->getTitre(), $mor2->getDuree() );

        file_put_contents("./tests2", serialize($morceau->titre));

        return $morceau;
    }
}