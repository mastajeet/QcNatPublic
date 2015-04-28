<?php
function oneliner($item,$link,$Class=NULL){
    $Output = new HTML();
    $Output->OpenTable('100%');
    $Output->OpenRow();
    $Output->OpenCol('30%');
        //Pic
        $Output->AddLink($link,'<img src="images/'.$item.'.png" border=0>');
    $Output->CloseCol();
    $Output->OpenCol('60%');
        //Content
        $Output->Stream('content/oneliner'.$item,$Class);
     $Output->CloseCol();
    $Output->CloseRow();
    $Output->CloseTable();
    
    return $Output->send(1);
}


function onelinervertical($item,$link,$Class=NULL){
    $Output = new HTML();
    $Output->OpenTable('100%');
    $Output->OpenRow();
    $Output->OpenCol('100%');
        //Pic
        $Output->AddLink($link,'<img src="images/'.$item.'.png" border=0>');
    $Output->CloseCol();
    $Output->CloseRow();
    
    
    $Output->OpenRow();
    $Output->OpenCol('100%');
    
        //Content
        $Output->Stream('content/oneliner'.$item,$Class);
     $Output->CloseCol();
    $Output->CloseRow();
    $Output->CloseTable();
    
    return $Output->send(1);
}

?>