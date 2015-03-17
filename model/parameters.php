<?php
//On demarre les sessions
session_start();
//On se connecte a la base de donnee
mysqli_connect('localhost', 'root','','bdentreprise');
//Email du webmaster
$mail_admin = 'example@hotmail.com';
//Adresse du dossier ***********
$admin_url = 'http://www.monsite.com/';
//Nom du fichier de laccueil
$page_accueil= 'index.php';
//Nom du style pages
$CSS = 'design';
?>