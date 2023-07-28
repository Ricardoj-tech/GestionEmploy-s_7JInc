<?php
// Au début de PHP: Déclarer les types dans les paramétres des fonctions
declare (strict_types=1);

require_once(__DIR__."/../Connexion.php");
require_once("Employe.php");

class DaoEmploye {
    static private $modelEmploye = null;
    private $reponse=array();
    private $connexion = null;
	
    private function __construct(){
        
    }
    
// Retourne le singleton du modèle 
	static function getDaoEmploye():DaoEmploye {
		if(self::$modelEmploye == null){
			self::$modelEmploye = new DaoEmploye();  
		}
		return self::$modelEmploye;
	}
    function Mdrf_Ajouter(Employe $ressource):string {
        //global $reponse;
       
        $connexion =  Connexion::getConnexion();
        
        $requette="INSERT INTO ressource VALUES(null,?,?,?)";
        try{
            $donnees = 
            [
                $ressource->getMatricule(),
                $ressource->getPrenom(),
                $ressource->getNom(),
                $ressource->getEmail(),
            ];
           
            $stmt = $connexion->prepare($requette);
            $stmt->execute($donnees);
            $this->reponse['OK'] = true;
            $this->reponse['msg'] = "Ressource a été bien enregistré";
        }catch (Exception $e){
            $this->reponse['OK'] = false;
            $this->reponse['msg'] = "Problème pour enregistrer une ressource";
        }finally {
          unset($connexion);
          return json_encode($this->reponse);
        }
    }

	
	function MdlF_Enregistrer(Employe $employe):string {
        //global $reponse;
       
        $connexion =  Connexion::getConnexion();
        
        $requette="INSERT INTO employee VALUES(0,?,?,?)";
        try{
            $donnees = 
            [
                $patient->getMatricule(),
                $patient->getPrenom(),
                $patient->getNom(),
                $patient->getDepatement(),
                $patient->getEtablissement(),
            ];
           
            $stmt = $connexion->prepare($requette);
            $stmt->execute($donnees);
            $this->reponse['OK'] = true;
            $this->reponse['msg'] = "Patient bien enregistré";
        }catch (Exception $e){
            $this->reponse['OK'] = false;
            $this->reponse['msg'] = "Probléme pour enregistrer le patient";
        }finally {
          unset($connexion);
          return json_encode($this->reponse);
        }
    }
   
    function MdlF_getAll():string {
        global $reponse;
        $connexion = Connexion::getConnexion();
        $requette="SELECT * FROM employee";
        try{
            $stmt = $connexion->prepare($requette);
            $stmt->execute();
            $reponse['OK'] = true;
            $reponse['msg'] = "";
            $reponse['listePatients'] = array();
            $reponse['listePatients'] = $stmt->fetchAll();
        }catch (Exception $e){ 
            $reponse['OK'] = false;
            $reponse['msg'] = "Problème pour obtenir les données des patients";
        }finally {
          unset($connexion);
          return json_encode($reponse);
        }
    }
    function MdlF_getRessource():string {
        global $reponse;
        $connexion = Connexion::getConnexion();
        $requette="SELECT * FROM ressource";
        try{
            $stmt = $connexion->prepare($requette);
            $stmt->execute();
            $reponse['OK'] = true;
            $reponse['msg'] = "";
            $reponse['listeEmployes'] = array();
            $reponse['listeEmployes'] = $stmt->fetchAll();
        }catch (Exception $e){ 
            $reponse['OK'] = false;
            $reponse['msg'] = "Problème pour obtenir les données des patients";
        }finally {
          unset($connexion);
          return json_encode($reponse);
        }
    }

    function MdlF_getAllHospitalisations():string {
        global $reponse;
        $connexion = Connexion::getConnexion();
        $requette="SELECT * FROM hospitalisations";
        try{
            $stmt = $connexion->prepare($requette);
            $stmt->execute();
            $reponse['OK'] = true;
            $reponse['msg'] = "";
            $reponse['listeHospitalisations'] = array();
            $reponse['listeHospitalisations'] = $stmt->fetchAll();
        }catch (Exception $e){ 
            $reponse['OK'] = false;
            $reponse['msg'] = "Problème pour obtenir les données des patients";
        }finally {
          unset($connexion);
          return json_encode($reponse);
        }
    }

    function MdlF_getAllEtablissements():string {
        global $reponse;
        $connexion = Connexion::getConnexion();
        $requette="SELECT employee.idE, employee.matricule, employee.prenom, employee.nom, employee.dateJ, employee.heureEntree FROM patients INNER JOIN hospitalisations ON patients.idp = hospitalisations.idp WHERE code = ?";
        try{
            $stmt = $connexion->prepare($requette);
            $stmt->execute();
            $reponse['OK'] = true;
            $reponse['msg'] = "";
            $reponse['listeEtablissements'] = array();
            $reponse['listeEtablissements'] = $stmt->fetchAll();
        }catch (Exception $e){ 
            $reponse['OK'] = false;
            $reponse['msg'] = "Problème pour obtenir les données des patients";
        }finally {
          unset($connexion);
          return json_encode($reponse);
        }
    }
    function MdlF_getAllSpecialiteSexe():string {
        global $reponse;
        $connexion = Connexion::getConnexion();
        $requette="SELECT hospitalisations.code, patients.nom ,patients.prenom , hospitalisations.admission, hospitalisations.sortie FROM hospitalisations INNER JOIN patients ON hospialisations.idp = patients.idp WHERE specialite = ? AND sexe = ? ";
        try{
            $stmt = $connexion->prepare($requette);
            $stmt->execute();
            $reponse['OK'] = true;
            $reponse['msg'] = "";
            $reponse['listeSpecailiteSexe'] = array();
            $reponse['listeSpecailiteSexe'] = $stmt->fetchAll();
        }catch (Exception $e){ 
            $reponse['OK'] = false;
            $reponse['msg'] = "Problème pour obtenir les données des patients";
        }finally {
          unset($connexion);
          return json_encode($reponse);
        }
    }
}
?>