<?php

namespace Netrunnerdb\BuilderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Decklistslot
 */
class Decklistslot
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var Netrunnerdb\BuilderBundle\Entity\Decklist
     */
    private $decklist;

    /**
     * @var Netrunnerdb\CardsBundle\Entity\Card
     */
    private $card;
    
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Deckcontent
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set deck
     *
     * @param string $decklist
     * @return Deck
     */
    public function setDecklist($decklist)
    {
    	$this->decklist = $decklist;
    
    	return $this;
    }
    
    /**
     * Get decklist
     *
     * @return \Netrunnerdb\BuilderBundle\Entity\Decklist
     */
    public function getDecklist()
    {
    	return $this->decklist;
    }

    /**
     * Set card
     *
     * @param string $card
     * @return Decklistslot
     */
    public function setCard($card)
    {
    	$this->card = $card;
    
    	return $this;
    }
    
    /**
     * Get card
     *
     * @return \Netrunnerdb\CardsBundle\Entity\Card
     */
    public function getCard()
    {
    	return $this->card;
    }
    
}