<?php

if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
    $SQL = new SqlClass();
    if(isset($_POST['FORMTempete'])){
        $SQL->update("UPDATE variable SET Value='".$_POST['FORMTempete']."'");
    }
}



?>
