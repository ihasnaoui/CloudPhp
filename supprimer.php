<html>

<head>
<title>Suppression</title>
</head>

<body background="img/background_compass.gif">
<center>
<table border="1" width="100%">
	<tr>
		<td>
		<table border="1" width="100%">
			<tr>
				
				
				<td><center><img border="0" src="img/ensit.jpg" width="1000" height="118"></center></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td><font size="+1" color="#0000FF"><marquee><font color="blue"> Bienvenu à l'Ecole Nationale Supérieure d' Ingénieurs de Tunis (ENSIT)
				 </marquee></font></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>
				<p align="center"><b><i>
				<font size="4" face="Times New Roman" color="#0000FF">Suppression:</font></i></b></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>
<form id="form1" method="POST" action="supprimer.php">
	    <p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
   <p>&nbsp;&nbsp;&nbsp;<h5>Entrer le Numéro CIN du menbre à suprimer :</h5></p>
	N° CIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="ncin" size="20"></span></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Supprimer" name="submitSup" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">
				<p align="center"></p>
	<p>&nbsp;</p>
</form></td>
			</tr>
		</table>
       	<table border="1" width="100%" height="100%">
			<tr>
				<td>
				<p align="center"></p>
			
				<center><a href="admin.php"><img src="img/retour.jpg"/></a></center>
			  </td>
			</tr>
		</table></td>
	
 <?php
if($_POST['submitSup'])
{
  $connect=mysql_connect('localhost','root','');
  mysql_select_db('loginphp');
  
  $ncin=$_POST['ncin'];
  if (strlen($ncin)==8) 
  {
   $sql = "DELETE 
            FROM inscr
        WHERE ncin = '$ncin'" ;
       
  $requete = mysql_query( $sql, $connect ) ;
  if($requete)
  {
    echo("<h2>La suppression à été correctement effectuée</h2>") ;
  }
  else
  {
    echo("<h2>La suppression à échouée</h2>") ;
  }
}else echo "<h2> Vérifier le numéro de CIN</h2>";
}
  ?>
	
</table>
</center>
</body>
</html>
</body>
</html>