<?php
include 'fonctions.php';  
printEnTete(); 
  

if (file_exists("menu.csv")) {

    if (is_readable("menu.csv")) {
   
      $ListeCat  = file("menu.csv");

    } else {
      die ("Fichier non lisible!");
    }
} else {
  die ("Fichier n'existe pas!");
}
$page = $_SERVER["PHP_SELF"];

  echo <<< END_ECHO
<div id="navigation">
 <ul>
END_ECHO;


  foreach ($ListeCat as $cle => $valeur) { 
     echo <<< END_ECHO
   <li><a href="{$page}?category={$cle}">{$valeur}</a></li>\n
END_ECHO;
   }
   echo <<< END_ECHO
 </ul>
</div>\n
END_ECHO;
 
if (!isset($_GET['category'])) $category= '0'; else $category= $_GET['category'];
	  
switch($category) {

case'0': 
include("page1.php"); 
break; 
case'1': 
include("page2.php"); 
break; 

case'2': 
include("page3.php"); 
break; 
case'3': 
include("page4.php"); 
break; 
case'4': 
include("page5.php"); 
break; 
case'5': 
include("page6.php");
break; 
}
echo'<h3><a href="index.php">lien vers page accueil</a><h3>';
printBasPage();  

?>	   