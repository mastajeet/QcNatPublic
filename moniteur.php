<?php
$MainOutput->OpenTable('100%');
$MainOutput->OpenRow();
$MainOutput->OpenCol();
    $MainOutput->AddOutput('<div align=center>',0,0);
    $MainOutput->AddForm('Veuillez entrer le mot de passe');
    $MainOutput->inputpassword("Password", "Mot de passe");
    $MainOutput->formsubmit("Connexion");
    $MainOutput->AddOutput('</div>',0,0);
$MainOutput->CloseCol();
$MainOutput->CloseRow();


$MainOutput->OpenRow();
$MainOutput->OpenCol();
$MainOutput->AddOutput('<div align=center><br><br>',0,0);
$MainOutput->Addlink('http://www.qnsds.com/SDSDB/',"<img src=images/banieresds.jpg border=0>");
$MainOutput->AddOutput('</div>',0,0);
$MainOutput->CloseCol();
$MainOutput->CloseRow();

$MainOutput->OpenRow();
$MainOutput->OpenCol();
$MainOutput->AddOutput('<div align=center><br><br>',0,0);
$MainOutput->Addlink('http://www.quebecnatation.com/QNDB/',"<img src=images/baniereqn.jpg border=0>");
$MainOutput->AddOutput('</div>',0,0);
$MainOutput->CloseCol();
$MainOutput->CloseRow();


$MainOutput->CloseTable();
?>