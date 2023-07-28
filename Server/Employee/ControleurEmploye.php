<?php
       
    require_once("Employe.php");
    require_once("DaoEmploye.php");

 class ControleurEmploye { 
    static private $instanceCtr = null;
   
    private function __construct(){

    }

     // Retourne le singleton du modèle 
	static function  getControleurEmploye():ControleurEmploye{
		if(self::$instanceCtr == null){
			self::$instanceCtr = new ControleurEmploye();  
		}
		return self::$instanceCtr;
	}

    function Ctrf_Ajouter(){
        $ressource = new Employe(0,$_POST['matricule'],$_POST['prenom'],$_POST['nom'],$_POST['email']);
        return DaoEmploye::getDaoEmploye()->Mdrf_Ajouter($ressource); 
   }

	function CtrF_Enregistrer(){
         $patient = new Employe(0,$_POST['matricule'],$_POST['prenom'],$_POST['nom']);
         return DaoEmploye::getDaoEmploye()->MdlF_Enregistrer($patient); 
    }

    function CtrF_getEmployees(){
        return DaoEmploye::getDaoEmploye()-> MdlF_getRessource(); 
    }

    function CtrF_getAll(){
         return DaoEmploye::getDaoEmploye()->MdlF_getAll(); 
    }

    function CtrF_Actions(){
        $action=$_POST['action'];
        switch($action){
            case "ajouter":
                return $this->Ctrf_Ajouter();
            case "enregistrer" :
                return  $this->CtrF_Enregistrer();
            case "lister" :
                return $this->CtrF_getAll();
            case "listerE" :
                return $this->CtrF_getEmployees();

        }
        // Retour de la réponse au client
       
    }
}
?>