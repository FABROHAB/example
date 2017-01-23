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
<dir id=content>
<?php
include($content);
?>
</div>
</body>

</html>