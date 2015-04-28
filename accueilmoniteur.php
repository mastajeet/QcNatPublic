<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_COOKIE['isMoniteur']) and $_COOKIE['isMoniteur']){
    $MainOutput->AddTexte("Bienvenue aux moniteurs",'Titre');
 }else{
   include('accueil.php');
}
?>
