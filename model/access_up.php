<?php
include('parameters.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $CSS; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Inscription</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $page_accueil; ?>"><img src="<?php echo $CSS; ?>/images/logo1.png" alt="Espace Membre" /></a>
	    </div>
<?php
?>
<div class="content">
    <form action="access_up.php" method="post">
        Veuillez remplir ce formulaire pour vous inscrire:<br />
        <div class="center">
            <label for="username">Nom d'utilisateur</label><input type="text" name="username" value="<?php if(isset($_POST['username'])){echo htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <label for="password">Mot de passe<span class="small">(6 caract&egrave;res min.)</span></label><input type="password" name="password" /><br />
            <label for="passverif">Mot de passe<span class="small">(v&eacute;rification)</span></label><input type="password" name="passverif" /><br />
            <label for="email">Email</label><input type="text" name="email" value="<?php if(isset($_POST['email'])){echo htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8');} ?>" /><br />
            <input type="submit" value="Envoyer" />
		</div>
    </form>
</div>
<?php

?>
		<div class="foot"><a href="<?php echo $page_accueil; ?>">Retour &agrave; l'accueil</a> </div>
	</body>
</html>