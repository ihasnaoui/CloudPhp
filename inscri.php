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
				<font size="4" face="Times New Roman" color="#0000FF">Remplir tous les informations:</font></i></b></td>
			</tr>
		</table>
		<table border="1" width="100%">
			<tr>
				<td>
<form id="form1" method="POST" action="inscri.php">
	
	<p>&nbsp;</p>
    <p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	N� CIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="ncin" size="20"></span></p>
	
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="nom" size="20"></span></p>
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Prenom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="prenom" size="20"></span></p>
		<p>
	<span style="font-family: 'Times New Roman',serif">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="mail" size="20"> </span></p>
	<p>
    <span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="password" name="password" size="20"></span></p>
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
	<input type="submit" value="Enregistrer" name="submit" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
	<input type="reset" value="R�tablir" name="B2" style="color: #000066; font-family: Times New Roman; font-size: 12pt; font-weight: bold"></p>
</form></td>
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


    <?php
if (isset($_POST['submit']))
{
    $nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
    $password=$_POST['password'];
    $mail=$_POST['mail'];
	$section=$_POST['section'];
	$niveau=$_POST['niveau'];
	$ncin=$_POST['ncin'];

    if ($nom&&$prenom&&$password&&$mail&&$section&&$niveau&&$ncin) 
	{
		if (strlen($ncin)==8)
		{
    		if (strlen($password)>3) 
			{
    			$password=md5($password); //crypt� le password
    			$connect=mysql_connect('127.11.6.2','adminsnUnrR1','S8F-UUCpn9Mw',3306);
    			mysql_select_db('cloudphp');

    			$query=mysql_query("SELECT * from inscr WHERE prenom='$prenom' AND mail='$mail'");
    			$rows=mysql_num_rows($query);
    			if ($rows==0)
    			 {
    			   $reg=mysql_query("INSERT INTO inscr VALUES ('','$ncin','$nom','$prenom','$password','$mail','$section','$niveau')");
    			   die('<h2>Inscription termin�e</h2>');
				 }else echo "<h2>Ce nom d'utilisateur n'est pas disponible<h2>";  
    			 }else echo "<h2>Le password doit contenir plus de 3 caracteres</h2>";
		}else echo "<h2> le NCIN doit etre egal � 8 chifre</h2>";  

                
    		}else echo "<h2>Remplir tous les champs</h2>";
    	
    }
//}

//bases=loginphp & table=inscr

?>
</table>
</center>
</body>

</html>
</body>

</html>
