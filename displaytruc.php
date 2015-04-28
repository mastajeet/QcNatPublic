<?PHP
    if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
        $SQL = new SqlClass();
        $Req = "SELECT IDTruc, Probleme FROM truc ORDER BY IDTruc DESC";
        $SQL->SELECT($Req);

        $MainOutput->AddTexte('Ajouter / Modifier des Trucs','Titre');
        $MainOutput->br(2);
        $MainOutput->AddLink('index.php?Section=ModifieTruc','Ajouter un truc');
        $MainOutput->br(2);
        while($Rep = $SQL->FetchArraY()){
            $MainOutput->AddLink('index.php?Section=ModifieTruc&IDTruc='.$Rep['IDTruc'],"#".$Rep['IDTruc']." - ".$Rep['Probleme']);
            $MainOutput->br();
        }
        echo  $MainOutput->send(1);
    }
?>