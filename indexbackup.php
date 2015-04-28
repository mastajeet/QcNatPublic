<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?PHP
//INCLUDES
Include("class_html.php");
Include("tablefunction.php");
$MainOutput = New HTML();
?>
<link rel="STYLESHEET" type="text/css" href="fonts.css">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="fr">
<head>
<title>acceuil</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body bgcolor="#FFFFFF">
<!-- Save for Web Slices (acceuil.psd) -->
<table id="Table_01" width="1650" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="9" background="images/acceuil_01.jpg" width="1650" height="99">
		</td>
	</tr>
	<tr>
		<td  background="images/acceuil_02.jpg" width="349" height="168" >
</td>
		<td colspan="2">
	<a href="index.php"><img src="images/acceuil_03.jpg" width="218" height="168" border=0></a>
			</td>
		<td id="acceuil_04" background="images/acceuil_04.jpg" width="26" height="168" alt="" >
			</td>
		<td colspan="3 id="acceuil_05" background="images/acceuil_05.jpg" width="677" height="168" alt="">
			</td>
		<td colspan="2"  id="acceuil_06" background="images/acceuil_06.jpg" width="380" height="168" alt="" >
			</td>
	</tr>
	<tr>
		<td colspan="9" id="acceuil_07" background="images/acceuil_07.jpg" width="1650" height="95" alt="" >
			</td>
	</tr>
	<tr>
		<td  id="acceuil_08" background="images/acceuil_08.jpg" noresize width="349" height="410" alt="" > 
			</td>
		<td colspan="7" rowspan="2" background="images/acceuil_09.png" STYLE="background-repeat: no-repeat;" bgcolor="#d2ecf7" valign="top" align="center">
 <?PHP
        $MainOutput->OpenTable('100%');
        $MainOutput->OpenRow();
        $MainOutput->OpenCol();
        echo $MainOutput->Send(1);
            if(isset($_GET['Section'])){
                include("section.php");
               }else{
		$_GET['Section']="Accueil";
                include("section.php");
               }
               
               
        $MainOutput->CloseCol();
        $MainOutput->CloseRow();
        $MainOutput->CloseTable();
        echo $MainOutput->Send(1);
    ?>

 			</td>
		<td id="acceuil_10" background="images/acceuil_10.jpg" noresize width="379" height="410" alt="" >
			</td>
	</tr>
	<tr>
		<td id="acceuil_11" bgcolor="#007fcc" background="images/acceuil_11.jpg" width="349" height="100%" STYLE="background-repeat: no-repeat;"  alt="" >
			<img src="images/spacer.gif" width=349 height=232> </td>
		<td id="acceuil_12"  bgcolor="#007fcc" background="images/acceuil_12.jpg" width="379" height="100%" STYLE="background-repeat: no-repeat;"  alt="">
			</td>
	</tr>
	<tr>
		<td colspan="9"  id="acceuil_13" background="images/acceuil_13.jpg" width="1650" height="42" alt="" >
			</td>
	</tr>
	<tr>
		<td id="acceuil_14" background="images/acceuil_14.jpg" width="349" height="216" alt="" >
</td>
		<td id="acceuil_15" background="images/acceuil_15.jpg" width="1" height="216" alt="">
</td>
		<td colspan="3" id="acceuil_16" background="images/acceuil_16.jpg" width="579" height="216" alt="" >
</td>
		<td id="acceuil_17" background="images/acceuil_17.jpg" width="19" height="216" alt="" >
</td>
			
		<td colspan="2" id="acceuil_18" background="images/acceuil_18.gif" width="323" height="216" alt="">
			</td>
		<td id="acceuil_19" background="images/acceuil_19.jpg" width="379" height="216" >
			</td>
	</tr>
	<tr>
		<td colspan="9"  id="acceuil_20" background="images/acceuil_20.jpg" width="1650" height="154" alt="" >
			</td>
	</tr>
	<tr>
		<td>
			<img src="images/spacer.gif" width="349" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="217" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="26" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="336" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="19" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="322" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="1" height="1" alt="" /></td>
		<td>
			<img src="images/spacer.gif" width="379" height="1" alt="" /></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>topmenu.htm
