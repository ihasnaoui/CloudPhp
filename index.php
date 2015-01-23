<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ENSIT</title>
</head>

<body background="img/background_compass.gif">
<center>
<p>&nbsp;</p>
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
				<td><center>
                <h2><font color="#CC0000"></font></h2>
<form id="form1" method="POST" action="index.php">
	
	<p>&nbsp;</p>
    
	
	<p>
	<span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
	Nom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="nom" size="20"></span></p>
	<p>
    <span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif">
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="password" name="password" size="20"></span></p>
	<p>
	<input type="submit" value="Connecter" name="submit" style="font-size: 12pt; font-family: Times New Roman; color: #000066; font-weight: bold">
    <p>Si vous n'�tes pas membre?</p>
    <a href="inscri.php">Inscrivez vous maintenant</a>
    <p>&nbsp;</p>
     <p>&nbsp;</p>
      <p>&nbsp;</p>
       
       </center>
</form></td>

			</tr>
		</table>
		
	</tr>

<?php
if (isset($_POST['submit'])) 
{
	$nom=$_POST['nom'];
    $password=$_POST['password'];
	$password=md5($password);
	if($nom=='admin'&&$password='admin') 
	   {	
	     header('location:admin.php');}
		 
	   else{
		     $connect=mysql_connect('127.11.6.2','adminstqScTq',' gKKHC6bRL9Gv',3306);
    			mysql_select_db('phpcloud');
			 //echo $password;
	$test=mysql_query("SELECT ncin from inscr WHERE nom=$nom");
	if ($test==0){
	 header('location:membre.php');}
	 else {echo "non";}		 

	   
	  
	  /*elseif($nom&&$password)
	      {  $password=md5($password);
		     $conect=mysql_connect('localhost','root','');
    	     mysql_select_db('loginphp');
    	     $query=mysql_query("SELECT ncin form inscr WHERE nom='$nom' AND pass='$password",$conect);
			 while ($elt = mysql_fetch_object ($query))
  
  {
	  echo $elt->ncin;
	  }
   // }else echo " <h2> Remplir tous les champs</h2>";
}*/
}
}
?>
</table>
</center>
</body>

</html>
</body>

</html>
