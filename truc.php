<?PHP
    if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){

        $FormOutput = new html();
        $FormOutput->addForm('Ajouter / Modifier un truc');

        if(isset($_GET['IDTruc'])){
            $info = get_info('truc',$_GET['IDTruc']);
            $FormOutput->InputHidden_Env('Action','Truc');
            $FormOutput->InputHidden_Env('Modifie',TRUE);
            $FormOutput->InputHidden_Env('IDTruc',$_GET['IDTruc']);
        }else{
            $info = array('Niveau'=>'','Probleme'=>'','Solution'=>'');
            $FormOutput->InputHidden_Env('Action','Truc');
            $FormOutput->InputHidden_Env('Modifie',FALSE);
        }

        $Niveaux = array('prescolaire'=>'Prescolaire','junior'=>'Junior','adulte'=>'Adulte','formation'=>'Formation');
        $FormOutput->inputradio('Niveau', $Niveaux,  $info['Niveau'], NULL, 'VER');
        $FormOutput->inputtext('Probleme', NULL, 28, $info['Probleme']);
        $FormOutput->textarea('Solution', NULL, 25, 10, $info['Solution']);
        
        $FormOutput->formsubmit('Ajouter / Modifier');

        $MainOutput->Addoutput($FormOutput->send(1),0,0);
        echo $MainOutput->send(1);
    }
?>