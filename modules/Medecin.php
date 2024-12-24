<?php 
require_once "modules/Utilisateur.php";

class Medcin extends Utilisateur {
    private $specialite ;

    public function __construct($nom ,$prenom, $specialite)
    {
        parent::__construct($nom,$prenom ,'Medcin');
        $this->specialite = $specialite;
    

    }

    public function  consulterPatient($patientID) {
        echo " consulter patient $patientID ";

    }
}