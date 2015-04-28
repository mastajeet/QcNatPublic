<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_COOKIE['isMoniteur']) and $_COOKIE['isMoniteur']){
  $MainOutput->AddTexte('Téléchargement','Titre');
  $MainOutput->br(2);
  $MainOutput->AddTexte('Feuilles de travail','SousTitre');
    $MainOutput->br();
  $MainOutput->addlink('/download/FeuillesTravailPresco.pdf','Cours Préscolaire');
  $MainOutput->br();
  $MainOutput->addlink('/download/FeuillesTravailJunior.pdf','Cours Junior');
    $MainOutput->br(2);
  $MainOutput->AddTexte('Rapport Mi-Session','SousTitre');
    $MainOutput->br();
  $MainOutput->addlink('/download/RapportMiSessionPresco.pdf','Cours Préscolaire');
  $MainOutput->br();
  $MainOutput->addlink('/download/RapportMiSessionJunior.pdf','Cours Junior');












 }else{
   include('accueil.php');
}
?>
