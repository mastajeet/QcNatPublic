<?php


if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){

    $MainOutput->addForm('Modifier pour tempête');
    $MainOutput->InputHidden_Env('Action','ModifieVariable');
    $Answer = array('Tempête'=>'TRUE','Hors-Tempête'=>'FALSE');
    $MainOutput->inputradio('Tempete',$Answer,  get_variable('Tempete'));
    $MainOutput->FormSubmit('Modifier');


}else{
    
   include('accueil.php');
}

?>
