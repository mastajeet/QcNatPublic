<?PHP

$SELECTED = "";
if(isset($_GET['Section'])){

	switch($_GET['Section']){
	
	
	    
    	    
	  
            CASE "Deconnexion":

		$SELECTED = "cours";
		break;
	
                CASE "Accueilmoniteur":
    		$SELECTED = "accueilmoniteur";
		break;
		
	CASE "Telechargements":
    		$SELECTED = "telechargements";
		break;
		
		  CASE "Horaire":
    		$SELECTED = "horaire";
		break;
		

    	    CASE "Photos":
    		$SELECTED = "photos";
		break;
	    
	
	}
	
}

$ImageList = array('accueilmoniteur','telechargements','photos','deconnexion');
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

