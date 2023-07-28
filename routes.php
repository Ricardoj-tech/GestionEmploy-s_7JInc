<?php
    // Au début de PHP: Déclarer les types dans les paramétres des fonctions
    declare (strict_types=1);

    require_once(__DIR__."/Server/Employee/ControleurEmploye.php"); 
   
    $instanceCtr = ControleurEmploye::getControleurEmploye();
    echo $instanceCtr->CtrF_Actions();
?>

