<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite", indexes={@ORM\Index(name="fk_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Visite
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree", type="datetime", nullable=false)
     */
    private $dateEntree;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_visteur", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVisteur;

    /**
     * @var \Administrateur\AdminBundle\Entity\Membre
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;


}
