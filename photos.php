<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_COOKIE['isMoniteur']) and $_COOKIE['isMoniteur']){
  if(!isset($_GET['photo'])){
      $folders = getpicfolders();
      $col=1;
      $MainOutput->addoutput('<div align=center>',0,0);
      $MainOutput->OpenTable('100%');
      $MainOutput->OpenRow();
      $MainOutput->OpenCol('100%',3);
            $MainOutput->AddTexte("Albums Photos",'Titre');
            $MainOutput->br(2);
      $MainOutput->CloseCol();
      $MainOutput->CloseRow();

      foreach($folders as $folder){
          if($col==1) {
            $MainOutput->OpenRow();
          }

          $MainOutput->OpenCol();

          $info = getpicinfo($folder[1]);


            $MainOutput->OpenTable('100%');
            $MainOutput->OpenRow();
            $MainOutput->OpenCol();
                 $MainOutput->AddLink('index.php?Section=Photos&photo='.$folder[1],$info['Titre'],"",'SousTitre');
            $MainOutput->CloseCol();
            $MainOutput->CloseRow();
            $MainOutput->OpenRow();
            $MainOutput->OpenCol();
                 $MainOutput->AddPic('./photo/'.$folder[1].'/folder.jpg','width=200');
            $MainOutput->CloseCol();
            $MainOutput->CloseRow();
            $MainOutput->OpenRow();
            $MainOutput->OpenCol();
                    $MainOutput->AddTexte($info['Description']);
            $MainOutput->CloseCol();
            $MainOutput->CloseRow();
$MainOutput->CloseTable();
            

          if($col==4){
                $MainOutput->CloseRow();
                $col=1;
          }else{
              $col++;
          }


      }

      $MainOutput->CloseTable();
    $MainOutput->addoutput('</div>',0,0);

}else{

      $pattern = array('{','\'','}','=','<','>',')','(','.','/','\\');
      $replacement = array('');
      if(!isset($_GET['page'])){
          $_GET['page']=1;
      }
      $folder = ereg_replace($pattern, $replacement, $_GET['photo']);
      $pics = getpic($folder,intval($_GET['page']));


      $col=1;
      $MainOutput->addoutput('<div align=center>',0,0);
      $MainOutput->OpenTable('100%');
      foreach($pics as $pic){
          if($col==1) {
            $MainOutput->OpenRow();
          }

          $MainOutput->OpenCol();
            $MainOutput->Addlink('./photo/'.$folder.'/'.$pic,'<img src=./photo/'.$folder.'/'.$pic.' border=0 width=200>','_Blank');
            $MainOutput->CloseCol();
            

          if($col==4){
                $MainOutput->CloseRow();
                $col=1;
          }else{
              $col++;
          }


      }



      $MainOutput->OpenRow();
      $MainOutput->OpenCol('100%',4);
            $MainOutput->AddOutput('<div align=center>',0,0);
            $NBPage = getNBPicPages($folder);
            for ($index = 1; $index <= $NBPage; $index++) {
               if($_GET['page'] == $index){
                    $MainOutput->AddTexte($index,'SousTitre');
               }else{
                    $MainOutput->AddLink('index.php?Section=Photos&photo='.$folder.'&page='.$index,$index,"",'SousTitre');
               }
                    $MainOutput->AddTexte('&nbsp;&nbsp;','Titre');
            }


            $MainOutput->AddOutput('</div>',0,0);
      $MainOutput->CloseCol();
      $MainOutput->CloseRow();


      $MainOutput->CloseTable();
    $MainOutput->addoutput('</div>',0,0);








    }
      
 }else{
   include('accueil.php');
}
?>
