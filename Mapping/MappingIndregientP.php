<?php

namespace src\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Dans le schéma, je ne voyais pas à quoi correspondais l'id dans la
 * classe IngredientPizza, si il correspondait à l'id d'un ingrédient
 * (d'où la présence de quantité dans), ou si il correspondait à
 * l'id de la liste des ingrédients pour une pizza (et donc je ne
 * comprend pas la présence de quantité)
 */



/**
 * Cet objet va definir la liste des ingredients pour une pizza
 */
class IngredientPizza{
    /**
     * Chaque pizza a sa liste d'ingrédients
     * @ORM\ManyToOne(targetEntity="src\Entity\Pizza", inversedBy="ingredientPizzas")
     * @ORM\JoinColumn(name="pizza_id", referencedColumnName="id")
     */
    private $pizzas;

    /**
     * Chaque ingredient a une quantité défini pour une pizza
     * @ORM\Column(type="integer")
     */
    private $quantites;

    /**
     * les ingredient doivent être convertis pour une grande quantité
     * @ORM\Column(type="float")
     */
    private $grammeKilo;

    /**
     * @param float $grammeKilo
     * Cette fonction va permettre de convertir le poid entrer en paramètre (en gramme) en kilogramme
     */
    public function converirGrammeEnKilo($grammeKilo)
    {
        $grams = new Mass\Gram($grammeKilo);
        $kiloGram = new Mass\KiloGram;
        $grams->to($kiloGram);
        echo $kiloGram->format();
    }

}
