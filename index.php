<html>
<head>
<title>DYnamic web page</title>
</head>
<body>
<a href="index.php?page=index">home</a><br/><dic id="menu"
<div id= "menu">
<a href="index.php?page=js">Javascript</a><br/>
<a href="index.php?page=Csharp">Csharp</a><br/>
<a href="index.php?page=css">css</a><br/>
</div>
<div id="content">
<?php
$p=$_GET['page'];
$page="sub/".$p.".php";
if (file_exists($page))
include($page);
else if ($page=="")
echo "This is home page";
else
echo "What are you looking for?";
?>
</div>
</body>
</html>