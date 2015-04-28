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
    $MainOutput->br();
    $MainOutput->AddTexte('Évaluations','SousTitre');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_Salamandre.pdf','Salamandre');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_PoissonLune.pdf','Poisson-Lune');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_Crocodile.pdf','Crocodile');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_Baleine.pdf','Baleine');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J1.pdf','Junior 1');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J2.pdf','Junior 2');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J3.pdf','Junior 3');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J4.pdf','Junior 4');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J5.pdf','Junior 5');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J6.pdf','Junior 6');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J7.pdf','Junior 7');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J8.pdf','Junior 8');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J9.pdf','Junior 9');
    $MainOutput->br();
    $MainOutput->addlink('/download/Evaluation_J10.pdf','Junior 10');
    $MainOutput->br();












}else{
   include('accueil.php');
}
?>
