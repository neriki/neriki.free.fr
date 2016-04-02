<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php
if(count($HTTP_GET_VARS)>0){
	$chaine=$HTTP_GET_VARS["chaine"];
	$chaine=str_replace("\"","'",$chaine);
	$chaine=str_replace(">","&gt;",$chaine);
	$chaine=str_replace("<","&lt;",$chaine);
	}
else
	$chaine="Luke, ramasse la savonnette!";
?>
<title>Projets et scripts divers</title>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="stylesheet" type="text/css" href="style.css" media="screen" title="defaut" >
<link rel="stylesheet" type="text/css" href="prtstyle.css" media="print" title="Impression" >
<link rel="alternate stylesheet" type="text/css" href="altstyle.css" media="screen" title="Blanc" >
</head>
<body>
<a id=haut name=haut></a>
<img id="logo" alt="Chez Neriki" src="ordi.jpg">
<div id="bandeau">Projets</div>
<div id="menu">
  <a class="itemm" href="index.html">Chez Neriki</a>
  <a class="itemm" href="liens.html">Liens</a>
  <a class="itemms" href="projets.php">Projets</a>
  <a class="itemm" href="5120.html">IBM 5120</a>
  <a class="itemm" href="sparcstation.html">SparcStation</a>
  <!-- a class="itemm" href="falcon.html">Falcon 030</a>
  <a class="itemm" href="next.html">NeXT Cube</a -->
  <a class="itemm" href="yopy.html">Yopy (YP3700)</a>
  <!-- a class="itemm" href="histounix.html">Unix (historique)</a -->
</div>
<div id="texte">
<h1><a name="audio" class="ancre">&nbsp;</a>Lecteur audio web</h1>
<p>
Ce petit programme est une interface PHP pour une playlist musicale. Elle permet
de piloter cette derni&egrave;re depuis un ordinateur ou un PDA poss&eacute;dant un navigateur
Web et une liaison r&eacute;seau vers celle ci. Elle se compose d'un ensemble de pages
PHP et d'un script en Python. Les pages PHP constituent l'interface 
utilisateur, le script s'occupe de lire les fichiers audios en tache de fond.
</p>
<p>T&eacute;l&eacute;charger la <a href="mediabox0.2.0.8.tar.gz">derni&egrave;re version.</a></p>
<p>Voir le <a href="README">README</a></p>
<h1><a name="vador" class="ancre">&nbsp;</a>Vador</h1>
<p>C'est un petit script PHP qui permet de modifier le texte dans la bulle de l'image suivante:</p>
<?php
echo "<img src=\"vador/vador.php?chaine=".stripslashes($chaine)."\" alt=\"".stripslashes($chaine)."\">";
?>
<p>Pour l'utiliser, vous pouvez soit modifier le texte qui suit vador.php?chaine= dans l'URL, soit passer par le formulaire suivant:</p>
<form method="get" action="projets.php#vador">
<input size="20" name="chaine">
<input type="submit" value="GO!">
<input type="reset" value="Effacer">
</form>
<p>Une fois l'image g&eacute;n&eacute;r&eacute;e, vous pouvez la poster dans un forum en utilisant soit le code bbcode (accept&eacute; par la plupart des forums), soir en publiant directement l'URL:</p>
<?php
$longueur=(strlen($chaine)>40)?80:strlen($chaine)+50;
echo"<label>URL:</label><br><input size=\"".$longueur."\" value=\"http://neriki.free.fr/vador/vador.php?chaine=".stripslashes($chaine)."#.gif\"><br>";
echo"<label>bbcode:</label><br><input size=\"".$longueur."\" value=\"[img]http://neriki.free.fr/vador/vador.php?chaine=".stripslashes($chaine)."[/img]\">";
?>
<p>La source du script est disponible <a href="vador/vador.php.html">ici</a>. Vous pouvez la modifier &agrave; votre guise. Par exemple pour am&eacute;liorer la gestion des accents.</p>
<h1><a name="stationsunix" class="ancre">&nbsp;</a>Stations Unix</h1>
<p>Un <a href="http://unix.t001337.info">wiki</a> destin&eacute; &agrave; contenir les informations que je glane &agrave; droite ou &agrave; gauche sur les stations Unix. Il est fortement inspir&eacute; de l'<a href="http://wiki.xanthos.se/index.php/Main_Page">Unix Workstation Database</a>.Vous pouvez bien sur participer &agrave; son enrichissement. </p>
</div>
</body>
</html>
