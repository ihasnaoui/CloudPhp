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
				<td><font size="+1" color="#0000FF"><marquee><font color="blue"> Bienvenu � l'Ecole Nationale Sup�rieure d' Ing�nieurs de Tunis (ENSIT)
				 </marquee></font></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>
				<p align="center"><b><i>
				<font size="4" face="Times New Roman" color="#0000FF">Modifier les donn�es</font></i></b></td>
			</tr>
		</table>
	
		<table border="1" width="100%" height="100%">
			<tr>
				<td>
                <form id="form1" method="POST" action="modifier.php">
	
	
    <p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
   <p>&nbsp;&nbsp;&nbsp;<h5>Entrer le Num�ro CIN du menbre � modifier :</h5></p>
	N� CIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="ncin" size="20"></span></p>
	
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
    <p>&nbsp;&nbsp;&nbsp;<h5>Entrer les nouveaux donn�es du menbre :</h5></p>
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
      <option>M�canique</option>
      <option>El�ctrique</option>
      <option>Math�matique</option>
      
      </select>
    </span></p>
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Niveau&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</h4><input type="radio" name="niveau" value="1�re" />1�re
  <input type="radio" name="niveau" value="2�me" checked="checked"/>2�me
  <input type="radio" name="niveau" value="3�me" />3�me<br/>
  
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
  $connect=mysql_connect('127.11.6.2','adminsnUnrR1','S8F-UUCpn9Mw',3306);
    			mysql_select_db('cloudphp');
  
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
    echo("<h2>La modification � �t� correctement effectu�e</h2>") ;
  }
  else
  {
    echo("<h2>La modification � �chou�e</h2>") ;
  } 
  } else echo "<h2>Num�ro CIN incorrect</h2>";

  
}
  
?>


</table>
</center>
</body>

</html>
</body>

</html>
