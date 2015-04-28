<?PHP
    if(isset($_COOKIE['isAdmin']) and $_COOKIE['isAdmin']){
        $SQL = new SqlClass();
        $Req = "SELECT IDNouvelle, Titre, DateParution FROM nouvelle  ORDER BY DateParution DESC";
        $SQL->SELECT($Req);

        $MainOutput->AddTexte('Ajouter / Modifier des nouvelles','Titre');
        $MainOutput->br(2);
        $MainOutput->AddLink('index.php?Section=ModifieNouvelle','Ajouter une nouvelle');
        $MainOutput->br(2);
        while($Rep = $SQL->FetchArraY()){
            $MainOutput->AddLink('index.php?Section=ModifieNouvelle&IDNouvelle='.$Rep['IDNouvelle'],"#".$Rep['IDNouvelle']." - ".$Rep['Titre']);
            $MainOutput->br();
        }
        echo  $MainOutput->send(1);
    }
?>