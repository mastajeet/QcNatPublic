<?PHP
$MainOutput->OpenTable('100%');
$MainOutput->OpenRow();
$MainOutput->OpenCol('100%',2);
    $MainOutput->addtexte("<p><h4 class=\"futura\">Truc de la semaine</h2><p>","Titre");
$MainOutput->CloseCol();
$MainOutput->CloseRow();

$MainOutput->OpenRow();

$LastTruc = getlasttruc();

        $MainOutput->OpenCol('30%');
        $MainOutput->AddPic('./images/'.trim($LastTruc['Niveau']).'.png');
        $MainOutput->CloseCol();
        $MainOutput->OpenCol('80%');
        $MainOutput->AddTexte($LastTruc['Probleme'],'SousTitre');
        $MainOutput->br(2);
        $MainOutput->AddTexte($LastTruc['Solution'],'Texte');
        $MainOutput->br();
    
 



    $MainOutput->AddTexte('');
$MainOutput->CloseCol();


$MainOutput->CloseRow();

$MainOutput->CloseTable();
echo $MainOutput->Send(1);
?>