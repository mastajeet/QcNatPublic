<?php

if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
    $SQL = new SqlClass();
    if(!$_POST['Modifie']){
        $Req = "INSERT INTO truc(`Niveau`,`Probleme`,`Solution`) VALUES('".addslashes($_POST['FORMNiveau'])."','".addslashes($_POST['FORMProbleme'])."','".addslashes($_POST['FORMSolution'])."')";
    }else{
        $Req = "UPDATE truc SET `Niveau`='".addslashes($_POST['FORMNiveau'])."'
            ,`Probleme`='".addslashes($_POST['FORMProbleme'])."'
            ,`Solution`='".addslashes($_POST['FORMSolution'])."'
            WHERE IDTruc = ".$_POST['IDTruc'];
    }
    $SQL->QUERY($Req);
}



?>
