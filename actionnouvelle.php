<?php

if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
    $SQL = new SqlClass();
    $time = mktime(0, 0, 0, $_POST['FORMDateParution4'], $_POST['FORMDateParution5'], $_POST['FORMDateParution3']);
    if(!$_POST['Modifie']){
        $Req = "INSERT INTO nouvelle(`Titre`,`Texte`,`DateParution`,`Compagnie`) VALUES('".addslashes($_POST['FORMTitre'])."','".addslashes($_POST['FORMTexte'])."',".$time.",'".$_POST['FORMCompagnie']."')";
    }else{
        $Req = "UPDATE nouvelle SET `Titre`='".addslashes($_POST['FORMTitre'])."'
            ,`Texte`='".addslashes($_POST['FORMTexte'])."'
            ,`DateParution`=".$time."
            ,`Compagnie`=".$_POST['FORMCompagnie']."
            WHERE IDNouvelle = '".$_POST['IDNouvelle']."'";
    }
            $SQL->QUERY($Req);
    }


?>
