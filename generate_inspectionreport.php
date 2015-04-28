<?PHP


if(isset($_GET['IDInspection'])){
$NMois = get_month_list();
	$INFO = get_info('inspection',$_GET['IDInspection']);
	$MaterielTrack = array();
	$MaterielTrack['Mirador'] = "Comme votre piscine � plus de 150m2, il est obligatoire d'avoir un mirador";
	$MaterielTrack['SMU'] = "La sauveteur doit avoir acc�s a un moyen de communication avec les services m�dicaux d'urgence, il est n�cessaire de mettre un t�l�phone � la disposition du sauveteur";
	$MaterielTrack['Procedures'] = "Les proc�dures d'urgences doivent �tre affich�es pr�s du moyen de communication";
	$MaterielTrack['Perche'] = "Une perche isol�e �lectriquement doit �tre mise � la disposition du sauveteur";
	$MaterielTrack['Bouees'] = "2 bou�es de sauvetages de 275mm � 380mm de largeur avec un cordage de 3m + largeur de la piscine doivent �tre mises � la disposition du sauveteur (ou une Bou�e torpille avec 2m de cordage et bandouill�re";
	$MaterielTrack['Planche'] = "La planche dorsale fait parti du mat�riel obligatoire � d�tenir sur le bord d'une piscine";
	$MaterielTrack['Couverture'] = "Une couverture doit se trouver � la piscine";
	$MaterielTrack['Registre'] = "Un registre des installation doit se trouver � la pisince";
	$MaterielTrack['Chlore'] = "Le sauveteur doit avoir du mat�riel pour faire les tests d'eau (Chlore et pH)";
	
	$AffichageTrack = array();
	$AffichageTrack['ProfondeurPP'] = array('Message'=>"La profondeur de la piscine au peu profond doit �tre inscrite en caract�re d'au moins 100mm de haut",'Taille'=>100);
	$AffichageTrack['ProfondeurP'] = array('Message'=>"La profondeur de la piscine au profond doit �tre inscrite en caract�re d'au moins 100mm de haut",'Taille'=>100);
	$AffichageTrack['ProfondeurPente'] = array('Message'=>"La profondeur de la piscine dans le milieu de la pente doit �tre inscrite en caract�re d'au moins 100mm de haut",'Taille'=>100);
	$AffichageTrack['Cercle'] = array('Message'=>"Un cercle noir d'un diam�tre d'au moins 150mm doit �tre dessin� au point le plus profond de la piscine",'Taille'=>1);
	$AffichageTrack['Verre'] = array('Message'=>"Le r�glement \"Interdiction de contenants de vitre\" doit �tre �crit en un caract�re d'au moins 25mm de haut - Un pictogramme est équivalent",'Taille'=>25);
	$AffichageTrack['Bousculade'] = array('Message'=>"Le r�glement \"Bousculade Interdite\" doit �tre �crit en un caract�re d'au moins 25mm de haut - Un pictogramme est équivalent",'Taille'=>25);
	$AffichageTrack['Maximum'] = array('Message'=>"Le nombre maximum de baigneur de votre piscine doit �tre �crit en lettres d'au moins 150mm",'Taille'=>150);
	
	$ConstructionTrack = array();
	$ConstructionTrack['EchellePP'] = "Le peu profond de la piscine doit �tre accessible via une �chelle ou des escaliers";
	$ConstructionTrack['EchelleX2P'] = "Une �chelle de chaque partie du profond doit �tre install�e";
	$ConstructionTrack['Escalier'] = "Le nez des marches du peu profond doivent �tre peintur�s d'une couleur contrastante";
	$ConstructionTrack['Cloture12'] = "La cl�ture entourant la piscine doit au minimum avoir 1.20m de hauteur";
	$ConstructionTrack['Cloture100'] = "La cl�ture entourant la piscine ne doit pas faire passer d'objet de plus de 100mm de diam�tre";
	$ConstructionTrack['Maille38'] = "La maille de la cl�ture doit �tre inf�rieure � 38mm";
	$ConstructionTrack['Promenade'] = "La promenade acc�ssible lorsque la piscine est ferm�e doit avoir une cloture d'au moins 900mm de hauteur";
	$ConstructionTrack['Fermeacle'] = "Il doit �tre possible de v�rouiller les points d'acc�s � la piscine lorsque celle-ci est ferm�e";
	
	
	$QteMateriel = materielneeded($_GET['IDInspection']);
	$NBItem =0;
	$Obligatoire = array(1,2,3,4,5,6,7,8,9,10,11,12,13,18,19,20,21);
	foreach($Obligatoire as $i){
		$NBItem = $NBItem + $QteMateriel[$i]['Unitaire']+$QteMateriel[$i]['Forfait'];
	}
	$Item = get_itemlist();
	$INFOP = get_info('installation',$INFO['IDInstallation']);
	$INFOE = get_info('employe',$INFO['IDEmploye']);
	$INFOR = get_info('responsable',$INFO['IDResponsable']);
	$Date = getdate($INFO['DateI']);
	
	$MainOutput->OpenTable('600');
	$MainOutput->OpenRow();
	$MainOutput->OpenCol();
	
	
	$MainOutput->AddTexte("Sillery, le ".$Date['mday']." ".$NMois[$Date['mon']]." ".$Date['year']."
 
 
 
 	Bonjour ".strtolower($INFOR['Titre'])." ".ucfirst($INFOR['Nom']).",
	
	",'Titre');

	
	$Date = getdate($INFO['DateI']);
	$MainOutput->AddTexte("Suite é l'inspection de votre piscine (".$INFOP['Nom'].") effectuée le ".$Date['mday']." ".$NMois[$Date['mon']]." ".$Date['year']." par ".$INFOE['Prenom']." ".$INFOE['Nom'].",  nous désirons vous informer qu'en vertu du r�glement sur les bains publics LRQ S-3, r-3, vous devrez apporter certains correctifs afin d'avoir des installations conformes. Voici un descriptif des correctifs que nous vous suggérons.");
	$MainOutput->br(2);
	$MainOutput->AddTexte('Materiel','Titre');
	$MainOutput->br(2);
	foreach($MaterielTrack as $k => $v){
	
		$Prob = false;
		if(!$INFO[$k]){
			$MainOutput->AddTexte(" - ".$v);
			$MainOutput->br();
			$Prob = true;
		}
	}
	
			if($NBItem==0){
			$MainOutput->AddTexte(" - Votre piscine r�pond � toutes les exigences concernant le mat�riel");
			$MainOutput->br();
		}else{
			$MainOutput->AddTexte(" - Votre trousse de premiers soins n'est pas compl�te, veuillez voir les d�tails plus bas");
			$MainOutput->br();
		}
		

	
	$MainOutput->br();
	$MainOutput->AddTexte('Affichage','Titre');
	$MainOutput->br(2);
	$Prob = false;
	Foreach($AffichageTrack as $k => $v){
		if($INFO[$k]<$v['Taille']){
			$MainOutput->AddTexte(" - ".$v['Message']);
			$MainOutput->br();
			$Prob = true;
		}
		
	}
	if(!$Prob){
			$MainOutput->AddTexte(" - Votre piscine r�pond � toutes les exigences concernant de l'affichage");
			$MainOutput->br();
	}
	
	
	
	
	$MainOutput->br();
	$MainOutput->AddTexte('Construction','Titre');
	$MainOutput->br(2);
	$Prob = false;
	foreach($ConstructionTrack as $k => $v){
		if(!$INFO[$k]){
		$MainOutput->AddTexte(" - ".$v);
		$MainOutput->br();
		$Prob = true;
		}
	}
	if(!$Prob){
		$MainOutput->AddTexte(" - Votre piscine r�pond � toutes les exigences concernant de la construction");
		$MainOutput->br();
	}
	
	$MainOutput->br();
	$MainOutput->AddTexte('Achat de mat�riel','Titre');
	$MainOutput->br();
	$MainOutput->AddTexte('Le service de sauveteur est en mesure de vous vendre les �l�ments manquants afin que vous soyez conformes au r�glement. Voici la liste ainsi que les prix rattach�s aux items n�cessaires. S\'ajoutent � ces prix les taxes de ventes applicables.');
	$MainOutput->br(2);
	$MainOutput->OpenTable();
	$MainOutput->OpenRow();
	
	$MainOutput->OpenCol('230');
		$MainOutput->AddTexte('Item','Titre');
	$MainOutput->CloseCol();
	
	$MainOutput->OpenCol('30');
		$MainOutput->AddTexte('<div align=center>Qte</div>','Titre');
	$MainOutput->CloseCol();
	
	$MainOutput->OpenCol('120');
		$MainOutput->AddTexte('<div align=center>Prix</div>','Titre');
	$MainOutput->CloseCol();
	
	$MainOutput->OpenCol('120');
		$MainOutput->AddTexte('<div align=center>Sous-Total</div>','Titre');
	$MainOutput->CloseCol();
	$MainOutput->CloseRow();

	
	$MainOutput->OpenRow();
	$MainOutput->OpenCol('100%',5);
		$MainOutput->AddOutput("<hr>");
	$MainOutput->CloseCol();
	$MainOutput->CloseRow();
	
	$Total = 0;
	foreach($QteMateriel as $k=>$v){
		if($QteMateriel[$k]['Unitaire']>0){

			$MainOutput->OpenRow();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte($Item[$k]['Description']);
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.$QteMateriel[$k]['Unitaire']);
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($Item[$k]['Unitaire'],2)." $");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($Item[$k]['Unitaire']*$QteMateriel[$k]['Unitaire'],2)." $",'Titre');
			$MainOutput->CloseCol();
		
			$Total = $Total+$Item[$k]['Unitaire']*$QteMateriel[$k]['Unitaire'];
			$MainOutput->CloseRow();

		}
		
		if($QteMateriel[$k]['Forfait']>0){

			$MainOutput->OpenRow();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte($Item[$k]['Description']." - Forfait (x".$Item[$k]['NBForfait'].")");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.$QteMateriel[$k]['Forfait']);
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($Item[$k]['Forfait'],2)." $");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($Item[$k]['Forfait']*$QteMateriel[$k]['Forfait'],2)." $",'Titre');
			$MainOutput->CloseCol();
				
			$MainOutput->CloseRow();
			$Total = $Total+$Item[$k]['Forfait']*$QteMateriel[$k]['Forfait'];
		}
	
	}
		$MainOutput->OpenRow();
	$MainOutput->OpenCol('100%',5);
		$MainOutput->AddOutput("<hr>");
	$MainOutput->CloseCol();
	$MainOutput->CloseRow();

	
			$MainOutput->OpenRow();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=right>'."Sous-Total",'Titre');
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($Total,2)." $");
			$MainOutput->CloseCol();
				
			$MainOutput->CloseRow();
			
			
			
			
			
			
			
			
			/**
			
			
			
			$MainOutput->OpenRow();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=right>'.'TPS ('.get_vars('TPS').'%)','Titre');
			$MainOutput->CloseCol();
			$TPS = $Total*get_vars('TPS');
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($TPS,2)." $");
			$MainOutput->CloseCol();
				
			$MainOutput->CloseRow();
			
	
	
			$MainOutput->OpenRow();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=right>'.'TVQ ('.get_vars('TVQ').'%)','Titre');
			$MainOutput->CloseCol();
			$TVQ = ($Total+$TPS)*get_vars('TVQ');
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($TVQ,2)." $");
			$MainOutput->CloseCol();
				
			$MainOutput->CloseRow();
			
			$MainOutput->OpenRow();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte("&nbsp;");
			$MainOutput->CloseCol();
			
			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=right>'.'Total','Titre');
			$MainOutput->CloseCol();

			$MainOutput->OpenCol();
				$MainOutput->AddTexte('<div align=center>'.number_format($Total+$TPS+$TVQ,2)." $");
			$MainOutput->CloseCol();
				
			$MainOutput->CloseRow();
	**/
	
		$MainOutput->CloseTable();
	
	
	
	
	$MainOutput->br();
	$MainOutput->AddTexte("Ce rapport d'observation a été effectué é la date mentionnée ci-dessus.  Tout changement survenu par la suite n'est pas mentionné.  Le personnel de Service de Sauveteurs qn inc vous tiendra informé du manque de matériel, des bris ou autres anomalies en cours d'été.  Nous vous remercions de bien vouloir procéder aux correctifs nécessaires afin que vous puissiez avoir des installations conformes.  Si vous avez des questions ou besoin de précision, n'hésitez pas é communiquer avec nous au (418) 687-4047.");
	
	
	$MainOutput->br(3);
	$MainOutput->AddTexte("___________________________________");
	$INFOW = get_info('employe',$_COOKIE['IDEmploye']);
	$MainOutput->br();
	$MainOutput->AddTexte($INFOW['Prenom']." ".$INFOW['Nom'],'Titre');
	
	
	
	
	
	
	
	
	
	$MainOutput->CloseCol();
	$MainOutput->CloseRow();
	$MainOutput->CloseTable();
	
	
}else{
	include('inspection.php');
}


echo $MainOutput->Send(1);


?>