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
<!-- Save for Web Slices (acceuilfinal.psd) -->
<table id="Table_01" width="1650" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="7" id="acceuilfinal_01" width="1650" height="45">
			<img src="images/acceuilfinal_01.jpg" /></td>
	</tr>

	<tr>
		<td  id="acceuilfinal_02">
			<img src="images/acceuilfinal_02.jpg" width="346" height="153"></td>
		<td id="acceuilfinal_03" background="images/acceuilfinal_03.jpg" width="221" height="153">
			</td>
		<td id="acceuilfinal_04">
			<img  src="images/acceuilfinal_04.jpg" width="25" height="153"></td>
		<td colspan="3" id="acceuilfinal_05" background="images/acceuilfinal_05.jpg" width="682" height="153">
			<? include('topmenu.php') ?>
</td>
		<td id="acceuilfinal_06" background="images/acceuilfinal_06.jpg" width="376" height="153" >
			</td>

	</tr>
	<tr>
		<td colspan="7" id="acceuilfinal_07" background="images/acceuilfinal_07.jpg" width="1650" height="42">
			</td>
	</tr>
	<tr>
		<td id="acceuilfinal_08" background="images/acceuilfinal_08.jpg" width="346" height="463"  bgcolor ="#009fd9" STYLE="background-repeat: no-repeat;">
			</td>
		<td colspan="5" valign=top align=center rowspan="2" id="acceuilfinal_09" background="images/acceuilfinal_09.jpg" STYLE="background-repeat: no-repeat;"  width="928" height="534">
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
		<td id="acceuilfinal_10" background="images/acceuilfinal_10.jpg" STYLE="background-repeat: no-repeat;" width="376" height="463">
			</td>
	</tr>
	<tr>
		<td id="acceuilfinal_11" background="images/acceuilfinal_11.jpg"  width="346" height="71">
			</td>
		<td id="acceuilfinal_12" background="images/acceuilfinal_12.jpg" width="376" height="71">
			</td>

	</tr>
	<tr>
		<td colspan="7" id="acceuilfinal_13" background="images/acceuilfinal_13.jpg" width="1650" height="94">
			</td>
	</tr>
	<tr>
		<td id="acceuilfinal_14" background="images/acceuilfinal_14.jpg" width="346" height="201">
			</td>
		<td colspan="3" id="acceuilfinal_15" background="images/acceuilfinal_15.jpg" width="574" height="201">

			</td>
		<td id="acceuilfinal_16" background="images/acceuilfinal_16.png" width="31" height="201">
			</td>
		<td id="acceuilfinal_17" background="images/acceuilfinal_17.jpg" width="323" height="201">
			</td>
		<td id="acceuilfinal_18" background="images/acceuilfinal_18.jpg" width="376" height="201">
			</td>
	</tr>
	<tr>

		<td colspan="7" id="acceuilfinal_19" background="images/acceuilfinal_19.jpg" width="1650" height="104">
			</td>
	</tr>
	<tr>
		<td colspan="7" id="acceuilfinal_20" background="images/acceuilfinal_20.jpg" width="1650" height="89">
			</td>
	</tr>
	<tr>
		<td>

			<img background="images/spacer.gif" width="346" height="1"/></td>
		<td>
			<img background="images/spacer.gif" width="221" height="1"/></td>
		<td>
			<img background="images/spacer.gif" width="25" height="1"/></td>
		<td>
			<img background="images/spacer.gif" width="328" height="1"/></td>
		<td>
			<img background="images/spacer.gif" width="31" height="1"/></td>

		<td>
			<img background="images/spacer.gif" width="323" height="1"/></td>
		<td>
			<img background="images/spacer.gif" width="376" height="1"/></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>