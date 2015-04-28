<?php

if(!isset($_GET['Content'])){
    $MainOutput->OpenTable('100%');
    
    
     $MainOutput->OpenRow();
        $MainOutput->OpenCol('100%',3);
            $MainOutput->AddTexte('<h2 class=futura>Natation</h2>','Titre');
        $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    $MainOutput->OpenRow();
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('d1','index.php?Section=Adulte&Content=d1','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('d2','index.php?Section=Adulte&Content=d2','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('d3','index.php?Section=Adulte&Content=d3','Titre'),0,0);
        $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    
    $MainOutput->OpenRow();
        $MainOutput->OpenCol('100%',3);
            $MainOutput->AddOutput('<div align=center>');
            $MainOutput->AddPic('images/dottedline.png');
            $MainOutput->AddOutput('</div>');
        $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    
    $MainOutput->OpenRow();
        $MainOutput->OpenCol('100%',3);
            $MainOutput->AddTexte('<h2 class=futura>Conditionnement physique</h2>','Titre');
        $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
       $MainOutput->OpenRow();
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('af','index.php?Section=Adulte&Content=af','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('pp','index.php?Section=Adulte&Content=pp','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('mn','index.php?Section=Adulte&Content=mn','Titre'),0,0);
        $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    
    $MainOutput->CloseTable();
}else{
    
    $MainOutput->OpenTable('100%');
    $MainOutput->OpenRow();
    $MainOutput->OpenCol('260');
        $MainOutput->Addlink('index.php?Section=Adulte','<img src=\'images/'.$_GET['Content'].'.png\' border=0>')    ;
    $MainOutput->CloseCol();
    
    $MainOutput->OpenCol();
        $MainOutput->Stream('content/content'.$_GET['Content']);
    
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    $MainOutput->CloseTable();
}
?>