<?php

namespace src\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollections;

/**
 * Cet objet qui va définir un pizzaiolo
 */
class Pizzaiolo {
    /**
     * Un pizzaiolo va être lié à une pizzeria
     * @ORM\ManyToOne(targetEntity="src\Entity\Pizzeria", inversedBy="pizzaiolo"
     * @ORM\JoinColumn(name="pizzeria_id", referencedColumnName="id")
     */

    private  $pizzerias;

    /**
     * Chaque pizzaiolo a un id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Chaque pizzaiolo a un nom
     * @ORM\Column(type="string")
     */
    private $noms;

    /**
     * Chaque pizzaiolo a un prenom
     * @ORM\Column(type="string")
     */
    private $prenoms;

    /**
     * Chaque pizzaiolo a un numero de securite
     * @ORM\Column(type="string")
     */
    private $numeroSecus;

}