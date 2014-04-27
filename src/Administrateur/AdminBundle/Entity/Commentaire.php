<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_com1", columns={"id_film"}), @ORM\Index(name="fk_com2", columns={"id_article"}), @ORM\Index(name="fk_com3", columns={"id_evenement"}), @ORM\Index(name="fk_com4", columns={"id_membre"}), @ORM\Index(name="fk_com5", columns={"id_projection"})})
 * @ORM\Entity
 */
class Commentaire
{
     /**
     * @var integer
     *
     * @ORM\Column(name="id_com", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=255, nullable=false)
     */
    private $texte;



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
     * @var \Administrateur\AdminBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     * })
     */
    private $idEvenement;

    /**
     * @var integer $id
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_com", type="datetime", nullable=false)
     */
    private $dateCom;


    public function getTexte() {
        return $this->texte;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdProjection() {
        return $this->idProjection;
    }

    public function getIdEvenement() {
        return $this->idEvenement;
    }

    public function getIdArticle() {
        return $this->idArticle;
    }

    public function getIdFilm() {
        return $this->idFilm;
    }

    public function getIdMembre() {
        return $this->idMembre;
    }
        
    public function getDateCom() {
        return $this->dateCom;
    }

    public function setDateCom(\DateTime $dateCom) {
        $this->dateCom = $dateCom;
    }

    public function setTexte($texte) {
        $this->texte = $texte;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdProjection(\Administrateur\AdminBundle\Entity\Projection $idProjection) {
        $this->idProjection = $idProjection;
    }

    public function setIdEvenement(\Administrateur\AdminBundle\Entity\Evenement $idEvenement) {
        $this->idEvenement = $idEvenement;
    }

    public function setIdArticle($idArticle) {
        $this->idArticle = $idArticle;
    }

    public function setIdFilm(\Administrateur\AdminBundle\Entity\Film $idFilm) {
        $this->idFilm = $idFilm;
    }

    public function setIdMembre(\Administrateur\AdminBundle\Entity\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }




}
