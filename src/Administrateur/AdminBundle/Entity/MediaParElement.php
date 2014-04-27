<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MediaParElement
 *
 * @ORM\Table(name="Media_Par_Element", indexes={@ORM\Index(name="id_media", columns={"id_media"}), @ORM\Index(name="id_article", columns={"id_article"}), @ORM\Index(name="id_film", columns={"id_film"}), @ORM\Index(name="id_evenement", columns={"id_evenement"}), @ORM\Index(name="id_projection", columns={"id_projection"}), @ORM\Index(name="id_salle", columns={"id_salle"})})
 * @ORM\Entity
 */
class MediaParElement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_media_page", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMediaPage;

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
     * @var \Administrateur\AdminBundle\Entity\Cinema
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Cinema")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_salle", referencedColumnName="id_salle")
     * })
     */
    private $idSalle;

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
     * @var \Administrateur\AdminBundle\Entity\Film
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_film", referencedColumnName="id_film")
     * })
     */
    private $idFilm;

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
     * @var \Administrateur\AdminBundle\Entity\Media
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Media")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_media", referencedColumnName="id_media")
     * })
     */
    private $idMedia;


}
