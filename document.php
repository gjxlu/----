<!DOCTYPE html>
<html>
<head>
  <meta http-equiv = "content-type" content = "text/html; charset=UTF-8" />
  <meta name="author" content="LU Guangjingxuan" />
  <title>My Document</title>  
  <link rel="stylesheet" href="common.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="document.css" type="text/css" media="screen" /> 
</head>

<body>
<header></header>

<div id="book">
<div class= "paper">
<?php
    $eg=fopen("./doc/1.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
<div class="paper">
<?php
    $eg=fopen("./doc/2.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>

<footer>
<div>Copyright 2013 &copy; LU, Guangjingxuan</div>
</footer>
</body>
</html>