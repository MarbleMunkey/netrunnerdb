<?php

namespace Netrunnerdb\BuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deckchange
 */
class Deckchange
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateCreation;

    /**
     * @var string
     */
    private $variation;

    /**
     * @var \Netrunnerdb\BuilderBundle\Entity\Deck
     */
    private $deck;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Change
     */
    public function setDatecreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set variation
     *
     * @param string $variation
     * @return Change
     */
    public function setVariation($variation)
    {
        $this->variation = $variation;

        return $this;
    }

    /**
     * Get variation
     *
     * @return string
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Set deck
     *
     * @param \Netrunnerdb\BuilderBundle\Entity\Deck $deck
     * @return Change
     */
    public function setDeck(\Netrunnerdb\BuilderBundle\Entity\Deck $deck = null)
    {
        $this->deck = $deck;

        return $this;
    }

    /**
     * Get deck
     *
     * @return \Netrunnerdb\BuilderBundle\Entity\Deck
     */
    public function getDeck()
    {
        return $this->deck;
    }
    /**
     * @var boolean
     */
    private $saved;


    /**
     * Set saved
     *
     * @param boolean $saved
     * @return Deckchange
     */
    public function setSaved($saved)
    {
        $this->saved = $saved;

        return $this;
    }

    /**
     * Get saved
     *
     * @return boolean 
     */
    public function getSaved()
    {
        return $this->saved;
    }
}
