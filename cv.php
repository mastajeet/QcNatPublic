<?php
$FormOutput = new html();

if(!isset($_POST['Section'])){
    $FormOutput->addform('Envoyer son CV');
    $FormOutput->inputhidden_env("Section", "CV");
    $FormOutput->inputtext('Prenom');
    $FormOutput->inputtext('Nom');
        $FormOutput->inputtime("Naissance", NULL, 0, array('Date'=>True,'Time'=>FALSE));
    $FormOutput->inputphone("Telephone");
    $FormOutput->inputtext("Email");
    $FormOutput->textarea('Adresse');
    $Qualification = array('MB'=>"Médaille de Bronze",'CB'=>"Croix de Bronze",'SN'=>"Sauveteur National",'SNP'=>"Sauveteur National Plage",  'AMSA'=>"Assistant Moniteur",'MSA'=>"Moniteur en Sécurité Aquatique");
    $FormOutput->flaglist('Qualification', $Qualification);
    $FormOutput->textarea('Notes');
    $FormOutput->formsubmit('Envoyer');
}else{
    $SQL = new SqlClass();
    $Naissance = mktime(0, 0, 0, $_POST['FORMNaissance4'], $_POST['FORMNaissance5'], $_POST['FORMNaissance3']);
    $NBQualif = 0;
    if(!isset($_POST['FORMQualification']['MB'])){
            $_POST['FORMQualification']['MB']=0;
            $NBQualif++;
    }
    if(!isset($_POST['FORMQualification']['CB'])){
            $_POST['FORMQualification']['CB']=0;
        $NBQualif++;
    }
    if(!isset($_POST['FORMQualification']['SN'])){
            $_POST['FORMQualification']['SN']=0;
        $NBQualif++;
    }
    if(!isset($_POST['FORMQualification']['SNP'])){
            $_POST['FORMQualification']['SNP']=0;
        $NBQualif++;
    }
    if(!isset($_POST['FORMQualification']['AMSA'])){
            $_POST['FORMQualification']['AMSA']=0;
        $NBQualif++;
    }
    if(!isset($_POST['FORMQualification']['MSA'])){
            $_POST['FORMQualification']['MSA']=0;
        $NBQualif++;
    }

    if($NBQualif>0){
    $Req = "INSERT INTO cv(`Nom`,`Prenom`,`DateNaissance`,`Tel`,`Email`,`Adresse`,`MB`,`CB`,`SN`,`SNP`,`AMSA`,`MSA`,`Notes`,`New`,`DateAjout`) VALUES
    ('".addslashes($_POST['FORMNom'])."',
    '".addslashes($_POST['FORMPrenom'])."',
    '".addslashes($Naissance)."',
    '".addslashes($_POST['FORMTelephone1'].$_POST['FORMTelephone2'].$_POST['FORMTelephone3'])."',
    '".addslashes($_POST['FORMEmail'])."',
    '".addslashes($_POST['FORMAdresse'])."',
    ".addslashes($_POST['FORMQualification']['MB']).",
    ".addslashes($_POST['FORMQualification']['CB']).",
    ".addslashes($_POST['FORMQualification']['SN']).",
    ".addslashes($_POST['FORMQualification']['SNP']).",
    ".addslashes($_POST['FORMQualification']['AMSA']).",
    ".addslashes($_POST['FORMQualification']['MSA']).",
    '".addslashes($_POST['FORMNotes'])."', 1,
    ".time().")";
    $SQL->insert($Req);
};
    $FormOutput->opentable();
    
    $FormOutput->openRow();
    $FormOutput->OpenCol('100%',2);
        $FormOutput->AddTexte("Envoyer son CV",'Titre');
        $FormOutput->br(2);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();
$Nom = $_POST['FORMNom'].", ".$_POST['FORMPrenom'];

    $FormOutput->openRow();
    $FormOutput->OpenCol('100%',2);
        $FormOutput->AddTexte($Nom,'SousTitre');
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();
    $Months = get_month_list();

 $FormOutput->OpenRow();
 $FormOutput->OpenCol('30%');
   $FormOutput->OpenTable();
   $DateNaissance =  $_POST['FORMNaissance5']." ".$Months[intval($_POST['FORMNaissance4'])]." ".$_POST['FORMNaissance3'];
    $FormOutput->openRow();
    $FormOutput->OpenCol();
    $FormOutput->AddTexte("Naissance: ",'SousTitre');
    $FormOutput->AddTexte($DateNaissance);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->openRow();
    $FormOutput->OpenCol();
    $FormOutput->AddTexte("Tel.: ",'SousTitre');
    $Tel = $_POST['FORMTelephone1'].$_POST['FORMTelephone2'].$_POST['FORMTelephone3'];
        $FormOutput->AddPhone($Tel,TRUE);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->openRow();
    $FormOutput->OpenCol();
    $FormOutput->AddTexte("Email: ",'SousTitre');
        $FormOutput->AddTexte($_POST['FORMEmail']);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    $FormOutput->openRow();
    $FormOutput->OpenCol();
        $FormOutput->AddTexte("Adresse:",'SousTitre');
$FormOutput->br();
        $FormOutput->AddTexte($_POST['FORMAdresse']);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();
    $FormOutput->CloseTable();
    
    $FormOutput->CloseCol();
    $FormOutput->OpenCol();
    $FormOutput->OpenTable();
    $FormOutput->openRow();
    $FormOutput->OpenCol();
        $FormOutput->AddTexte("Qualifications: ",'SousTitre');
    
    $Qualification = array('MB'=>"Médaille de Bronze",'CB'=>"Croix de Bronze",'SN'=>"Sauveteur National",'SNP'=>"Sauveteur National Plage",  'AMSA'=>"Assistant Moniteur",'MSA'=>"Moniteur en Sécurité Aquatique");
    foreach($_POST['FORMQualification'] as $k=>$v){
        if($_POST['FORMQualification'][$k]==1){
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
        $FormOutput->AddTexte($_POST['FORMNotes']);
        $FormOutput->br(2);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();

    if($NBQualif>0){
    $FormOutput->OpenCol('100%',2);
        $FormOutput->AddTexte("CV Envoyé",'Titre');
        $FormOutput->br(2);
    $FormOutput->CloseCol();
    $FormOutput->CloseRow();
    }else{
        $FormOutput->OpenCol('100%',2);
        $FormOutput->AddTexte("Le CV n'à pas été envoyé, aucune qualification n'a été sélectionnée",'Titre');
        $FormOutput->br(2);
        $FormOutput->CloseCol();
        $FormOutput->CloseRow();
    }
    $FormOutput->Closetable();

    
}
echo $FormOutput->send(1);
?>
