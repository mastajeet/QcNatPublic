<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
    $MainOutput->AddTexte("Bienvenue aux administrateur",'Titre');
    $MainOutput->br(2);
    include('variable.php');
 }else{
   include('accueil.php');
}
?>
