<?php

namespace Administrateur\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table(name="membre", uniqueConstraints={@ORM\UniqueConstraint(name="unique", columns={"username"})})
 * @ORM\Entity
 */
class Membre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=20, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAdministrateur", type="boolean", nullable=false)
     */
    private $isadministrateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_membre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    public function getNom() {
        return $this->nom;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getIsadministrateur() {
        return $this->isadministrateur;
    }

    public function getId() {
        return $this->id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setIsadministrateur($isadministrateur) {
        $this->isadministrateur = $isadministrateur;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function __toString() {
        return $this->username;
        
    }



}
