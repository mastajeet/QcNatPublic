<?php
    
    if(!isset($_GET['Content'])){
    $MainOutput->OpenTable('100%');
    $MainOutput->OpenRow();
    $MainOutput->OpenCol();
    $MainOutput->AddTexte('Devenir Moniteur','Titre');
        $MainOutput->OpenTable('100%');
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('50%');
            $MainOutput->AddOutput(oneliner('amsa','index.php?Section=Formation&Content=amsa','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('50%');
            $MainOutput->AddOutput(oneliner('msa','index.php?Section=Formation&Content=msa','Titre'),0,0);
        $MainOutput->CloseCol();
        $MainOutput->CloseTable();
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    $MainOutput->OpenRow();
    $MainOutput->OpenCol('100%');
        $MainOutput->AddPic('images/dottedline.png');
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    
    $MainOutput->OpenRow();
    $MainOutput->OpenCol();
    $MainOutput->AddTexte('Devenir Assistant-Sauveteur','Titre');
        $MainOutput->OpenTable('100%');
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('etoilebronze','index.php?Section=Formation&Content=etoilebronze','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('medaillebronze','index.php?Section=Formation&Content=medaillebronze','Titre'),0,0);
        $MainOutput->CloseCol();
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('33%');
            $MainOutput->AddOutput(onelinervertical('croixbronze','index.php?Section=Formation&Content=croixbronze','Titre'),0,0);
        $MainOutput->CloseCol();
        $MainOutput->CloseCol();
        
        
        $MainOutput->CloseTable();
        
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();

    $MainOutput->OpenRow();
    $MainOutput->OpenCol('100%');
        $MainOutput->AddPic('images/dottedline.png');
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();    
    
      $MainOutput->OpenRow();
    $MainOutput->OpenCol();
    $MainOutput->AddTexte('Devenir Sauveteur','Titre');
        $MainOutput->OpenTable('100%');
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('50%');
            $MainOutput->AddOutput(oneliner('psg','index.php?Section=Formation&Content=psg','Titre'),0,0);
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('50%');
            $MainOutput->AddOutput(oneliner('sn','index.php?Section=Formation&Content=sn','Titre'),0,0);
        $MainOutput->CloseCol();
        $MainOutput->CloseCol();
        $MainOutput->CloseTable();
    $MainOutput->CloseCol();
    $MainOutput->CloseRow();
    $MainOutput->CloseTable();
    
    }else{
$MainOutput->OpenTable('650');
        
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('100%',2);
        
                $MainOutput->AddOutput(oneliner($_GET['Content'],'index.php?Section=Formation','Titre'),0,0);
                  
        $MainOutput->CloseCol();
          $MainOutput->CloseRow();
  
        $MainOutput->OpenRow();
  
        $MainOutput->OpenCol('10%');
        $MainOutput->CloseCol();
        
        $MainOutput->OpenCol('90%');
                $MainOutput->Stream('content/content'.$_GET['Content']);
                  
        $MainOutput->CloseCol();
  
        $MainOutput->CloseRow();
        $MainOutput->CloseTable();
        
    }
    
    ?>