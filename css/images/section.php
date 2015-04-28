<?php
 
 
 switch ($_GET['Section']) {
       
    CASE "Accueil":
        include("accueil.php");        
    BREAK;

    CASE "Accueilmoniteur":
        include("accueilmoniteur.php");
    BREAK;

    CASE "Accueiladmin":
        include("accueiladmin.php");
    BREAK;


    CASE "Variable":
        include("variable.php");
    BREAK;

    CASE "Nouvelle":
        include("displaynouvelle.php");
    BREAK;

    CASE "Truc":
        include("displaytruc.php");
    BREAK;

    CASE "Cvmoniteur":
        include("cvmoniteur.php");
    BREAK;

    CASE "ModifieNouvelle":
        include("nouvelle.php");
    BREAK;

    CASE "ModifieTruc":
        include("truc.php");
    BREAK;


    
    CASE "Raison":
        include("raison.php");        
    BREAK;
    
    CASE "Prescolaire":
        include("prescolaire.php");        
    BREAK;
    
    CASE "Junior":
        include("junior.php");        
    BREAK;
    
    CASE "Adulte":
        include("adulte.php");        
    BREAK;
    
    CASE "Cours":
        include("cours.php");        
    BREAK;  

    
    CASE "Formation":
        include("formation.php");        
    BREAK;

    CASE "CV":
        include("cv.php");
    BREAK;
    

	CASE "Liens":
	include("liens.php");
	break;

	CASE "Inscrire":
	include("inscrire.php");
	break;

    	CASE "Procedure":
	include("procedure.php");
	break;

    
	CASE "Moniteur":
	include("moniteur.php");
	break;

    CASE "Photos":
    include("photos.php");
	break;

    CASE "Telechargements":
    include("telechargements.php");
	break;


    CASE "Piscine":
    include("piscine.php");
	break;
    
    
        CASE "Inscription":
        include("inscrire.php");
    BREAK;
    
    default:
       //echo "Aucune Section au nom de: ".$_GET['Section'];
        include("accueil.php");       
}
 
?>
