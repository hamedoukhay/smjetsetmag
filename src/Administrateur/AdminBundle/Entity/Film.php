<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film", indexes={@ORM\Index(name="fk_film", columns={"id_production"})})
 * @ORM\Entity
 */
class Film
{
    /**
     * @var string
     *
     * @ORM\Column(name="date_sortie", type="string", length=30, nullable=true)
     */
    private $dateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="synopsis", type="string", length=500, nullable=true)
     */
    private $synopsis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="datetime", nullable=false)
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_film", type="string", length=45, nullable=true)
     */
    private $nomFilm;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=30, nullable=true)
     */
    private $duree;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_film", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Administrateur\AdminBundle\Entity\Production
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Production")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_production", referencedColumnName="id_production")
     * })
     */
    private $idProduction;
    public function getDateSortie() {
        return $this->dateSortie;
    }

    public function getSynopsis() {
        return $this->synopsis;
    }

    public function getDateAjout() {
        return $this->dateAjout;
    }

    public function getNomFilm() {
        return $this->nomFilm;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdProduction() {
        return $this->idProduction;
    }

    public function setDateSortie($dateSortie) {
        $this->dateSortie = $dateSortie;
    }

    public function setSynopsis($synopsis) {
        $this->synopsis = $synopsis;
    }

    public function setDateAjout(\DateTime $dateAjout) {
        $this->dateAjout = $dateAjout;
    }

    public function setNomFilm($nomFilm) {
        $this->nomFilm = $nomFilm;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdProduction(\Administrateur\AdminBundle\Entity\Production $idProduction) {
        $this->idProduction = $idProduction;
    }

  public function __toString() {
        return (String)$this->id;
        
    }
    


}
