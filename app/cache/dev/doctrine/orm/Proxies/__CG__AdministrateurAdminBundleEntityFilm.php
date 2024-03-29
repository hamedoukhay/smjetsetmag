<?php

namespace Proxies\__CG__\Administrateur\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Film extends \Administrateur\AdminBundle\Entity\Film implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'dateSortie', 'synopsis', 'dateAjout', 'nomFilm', 'duree', 'id', 'idProduction');
        }

        return array('__isInitialized__', 'dateSortie', 'synopsis', 'dateAjout', 'nomFilm', 'duree', 'id', 'idProduction');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Film $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getDateSortie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSortie', array());

        return parent::getDateSortie();
    }

    /**
     * {@inheritDoc}
     */
    public function getSynopsis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSynopsis', array());

        return parent::getSynopsis();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAjout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAjout', array());

        return parent::getDateAjout();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomFilm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomFilm', array());

        return parent::getNomFilm();
    }

    /**
     * {@inheritDoc}
     */
    public function getDuree()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuree', array());

        return parent::getDuree();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdProduction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdProduction', array());

        return parent::getIdProduction();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSortie($dateSortie)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSortie', array($dateSortie));

        return parent::setDateSortie($dateSortie);
    }

    /**
     * {@inheritDoc}
     */
    public function setSynopsis($synopsis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSynopsis', array($synopsis));

        return parent::setSynopsis($synopsis);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAjout(\DateTime $dateAjout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAjout', array($dateAjout));

        return parent::setDateAjout($dateAjout);
    }

    /**
     * {@inheritDoc}
     */
    public function setNomFilm($nomFilm)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomFilm', array($nomFilm));

        return parent::setNomFilm($nomFilm);
    }

    /**
     * {@inheritDoc}
     */
    public function setDuree($duree)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuree', array($duree));

        return parent::setDuree($duree);
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setIdProduction(\Administrateur\AdminBundle\Entity\Production $idProduction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdProduction', array($idProduction));

        return parent::setIdProduction($idProduction);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
