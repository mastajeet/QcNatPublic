<?php
   $Cours = array(1=>'j1',
                  2=>'j2',
                  3=>'j3',
                  4=>'j4',
                  5=>'j5',
                  6=>'j6',
                  7=>'j7',
                  8=>'j8',
                  9=>'j9',
                  10=>'j10');
   
if(isset($_GET['Content']) and array_search($_GET['Content'],$Cours)>=1){
    
    $MainOutput->OpenTable('650');
        
        $MainOutput->OpenRow();
        $MainOutput->OpenCol('100%',2);
        
                $MainOutput->AddOutput(oneliner($_GET['Content'],'index.php?Section=Junior','Titre'),0,0);
                  
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
            for($i=1;$i<=6;$i++){
                $MainOutput->AddOutput(oneliner($Cours[$i],'index.php?Section=Junior&Content='.$Cours[$i],'Titre'),0,0);
                $MainOutput->Addpic('images/dottedline.png');
            }
            
        $MainOutput->CloseCol();
        $MainOutput->OpenCol('50%');
            //RightSection
            for($i=7;$i<=10;$i++){
                $MainOutput->AddOutput(oneliner($Cours[$i],'index.php?Section=Junior&Content='.$Cours[$i],'Titre'),0,0);
                 $MainOutput->Addpic('images/dottedline.png');
            }
        $MainOutput->CloseCol();
        $MainOutput->CloseRow();
        $MainOutput->CloseTable();
    }
?>