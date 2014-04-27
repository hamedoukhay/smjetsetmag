<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="fk_note1", columns={"id_film"}), @ORM\Index(name="fk_note2", columns={"id_article"}), @ORM\Index(name="fk_note4", columns={"id_projection"}), @ORM\Index(name="fk_note5", columns={"id_evenement"}), @ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_etoiles", type="integer", nullable=false)
     */
    private $nbrEtoiles;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_note", type="datetime", nullable=false)
     */
    private $dateNote;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_note", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNote;

    /**
     * @var \Administrateur\AdminBundle\Entity\Membre
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;

    /**
     * @var \Administrateur\AdminBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     * })
     */
    private $idEvenement;

    /**
     * @var \Administrateur\AdminBundle\Entity\Projection
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Projection")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_projection", referencedColumnName="id_projection")
     * })
     */
    private $idProjection;

    /**
     * @var \Administrateur\AdminBundle\Entity\Article
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_article", referencedColumnName="id_article")
     * })
     */
    private $idArticle;

    /**
     * @var \Administrateur\AdminBundle\Entity\Film
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_film", referencedColumnName="id_film")
     * })
     */
    private $idFilm;


}
