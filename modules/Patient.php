<?php

require_once "modules/Utilisateur.php";

class Patient extends Utilisateur
{
    private $rendez_vous ;

    public function __construct($nom ,$prenom)
    {
        parent::__construct($nom,$prenom ,'Patient');


    }

    public function  prendreRendezVous( $medcinID,$chambreID , $date) {

        echo " prendre un rendez vous avec medcin  : $medcinID , chambre :$chambreID";
  
        $this->rendez_vous = ['date'=> $date, 'medcinID'=> $medcinID ,'chambreID'=> $chambreID ] ;

    }
}
