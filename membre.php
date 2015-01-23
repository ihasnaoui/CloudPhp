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
				<td><font size="+1" color="#0000FF"><marquee><font color="blue"> Bienvenu � l'Ecole Nationale Sup�rieure d' Ing�nieurs de Tunis (ENSIT)
				 </marquee></font></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>
				<p align="center"><b><i>
				<font size="4" face="Times New Roman" color="#0000FF">Liste des membres:</font></i></b></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>

<center>
<?php

				$connect=mysql_connect('127.11.6.2','adminstqScTq',' gKKHC6bRL9Gv',3306);
    			mysql_select_db('phpcloud');
  				$query=mysql_query("SELECT * from inscr");

echo "
<table width='40%' border='1' cellpadding='5' align='center'>
<tr>
<td>N�CIN</td>
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