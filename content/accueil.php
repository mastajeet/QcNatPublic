<?php
	        $MainOutput->OpenTable('100%');
	$MainOutput->OpenRow();
	$MainOutput->OpenCol('70%');
		//Contenu du centre
		
		$MainOutput->OpenTable('100%');
		$MainOutput->OpenRow();
		$MainOutput->OpenCol();
			//Contenu Bienvenu sur notre site
			
			$MainOutput->Stream('content/bienvenue');
			
		$MainOutput->CloseCol();
		$MainOutput->CloseRow();
		
		$MainOutput->OpenRow();
		$MainOutput->OpenCol();
			//Spacer
			$MainOutput->br(2);
		$MainOutput->CloseCol();
		$MainOutput->CloseRow();
		
		
		$MainOutput->OpenRow();
		$MainOutput->OpenCol();
			$MainOutput->OpenTable('100%');
			$MainOutput->OpenRow();
			$MainOutput->OpenCol('50%');
				$MainOutput->OpenTable('100%');
				$MainOutput->OpenRow();
				$MainOutput->OpenCol();
				$MainOutput->AddTexte('<h4 class=\"futura\">Pourquoi nous choisir?</h4>','Titre');
					// Pic De gars nette qui nage
					$MainOutput->AddPic('images/raison.png');
				$MainOutput->CloseCol();
				$MainOutput->CloseRow();
				$MainOutput->OpenRow();
				$MainOutput->OpenCol();
					$MainOutput->Stream('content/raison'.rand(1,4));
				$MainOutput->CloseCol();
				$MainOutput->CloseRow();
				$MainOutput->CloseTable();
			
			$MainOutput->CloseCol();
			$MainOutput->OpenCol('50%');
				$MainOutput->OpenTable('100%');
					$MainOutput->OpenRow();
					$MainOutput->OpenCol();
                                                $MainOutput->addoutput("<h4 class=\"futura\">Dernière nouvelle</span></h4>",0,0);
                                                $MainOutput->addoutput("<p><span class=Texte>",0,0);
                                                $MainOutput->addoutput(getlastnews(),0,0);
                                                $MainOutput->addoutput("</span></p>",0,0);
					$MainOutput->CloseCol();
					$MainOutput->CloseRow();
				$MainOutput->CloseCol();
				$MainOutput->CloseRow();
				$MainOutput->CloseTable();
			$MainOutput->CloseCol();
			$MainOutput->CloseRow();
			
			
			$MainOutput->OpenRow();
			$MainOutput->OpenCol('50%');
				//Plus -> Raisons
				$MainOutput->AddOutput('<div align=right>',0,0);
				$MainOutput->AddLink('index.php?Section=Raison','<img src=images/plus.png border=0>');
				$MainOutput->AddOutput('</div>',0,0);
                          
                         
			$MainOutput->CloseCol();
			$MainOutput->OpenCol('50%');
				//Plus -> Nouvelle
				$MainOutput->AddOutput('<div align=right>',0,0);
				//$MainOutput->AddPic('images/plus.png');
				$MainOutput->AddOutput('</div>',0,0);
			$MainOutput->CloseCol();
			$MainOutput->CloseRow();
			
			$MainOutput->CloseTable();
			
		$MainOutput->CloseRow();
		$MainOutput->CloseCol();
		$MainOutput->CloseTable();
	
	$MainOutput->CloseCol();
	
	$MainOutput->OpenCol('30%');
		//Liens pour les cours
		
		$MainOutput->OpenTable('100%');
		
		$Cours = array('prescolaire','junior','adulte','formation');
		foreach($Cours as $niveau){
		$MainOutput->OpenRow();
		$MainOutput->OpenCol();
			
			$MainOutput->OpenTable('100%');
			$MainOutput->OpenRow();
			$MainOutput->OpenCol('40%');
				$MainOutput->AddLink('index.php?Section='.ucfirst($niveau),'<img src=\'images/'.$niveau.'.png\' border=0>');
			$MainOutput->CloseCol();
			$MainOutput->OpenCol('60%');
				//Description des cours
				$MainOutput->Stream('content/oneliner'.$niveau);
			$MainOutput->CloseCol();
			$MainOutput->CloseRow();
			$MainOutput->CloseTable();
			
		$MainOutput->CloseCol();
		$MainOutput->OpenRow();
		
		$MainOutput->OpenRow();
			$MainOutput->OpenCol();
			//Dotted line
			$MainOutput->Addpic('images/dottedline.png');
			$MainOutput->CloseCol();
		$MainOutput->CloseRow();
		}
		$MainOutput->CloseTable();
		
		
		
	$MainOutput->CloseCol();
	$MainOutput->CloseRow();
	$MainOutput->CloseTable();
        echo $MainOutput->send(1);
		
?>
