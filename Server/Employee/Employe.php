<?php
declare (strict_types=1);

class Employe {
    private $idE;
    private $matricule;
    private $prenom;
    private $nom;
    private $email;
    //private $dateJ;
   // private $heureEntree;
   // private $heureSortie;
    //private $departement;
    //private $etablissement;

    function __construct(int $idE, string $matricule, string $prenom, string $nom, string $email/*,string $dateJ, string $heureEntree, string $heureSortie,string $departement, string $etablissement*/ ) {
        $this->idE = $idE;
        $this->matricule = $matricule;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->email = $email;
       // $this->dateJ = $dateJ;
       // $this->heureEntree = $heureEntree;
       // $this->heureSortie = $heureSortie;
        //$this->departement = $departement;
        //$this->etablissement = $etablissement;
    }

    function getIdE():int {
        return $this->idE;
    }
    function getMatricule():string {
        return $this->matricule;
    }
    function getPrenom():string {
        return $this->prenom;
    }
    function getNom():string {
        return $this->nom;
    }
    function getEmail():string {
        return $this->email;
    }
    function getDateJ():string {
        return $this->dateJ;
    }
    function getHeureEntree():string {
        return $this->heureEntree;
    }
    function getHeureSortie():string {
        return $this->heureSortie;
    }
    function getDepartement():int {
        return $this->departement;
    }
    function getEtablissement():int {
        return $this->etablissement;
    }


    function setIdE($idE) : void {
        $this ->idE = $idE;
    }

    function setMatricule($matricule):void {
        $this->matricule = $matricule;
    }
    function setPrenom($prenom):void {
        $this->prenom = $prenom;
    }
    function setNom($nom):void {
        $this->nom = $nom;
    }
    function setEmail($email):void {
        $this->email = $email;
    }
    function setDateJ($dateJ):void {
        $this->dateJ = $dateJ;
    }
    function setHeureEntree($heureEntree):void {
        $this->heureEntree = $heureEntree;
    }

    function setHeureSortie($heureSortie):void {
        $this->heureSortie = $heureSortie;
    }
    function setDepartement($departement):void {
        $this->departement = $departement;
    }
    function setEtablissement($etablissement):void {
        $this->etablissement = $etablissement;
    }
}
?>