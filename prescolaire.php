<?php
   $Cours = array(1=>'etoile',
                       2=>'canard',
                       3=>'tortue',
                       4=>'loutre',
                       5=>'salamandre',
                       6=>'poisson',
                       7=>'crocodile',
                       8=>'baleine');
   
if(isset($_GET['Content']) and array_search($_GET['Content'],$Cours)>=1){
    
    $MainOutput->OpenTable('650');
        
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('100%',2);
        
                $MainOutput->AddOutput(oneliner($_GET['Content'],'index.php?Section=Prescolaire','Titre'),0,0);
                  
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
    
    }else{

     
        
        $MainOutput->OpenTable('100%');
        
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('50%');
            for($i=1;$i<=4;$i++){
                $MainOutput->AddOutput(oneliner($Cours[$i],'index.php?Section=Prescolaire&Content='.$Cours[$i],'Titre'),0,0);
                $MainOutput->Addpic('images/dottedline.png');
            }
            
        $MainOutput->CloseCol();
        $MainOutput->OpenCol('40%');
            //RightSection
            for($i=5;$i<=8;$i++){
                $MainOutput->AddOutput(oneliner($Cours[$i],'index.php?Section=Prescolaire&Content='.$Cours[$i],'Titre'),0,0);
                 $MainOutput->Addpic('images/dottedline.png');
            }
        $MainOutput->CloseCol();
        $MainOutput->CloseRow();
        $MainOutput->CloseTable();
    }
?>