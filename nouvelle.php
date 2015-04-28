<?PHP
    if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){

        $FormOutput = new html();
        $FormOutput->addForm('Ajouter / Modifier une nouvelle');

        if(isset($_GET['IDNouvelle'])){
            $info = get_info('nouvelle',$_GET['IDNouvelle']);
            $FormOutput->InputHidden_Env('Action','Nouvelle');
            $FormOutput->InputHidden_Env('Modifie',TRUE);
            $FormOutput->InputHidden_Env('IDNouvelle',$_GET['IDNouvelle']);
        }else{
            $info = array('Titre'=>'','Texte'=>'','DateParution'=>time(),'Compagnie'=>FALSE);
            $FormOutput->InputHidden_Env('Action','Nouvelle');
            $FormOutput->InputHidden_Env('Modifie',FALSE);
        }
        $FormOutput->inputtext('Titre', NULL, 20, $info['Titre']);
        $FormOutput->textarea('Texte', NULL, 30, 10, $info['Texte']);
        $FormOutput->inputtime('DateParution', 'Parution', $info['DateParution'], array('Time'=>FALSE,'Date'=>TRUE));
        $FormOutput->inputradio("Compagnie", array("Québec Natation"=>"QCN","Service de Sauveteurs"=>"SDS"),$info['Compagnie']);
        $FormOutput->formsubmit('Ajouter / Modifier');

        $MainOutput->Addoutput($FormOutput->send(1),0,0);
        echo $MainOutput->send(1);
    }
?>