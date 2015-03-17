<?php
include('parameters.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $CSS; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Connection</title>
    </head>
    <body>
        <div class="header">
                <a href="<?php echo $page_accueil; ?>"><img src="<?php echo $CSS; ?>/images/logo.png" alt="Espace Membre" /></a>
            </div>
<div class="content">
    <form action="connexion.php" method="post">
        Veuillez entrer vos identifiants pour vous connecter:<br />
        <div class="center">
		 <label for="username">Nom d'utilisateur</label>
			<input type="text" name="username" id="username" value=""/><br />
            <label for="password">Mot de passe</label>
			<input type="password" name="password" id="password"/><br />
            <input type="submit" value="authentification" />
                </div>
				<a href="menu-accueil.php">lien vers page menu-accueil</a>
    </form>
</div>

       


                <div class="foot"><a href="<?php echo $page_accueil; ?>">Retour &agrave; l'accueil</a></div>
        </body>
</html>
