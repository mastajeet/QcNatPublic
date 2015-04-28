<?php
switch ($_GET['Piscine']){
    case "fxg": 
        $piscine = "fxg";
                break;
    
    case "limoilou": 
        $piscine = "limoilou";
            break;

    case "stefoy": 
        $piscine = "stefoy";
        break;
    

    case "plaza": 
        $piscine = "plaza";
        break;
        

    default: 
        $piscine="limoilou";

    
}


$MainOutput->OpenTable('80%');
$MainOutput->OpenRow();
$MainOutput->OpenCol();

$MainOutput->Stream('content/'.$piscine);
$MainOutput->CloseCol();
$MainOutput->CloseRow();
$MainOutput->CloseTable();
?>