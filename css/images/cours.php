<?php

$MainOutput->OpenTable('80%');


$MainOutput->OpenRow();

$MainOutput->OpenCol('100%',3);
$MainOutput->AddOutput("<h2 class=\"futura\">Nos lieux d'enseignement</h2>");

$MainOutput->opentable("100%");
$MainOutput->openRow();


$MainOutput->OpenCol('25%');
    $MainOutput->streamLine('content/limoilou',3);
$MainOutput->CloseCol();


$MainOutput->OpenCol('25%');
$MainOutput->streamLine('content/plaza',3);
$MainOutput->CloseCol();


$MainOutput->OpenCol('25%');
$MainOutput->streamLine('content/fxg',3);
$MainOutput->CloseCol();


$MainOutput->OpenCol('25%');
$MainOutput->streamLine('content/stefoy',3);
$MainOutput->CloseCol();


$MainOutput->CloseRow();
$MainOutput->Closetable("100%");


$MainOutput->CloseCol('100%',3);
$MainOutput->CloseRow();



$MainOutput->OpenRow();
    $MainOutput->OpenCol();
        $MainOutput->AddOutput('<div align=center>');
        $MainOutput->AddPic('images/dottedline.png');
        $MainOutput->AddOutput('</div>');
    $MainOutput->CloseCol();

    $MainOutput->OpenCol();
        $MainOutput->AddTexte(' ');
    $MainOutput->CloseCol();

    $MainOutput->OpenCol();
        $MainOutput->AddOutput('<div align=center>');
        $MainOutput->AddPic('images/dottedline.png');
        $MainOutput->AddOutput('</div>');
    $MainOutput->CloseCol();
$MainOutput->CloseRow();




$MainOutput->OpenRow();

$MainOutput->OpenCol('45%');
$MainOutput->AddOutput("<h2 class=\"futura\">Nos Bureaux</h2>");
$MainOutput->CloseCol();

    $MainOutput->OpenCol();
        $MainOutput->AddTexte(' ');
    $MainOutput->CloseCol();
    
$MainOutput->OpenCol('45%');
$MainOutput->AddOutput("<h2 class=\"futura\">Notre Boutique</h2>");
$MainOutput->CloseCol();


$MainOutput->CloseRow();






$MainOutput->OpenRow();

$MainOutput->OpenCol('45%');
$MainOutput->AddOutput("3178 Chemin Ste-Foy
    Québec, QC,
    G1X 1R5
    
Tal.: (418) 687-4045
");
$MainOutput->CloseCol();

    $MainOutput->OpenCol();
        $MainOutput->AddTexte(' ');
    $MainOutput->CloseCol();
    
$MainOutput->OpenCol('45%');
$MainOutput->AddOutput("3178 Chemin Ste-Foy
    Québec, QC,
    G1X 1R5
    
");
$MainOutput->CloseCol();


$MainOutput->CloseRow();







$MainOutput->OpenRow();
    $MainOutput->OpenCol();
        $MainOutput->AddOutput('<div align=center>');
        $MainOutput->AddPic('images/dottedline.png');
        $MainOutput->AddOutput('</div>');
    $MainOutput->CloseCol();

    $MainOutput->OpenCol();
        $MainOutput->AddTexte(' ');
    $MainOutput->CloseCol();

    $MainOutput->OpenCol();
        $MainOutput->AddOutput('<div align=center>');
        $MainOutput->AddPic('images/dottedline.png');
        $MainOutput->AddOutput('</div>');
    $MainOutput->CloseCol();
$MainOutput->CloseRow();





$MainOutput->OpenRow();

$MainOutput->OpenCol('100%',3);
$MainOutput->AddOutput("<h2 class=\"futura\">Nos cours</h2>");
$MainOutput->CloseCol();
$MainOutput->CloseRow();


$MainOutput->OpenRow();

$MainOutput->OpenCol('49%');
    $MainOutput->AddOutput(oneliner('prescolaire','index.php?Section=Prescolaire'),0,0);
$MainOutput->CloseCol();

$MainOutput->OpenCol('2%');
    $MainOutput->AddTexte(' ');
$MainOutput->CloseCol();

$MainOutput->OpenCol('49%');
    $MainOutput->AddOutput(oneliner('junior','index.php?Section=Junior'),0,0);
$MainOutput->CloseCol();

$MainOutput->CloseRow();


$MainOutput->OpenRow();
    $MainOutput->OpenCol();
        $MainOutput->AddOutput('<div align=center>');
        $MainOutput->AddPic('images/dottedline.png');
        $MainOutput->AddOutput('</div>');
    $MainOutput->CloseCol();
    
    $MainOutput->OpenCol();
        $MainOutput->AddTexte(' ');
    $MainOutput->CloseCol();
    
    $MainOutput->OpenCol();
        $MainOutput->AddOutput('<div align=center>');
        $MainOutput->AddPic('images/dottedline.png');
        $MainOutput->AddOutput('</div>');
    $MainOutput->CloseCol();
$MainOutput->CloseRow();

$MainOutput->OpenRow();


$MainOutput->OpenCol('49%');
$MainOutput->AddOutput(oneliner('formation','index.php?Section=Formation'),0,0);
$MainOutput->CloseCol();

$MainOutput->OpenCol('2%');
    $MainOutput->AddTexte(' ');
$MainOutput->CloseCol();

$MainOutput->OpenCol('49%');
$MainOutput->AddOutput(oneliner('adulte','index.php?Section=Adulte'),0,0);
$MainOutput->CloseCol();


$MainOutput->CloseRow();


$MainOutput->CloseTable();
?>