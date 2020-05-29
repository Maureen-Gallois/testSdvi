<?php

namespace src\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollections;

/**
 * Class Pizzeria
 * @package src\Entity
 * Cet objet va définir une pizzeria
 */
class Pizzeria {
    /**
     * une pizzeria a pottentiellment plusieurs pizzaiolo
     * @ORM\OneToMany(targetEntity="src\Entity\Pizzaiolo", mappdBy="pizzeria")
     */

    private $pizzaiolo;

    public function __construct()
    {
        $this->pizzaiolo = newArrayCollection();
    }
}

/**
 * Cet objet qui va définir un pizzaiolo
 */
class Pizzaiolo {
    /**
     * Un pizzaiolo va être lié à une pizzeria
     * @ORM\ManyToOne(targetEntity="src\Entity\Pizzeria", inversedBy="pizzaiolo"
     * @ORM\JoinColumn(name="pizzeria_id", referencedColumnName="id")
     */

    private  $pizzeria;
}