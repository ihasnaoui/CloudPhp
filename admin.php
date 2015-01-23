<html>

<head>
<title>Inscription</title>
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
				<font size="4" face="Times New Roman" color="#0000FF">Interface administrateur:</font></i></b></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>
<form  method="POST" action="admin.php">
	
	<p>&nbsp;</p>
    <center>
   <input type="submit" value="Afficher membre" name="submitA" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">
   <input type="submit" value="Modifier membre" name="submitM" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">
   <input type="submit" value="Supprimer membre" name="submitS" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">
   </center>
</form>
<center>
<?php
if (isset($_POST['submitA']))
{
				$connect=mysql_connect('localhost','root','');
    			mysql_select_db('loginphp');
  				$query=mysql_query("SELECT * from inscr");

echo "
<table width='40%' border='1' cellpadding='5' align='center'>
<tr>
<td>N°CIN</td>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Section</td>
<td>niveau</td>
</tr>";			
while($row=mysql_fetch_assoc($query))
{
	echo"
	<tr>
	<td>".$row['ncin']."</td>	
	<td>".$row['nom']."</td>
	<td>".$row['prenom']."</td>
	<td>".$row['mail']."</td>
    <td>".$row['section']."</td>
	 <td>".$row['niveau']."</td>
	<tr/>
	";
}				
}

if (isset($_POST['submitM']))
{
header('location:modifier.php');
}
if (isset($_POST['submitS']))
{
header('location:supprimer.php');
}
?>
</center>
</td>
			</tr>
		</table>
		<table border="1" width="100%" height="100%">
			<tr>
				<td>
				<p align="center"></p>
			
				<center><a href="index.php"><img src="img/retour.jpg"/></a></center>
			  </td>
			</tr>
		</table></td>
	</tr>


</table>
</center>
</body>

</html>
</body>

</html>