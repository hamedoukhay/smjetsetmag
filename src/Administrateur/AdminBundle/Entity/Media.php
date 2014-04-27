<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="Media")
 * @ORM\Entity
 */
class Media
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_media", type="string", length=30, nullable=false)
     */
    private $typeMedia;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=300, nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_media", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMedia;


}
