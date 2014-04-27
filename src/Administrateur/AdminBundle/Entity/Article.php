<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=10000, nullable=true)
     */
    private $texte;

    /**
     * @var float
     *
     * @ORM\Column(name="note_moy", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteMoy;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_visite", type="integer", nullable=true)
     */
    private $nbrVisite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_redaction", type="datetime", nullable=false)
     */
    private $dateRedaction;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id_article", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * 
     */
    private $id;
    
    public function getTitre() {
        return $this->titre;
    }

    public function getTexte() {
        return $this->texte;
    }

    public function getNoteMoy() {
        return $this->noteMoy;
    }

    public function getNbrVisite() {
        return $this->nbrVisite;
    }

    public function getDateRedaction() {
        return $this->dateRedaction;
    }



    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setTexte($texte) {
        $this->texte = $texte;
    }

    public function setNoteMoy($noteMoy) {
        $this->noteMoy = $noteMoy;
    }

    public function setNbrVisite($nbrVisite) {
        $this->nbrVisite = $nbrVisite;
    }

    public function setDateRedaction(\DateTime $dateRedaction) {
        $this->dateRedaction = $dateRedaction;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($idArticle) {
        $this->id = $idArticle;
    }




    public function __toString() {
        return (String)$this->id;
        
    }


}
