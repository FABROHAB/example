<?php
$page=htmlentities($_GET['page']);
$pages=scandir('pages');





if(!empty($page)&&in_array($_GET['page'].".php",$pages))
{
$content='pages/'.$_GET['page'].".php";
}else{
header("Location:index.php?page=login");

}
?>
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
<body>
<div id="conte1">
<h2 id="bo">bonjour1</h2>
<script>
var d=new Date();

var dt=d.getHours();
if(dt>12)
var tx=document.getElementById('bo').innerHTML=('BON APRE MIDI');
</script>

</div>

<div id="menu">
<ul>
<li><a href="demo.php">Acceuil</a></li>
<li><a href="histo.php">Historique</a></li>
<li><a href="dive.php">Divers</a></li>
<li><a href="compte.php">creer votre compte</a></li>
<li><a href="contact.php">Nos contacts</a></li>
</ul>

</div>

<div id="conte2">

</div>
<div id="conteneur">

<script>
var get =document.querySelector('p a');
var a =document.querySelectorAll('.hab');
var r=document.getElementById('site').style.color='white';
var r1=document.getElementById('site').style.fontSize='25px';
alert('Information dans le lien :'+get+'\nDans a'+a[0].innerHTML+'\nDans a'+a[1].innerHTML);

</script>

</div>

<div id="bas">

</div>
</body>

</html>