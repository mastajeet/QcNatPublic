<?php
if(isset($_POST['Action'])){
   switch ($_POST['Action']) {


    CASE "ModifieVariable":
         include("modifievariable.php");
         $_GET['Section']="Accueiladmin";
    BREAK;

    CASE "Nouvelle":
         include("actionnouvelle.php");
        $_GET['Section']="Nouvelle";
    BREAK;

   CASE "Truc":
         include("actiontruc.php");
       $_GET['Section']="Truc";
    BREAK;

    }
}
?>
