<?php


if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){

    $MainOutput->addForm('Modifier pour tempête');
    $MainOutput->InputHidden_Env('Action','ModifieVariable');
    $Answer = array('Tempête'=>'TRUE','Hors-Tempête'=>'FALSE');

    if(get_variable('Tempete'))
        $VAR = "TRUE";
    else
        $VAR = "FALSE";

    $MainOutput->inputradio('Tempete',$Answer, $VAR);
    $MainOutput->FormSubmit('Modifier');
echo $MainOutput->send(1);

}else{
    
   include('accueil.php');
}

?>
