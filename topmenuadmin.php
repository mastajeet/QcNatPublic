<?PHP

$SELECTED = "";
if(isset($_GET['Section'])){

	switch($_GET['Section']){
	
	
	    
    	    
	  
                CASE "Deconnexion":
		$SELECTED = "cours";
		break;
	
                CASE "Nouvelle":
    		$SELECTED = "nouvelle";
		break;
		
                CASE "Truc":
    		$SELECTED = "truc";
		break;
		
		CASE "Cvmoniteur":
    		$SELECTED = "cvmoniteur";
		break;
		
                CASE "Inscription":
    		$SELECTED = "inscription";
		break;
	    
	
	}
	
}

$ImageList = array('nouvelle','truc','cvmoniteur','inscription','deconnexion');
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

