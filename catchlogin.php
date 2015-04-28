<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$Password = "h10new";
$trigger=false;
$pattern = array('{','\'','}','=','<','>',')','(');
$replacement = array(' ');
if(isset($_POST['FORMPassword']) and str_replace($pattern, $replacement, $_POST['FORMPassword'])==$Password){
    $expire = time()+3600;
    setcookie("isMoniteur",true, $expire);
    $trigger=true;
}

if(isset($_GET['Section']) and $_GET['Section']=="Deconnexion"){
     setcookie("isMoniteur",false,0);
     $trigger=true;
}

$Password = "rich1968";
$trigger=false;
$pattern = array('{','\'','}','=','<','>',')','(');
$replacement = array(' ');
if(isset($_POST['FORMPassword']) and str_replace($pattern, $replacement, $_POST['FORMPassword'])==$Password){
    $expire = time()+3600;
    setcookie("isAdmin",true, $expire);
    $trigger=true;
}

if(isset($_GET['Section']) and $_GET['Section']=="Deconnexion"){
     setcookie("isAdmin",false,0);
     $trigger=true;
}

if($trigger){

    ?>
    <script>
    window.location = 'index.php?Section=Accueiladmin';
    </script>
    <?PHP
}




?>


