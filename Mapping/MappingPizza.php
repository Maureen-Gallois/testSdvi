<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cet objet sert à définir une pizza
 */
class Pizza{
    /**
     * Une pizza peut être créée/servie dans plusieurs pizzeria
     * ORM\ManyToMany(targetEntity="src\Entity\Pizzeria", insersedBy="pizzas")
     * @JoinTable(name="pizza_id")
     */
    private $pizzeria;

    /**
     * Chaque pizza a un id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Chaque pizza a un nom
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * Chaque pizza a un cout
     * @ORM\Column(type="integer")
     */
    private $cout;

    public function getCout(){
        return $this->cout;
    }

}

/**
 * Cet objet permet de définir une pizzeria
 */
class Pizzeria{

    /**
     * Une pizzeria propose plusieurs pizzas
     * ORM\ManyToMany(targetEntity="src\Entity\Pizza", insersedBy="pizzerias")
     */
    private $pizzas;

    /**
     * Chaque pizzeria a un id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Chaque pizza a un nom
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * Chaque pizza a une marge
     * @ORM\Column(type="float")
     */
    private $marge;

    /**
     * Chaque pizza a un numero de telephone
     * @ORM\Column(type="string")
     */
    private $numTelephone;

    /**
     * Pizzeria constructor
     */
    public function __construct()
    {
        $this->pizzas = new ArrayCollection();
    }
}
