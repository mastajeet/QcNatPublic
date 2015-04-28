<?php

$MaxRaison = 4;
$CurrentRaison =1;


$MainOutput->OpenTable('50%');

while($CurrentRaison<=$MaxRaison){

    $MainOutput->OpenRow();
    $MainOutput->OpenCol('10%');
        //ImagePourRaisonX
        //$MainOutput->AddPic()
    $MainOutput->CloseCol();
    $MainOutput->OpenCol('90%');
        $MainOutput->Stream('content/raison'.$CurrentRaison);
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    if($CurrentRaison<$MaxRaison){
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('40%',2);
            //DottedLine
            $MainOutput->addpic('images/dottedline.png');
        $MainOutput->CloseCol();
        $MainOutput->CloseRow();
    }
    $CurrentRaison++;
}
$MainOutput->CloseTable();

?>