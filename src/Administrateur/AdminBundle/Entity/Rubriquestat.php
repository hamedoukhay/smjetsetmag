<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubriquestat
 *
 * @ORM\Table(name="Rubriquestat")
 * @ORM\Entity
 */
class Rubriquestat
{
    /**
     * @var string
     *
     * @ORM\Column(name="Rubrique", type="string", length=66, nullable=true)
     */
    private $rubrique;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nbr_visite", type="integer", nullable=true)
     */
    private $nbrVisite;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_rubrique", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRubrique;


}
