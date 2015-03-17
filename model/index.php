<?php

include('parameters.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $CSS; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Espace membres</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $page_accueil; ?>"><img src="<?php echo $CSS; ?>/images/logo1.png" alt="Espace Membre" /></a>
	    </div>
        <div class="content">
<?php
//On pseudo si connecte
?>
<h1 align='center'><font color="#000080">votre espace membre</h1> 
<?php?>
<?php
//Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
if(isset($_SESSION['username']))
{
?>
<a href="connexion.php">Se d&eacute;connecter</a>
<?php
}
else
{
//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
?>
<table ><tr><td align="left">
<a href="access_up.php"><font color="blue">Inscription</font></a>
</td><td>
<a href="connexion.php"><font color="blue">Se connecter</font></a>
</table></tr></td>
<?php
}
?>
		</div>
		<?php
setlocale(LC_TIME, 'french');
$ladatefr = strftime("%A %d %B %Y ");

?> 	


		<div class="foot"><font color="blue"><?php Print("$ladatefr");?></font></div>
	</body>
</html>