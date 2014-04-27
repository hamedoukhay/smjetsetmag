<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Production
 *
 * @ORM\Table(name="production")
 * @ORM\Entity
 */
class Production
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_production", type="string", length=20, nullable=false)
     */
    private $nomProduction;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_production", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduction;


}
