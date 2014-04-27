<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Translation\Tests\String;

/**
 * Projection
 *
 * @ORM\Table(name="projection", indexes={@ORM\Index(name="fk_project2", columns={"id_salle"}), @ORM\Index(name="id_film", columns={"id_film"})})
 * @ORM\Entity
 */
class Projection
{


    /**
     * @var integer
     *
     * @ORM\Column(name="id_projection", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \Administrateur\AdminBundle\Entity\Film
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_film", referencedColumnName="id_film")
     * })
     */
    private $idFilm;
    

    /**
     * @var string
     *
     * @ORM\Column(name="date_heure", type="string", length=50, nullable=true)
     */
    private $dateHeure;
    
    public function getId() {
        return $this->id;
    }

    public function getIdSalle() {
        return $this->idSalle;
    }

    public function getIdFilm() {
        return $this->idFilm;
    }

    public function getDateHeure() {
        return $this->dateHeure;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdSalle(\Administrateur\AdminBundle\Entity\Cinema $idSalle) {
        $this->idSalle = $idSalle;
    }

    public function setIdFilm(\Administrateur\AdminBundle\Entity\Film $idFilm) {
        $this->idFilm = $idFilm;
    }

    public function setDateHeure($dateHeure) {
        $this->dateHeure = $dateHeure;
    }

    public function __toString() {
        return (String)$this->id;
        
    }



}
