<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Translation\Tests\String;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var string
     *
     * @ORM\Column(name="titre_event", type="string", length=45, nullable=true)
     */
    private $titreEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_event", type="datetime", nullable=true)
     */
    private $dateDebEvent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_event", type="datetime", nullable=true)
     */
    private $dateFinEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="type_event", type="string", length=20, nullable=true)
     */
    private $typeEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bon_plan", type="boolean", nullable=true)
     */
    private $bonPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Administrateur\AdminBundle\Entity\Membre
     *
     * @ORM\ManyToOne(targetEntity="Administrateur\AdminBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;

    public function getTitreEvent() {
        return $this->titreEvent;
    }

    public function getDateDebEvent() {
        return $this->dateDebEvent;
    }

    public function getDateFinEvent() {
        return $this->dateFinEvent;
    }

    public function getTypeEvent() {
        return $this->typeEvent;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getBonPlan() {
        return $this->bonPlan;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getId() {
        return $this->id;
    }

    public function getIdMembre() {
        return $this->idMembre;
    }

    public function setTitreEvent($titreEvent) {
        $this->titreEvent = $titreEvent;
    }

    public function setDateDebEvent(\DateTime $dateDebEvent) {
        $this->dateDebEvent = $dateDebEvent;
    }

    public function setDateFinEvent(\DateTime $dateFinEvent) {
        $this->dateFinEvent = $dateFinEvent;
    }

    public function setTypeEvent($typeEvent) {
        $this->typeEvent = $typeEvent;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setBonPlan($bonPlan) {
        $this->bonPlan = $bonPlan;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setIdMembre(\Administrateur\AdminBundle\Entity\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }
    
    public function __toString() {
        return (String)$this->id;
        
    }



}
