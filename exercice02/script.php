<?php

class Vehicule
{
    public $nbRoues;
    public $couleur;

    function avancer()
    {
    }
}

class Bateau extends Vehicule
{
    function avancer()
    {
        this->roule();
    }
    function navigue()
    {
        echo ("Je navigue");
    }
}

class Voiture extends Vehicule
{
    function avancer()
    {
        roule();
    }
    function roule()
    {
        echo ("Je roule");
    }
}

$toyota = new Voiture();
$toyota->avancer();
$ship = new Bateau();
$ship->avancer();
