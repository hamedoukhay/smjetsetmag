<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cinema
 *
 * @ORM\Table(name="cinema")
 * @ORM\Entity
 */
class Cinema
{
    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=1000, nullable=true)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_salle", type="string", length=70, nullable=true)
     */
    private $nomSalle;

    /**
     * @var float
     *
     * @ORM\Column(name="coordx", type="float", precision=10, scale=0, nullable=true)
     */
    private $coordx;

    /**
     * @var float
     *
     * @ORM\Column(name="coordy", type="float", precision=10, scale=0, nullable=true)
     */
    private $coordy;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_salle", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    public function getAdresse() {
        return $this->adresse;
    }

    public function getEmplacement() {
        return $this->emplacement;
    }

    public function getNomSalle() {
        return $this->nomSalle;
    }

    public function getCoordx() {
        return $this->coordx;
    }

    public function getCoordy() {
        return $this->coordy;
    }

    public function getId() {
        return $this->id;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setEmplacement($emplacement) {
        $this->emplacement = $emplacement;
    }

    public function setNomSalle($nomSalle) {
        $this->nomSalle = $nomSalle;
    }

    public function setCoordx($coordx) {
        $this->coordx = $coordx;
    }

    public function setCoordy($coordy) {
        $this->coordy = $coordy;
    }

    public function setId($id) {
        $this->id = $id;
    }




}
