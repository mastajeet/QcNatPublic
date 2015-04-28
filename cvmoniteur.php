<?php


if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){

$Qualification = array('MB'=>"Médaille de Bronze",'CB'=>"Croix de Bronze",'SN'=>"Sauveteur National",'SNP'=>"Sauveteur National Plage",  'AMSA'=>"Assistant Moniteur",'MSA'=>"Moniteur en Sécurité Aquatique");

if(!isset($_GET['IDCV'])){



    $MainOutput->AddTexte('Visionner les CV','Titre');
        
    $MainOutput->br(2);

    if(!isset($_GET['New'])){
           $_GET['New'] = 1;
           $MainOutput->addlink('index.php?Section=Cvmoniteur&New=0',"CVs déjà visualisés");       
    }else{
           $_GET['New'] = 0;
           $MainOutput->addlink('index.php?Section=Cvmoniteur',"Nouveaux CVs ");       
         
    }
    $lasttime = time()-3600*24*365;
      $SQL = new SqlClass();
   $Req = "SELECT * FROM cv  where New =".$_GET['New']." AND DateAjout > ".$lasttime." ORDER BY IDCV DESC";
      $SQL->SELECT($Req);
    
    
    $MainOutput->br(2);
        
        
        while($Rep = $SQL->FetchArraY()){

            $QualificationString = "";
            foreach($Qualification as $k=>$v){
               if($Rep[$k]==1)
                 $QualificationString .= $k." / ";
            }


            if(strlen($QualificationString)>3)
                     $QualificationString = substr($QualificationString,0,strlen($QualificationString)-3);

            $MainOutput->AddLink("index.php?Section=Cvmoniteur&IDCV=".$Rep['IDCV'],$Rep['Nom']." ".$Rep['Prenom']." (".$QualificationString.")");
            $MainOutput->br();
        }


  }else{
$info = get_info('cv',$_GET['IDCV']);
    $dateAjout = time();

   $SQL = new SqlClass();
   $Req = "UPDATE cv SET New=0, DateAjout =".$dateAjout." WHERE IDCV = ".$_GET['IDCV'];
   $SQL->SELECT($Req);

      $FormOutput = new HTML();
     $FormOutput->opentable();

$Nom = $info['Nom'].", ".$info['Prenom'];

    $FormOutput->openRow();
    $FormOutput->OpenCol('100%',2);
        $FormOutput->AddTexte($Nom,'SousTitre');
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();
    $Months = get_month_list();

 $FormOutput->OpenRow();
 $FormOutput->OpenCol('30%');
   $FormOutput->OpenTable();
    $DateNaissance =  date("d-M-Y",$info['DateNaissance']);
    $FormOutput->openRow();
    $FormOutput->OpenCol();
    $FormOutput->AddTexte("Naissance: ",'SousTitre');
    $FormOutput->AddTexte($DateNaissance);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->openRow();
    $FormOutput->OpenCol();
    $FormOutput->AddTexte("Tel.: ",'SousTitre');
    $Tel = $info['Tel'];
        $FormOutput->AddPhone($Tel,TRUE);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->openRow();
    $FormOutput->OpenCol();
    $FormOutput->AddTexte("Email: ",'SousTitre');
        $FormOutput->AddTexte($info['Email']);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->openRow();
    $FormOutput->OpenCol();
        $FormOutput->AddTexte("Adresse:",'SousTitre');
$FormOutput->br();
        $FormOutput->AddTexte($info['Adresse']);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();
    $FormOutput->CloseTable();

    $FormOutput->CloseCol();
    $FormOutput->OpenCol();
    $FormOutput->OpenTable();
    $FormOutput->openRow();
    $FormOutput->OpenCol();
        $FormOutput->AddTexte("Qualifications: ",'SousTitre');

    
    foreach($Qualification as $k=>$v){
               if($info[$k]==1){
        $FormOutput->br();
        $FormOutput->AddTexte($Qualification[$k]);
               }
    }

    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->CloseTable();


    $FormOutput->CloseCol();
    $FormOutput->CloseRow();


    $FormOutput->openRow();
    $FormOutput->OpenCol('100%',2);
        $FormOutput->AddTexte($info['Notes']);
        $FormOutput->br(2);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->CloseRow();

    $FormOutput->Closetable();
    $MainOutput->Addoutput($FormOutput->send(1),0,0);
 

  }
}else{
    
   include('accueil.php');
}

?>
