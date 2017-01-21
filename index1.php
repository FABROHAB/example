<?xml version="1.0" encoding="UTF-83?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" 
lang="fr">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title> Demonstration</title>
 <link href="fab.css" rel="stylesheet" type="text/css" media="screen"/>
  
</head>
<body id="bo">
<div id="conte1">


</div>

<div id="menu">
<ul>
<li><a href="demo.php">Acceuil</a></li>
<li><a href="histo.php">Historique</a></li>
<li><a href="dive.php">Divers</a></li>
<li><a href="compte.php">Votre compte</a></li>
<li><a href="contact.php">Nos contacts</a></li>
</ul>

</div>

<div id="conte2">

</div>
<div id="conteneur">
<h3 id="bar">Barcelona</h3><h2>vs</h2><h3 id="real" >Real Madrid</h3>
<h1 id="text"></h1>
<script>
var tx=document.getElementById('bar');
var tz=document.getElementById('real');
var ty=document.getElementById('text');
tx.addEventListener('mouseover',affiche);
tx.addEventListener('mouseout',debut);
var bdy=document.getElementById('bo');
tz.addEventListener('mousedown',affiche1);
tz.addEventListener('mouseup',debut1);
function affiche(){
	ty.innerHTML='JE VOTE POUR LE FC BARCELONE';
	ty.style.color='green';
}
function affiche1(){
	ty.innerHTML='JE VOTE POUR LE REAL MADRID FC';
	ty.style.color='blue';
	bdy.style.backgroundColor='#7fffbb';
}
function debut(){
	ty.innerHTML='';
}
function debut1(){
	ty.innerHTML='';
	bdy.style.backgroundColor='white';
}

</script>

</div>

<div id="bas">

</div>

</body>

</html>