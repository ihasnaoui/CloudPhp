<html>

<head>
<title>Modification</title>
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
				<font size="4" face="Times New Roman" color="#0000FF">Modifier les données</font></i></b></td>
			</tr>
		</table>
	
		<table border="1" width="100%" height="100%">
			<tr>
				<td>
                <form id="form1" method="POST" action="modifier.php">
	
	
    <p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
   <p>&nbsp;&nbsp;&nbsp;<h5>Entrer le Numéro CIN du menbre à modifier :</h5></p>
	N° CIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="ncin" size="20"></span></p>
	
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
    <p>&nbsp;&nbsp;&nbsp;<h5>Entrer les nouveaux données du menbre :</h5></p>
	Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="nom" size="20"></span></p>
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Prenom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="prenom" size="20"></span></p>
		<p>
	<span style="font-family: 'Times New Roman',serif">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="mail" size="20"> </span></p>
	
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Section&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select  name="section">
      <option>Informatique</option>
      <option>Mécanique</option>
      <option>Elèctrique</option>
      <option>Mathématique</option>
      
      </select>
    </span></p>
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Niveau&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</h4><input type="radio" name="niveau" value="1ére" />1ère
  <input type="radio" name="niveau" value="2ème" checked="checked"/>2ème
  <input type="radio" name="niveau" value="3ème" />3ème<br/>
  
	<p>&nbsp;</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Enregistrer modification" name="submit" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">
				<p align="center"></p>
			
				<center><a href="admin.php"><img src="img/retour.jpg"/></a></center>
			  </td>
			</tr>
		</table></td>
	</tr>
<?php
if($_POST['submit'])
{
  $connect=mysql_connect('localhost','root','');
  mysql_select_db('loginphp');
  
  $ncin=$_POST['ncin'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $mail=$_POST['mail'];
  $section=$_POST['section'];
  $niveau=$_POST['niveau'];

  if (strlen($ncin)==8) 
  {
     
    $sql = "UPDATE inscr
            SET nom   = '$nom', 
                prenom  = '$prenom',
                mail = 'mail',
                section  = '$section',
                niveau = '$niveau'
           WHERE ncin = '$ncin' " ;
 
  $requete = mysql_query($sql, $connect) or die( mysql_error() ) ;
  if($requete)
  {
    echo("<h2>La modification à été correctement effectuée</h2>") ;
  }
  else
  {
    echo("<h2>La modification à échouée</h2>") ;
  } 
  } else echo "<h2>Numéro CIN incorrect</h2>";

  
}
  
?>


</table>
</center>
</body>

</html>
</body>

</html>