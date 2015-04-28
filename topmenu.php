<?PHP

$SELECTED = "";
if(isset($_GET['Section'])){

	switch($_GET['Section']){
	
	
	    CASE "Prescolaire":
    	    CASE "Junior":
	    CASE "Adulte":
    	    CASE "Cours":
            CASE "Formation":

		$SELECTED = "cours";
		break;
	
	    CASE "Accueil":
    		$SELECTED = "accueil";
		break;
		
		CASE "Liens":
    		$SELECTED = "liens";
		break;
		
		CASE "Inscrire":
    		$SELECTED = "inscrire";
		break;
		
		CASE "Moniteur":
    		$SELECTED = "moniteur";
		break;
	    
	
	}
	
}

$ImageList = array('accueil','cours','inscrire','liens','moniteur');
$ImageArray = array();
foreach($ImageList as $v){
	if($v == $SELECTED)
		$ImageArray[$v] = $v."_b.png";
	else	
		$ImageArray[$v] = $v."_r.png";
}


foreach($ImageArray as $k=>$v){
	echo "<li><a href=index.php?Section=".ucfirst($k)."><img src='images/".$v."' border=0></a></li>";
}


?>

