<!DOCTYPE html>
<html>
<head>
  <meta http-equiv = "content-type" content = "text/html; charset=UTF-8" />
  <meta name="author" content="LU Guangjingxuan" />
  <title>My Favorite</title>  
  <link rel="stylesheet" href="common.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="favorite.css" type="text/css" media="screen" /> 
</head>

<body>
<header></header>

<div class="leftpart">
      <div id="avatar">
      <img src="image/me.jpg" class="img" alt="gjxlu92" />
      </div>
      
      <div id="imf">
      <img src="image/favor.jpg" class="img" alt="favorite" />
      </div>
</div>

<div id="cobody">


<div class="collection">
<div class= "favor">
<div class="star">
<a href="http://en.wikipedia.org/wiki/Pink">
<img src="image/pink.jpg" class="img" alt="A singer: Pink!"/>
</a>
</div>
<div class="dcp">
<?php
    $eg=fopen("./doc/pink.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>
<div class= "favor">
<div class="star">
<a href="http://en.wikipedia.org/wiki/Tokio_Hotel">
<img src="image/tokio.png" class="img" alt="A singer: tokio hotel"/>
</a>
</div>
<div class="dcp">
<?php
    $eg=fopen("./doc/tokio.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>
</div>


<div class="collection">
<div class= "favor">
<div class="star">
<a href="http://en.wikipedia.org/wiki/Jay_Chou">
<img src="image/jay.jpg" class="img" alt="A singer: jay!"/>
</a>
</div>
<div class="dcp">
<?php
    $eg=fopen("./doc/jay.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>
<div class= "favor">
<div class="star">
<a href="http://en.wikipedia.org/wiki/The_Penguins_of_Madagascar">
<img src="image/penguin.png" class="img" alt="A cartoon"/>
</a>
</div>
<div class="dcp">
<?php
    $eg=fopen("./doc/penguin.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>
</div>


<div class="collection">
<div class= "favor">
<div class="star">
<a href="http://en.wikipedia.org/wiki/Moulin_Rouge">
<img src="image/rouge.jpg" class="img" alt="A movie"/>
</a>
</div>
<div class="dcp">
<?php
    $eg=fopen("./doc/rouge.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>
<div class= "favor">
<div class="star">
<a href="http://en.wikipedia.org/wiki/Pocket_Monsters">
<img src="image/bw.png" class="img" alt="A cartoon serie"/>
</a>
</div>
<div class="dcp">
<?php
    $eg=fopen("./doc/bw.txt","a+");
    while(!feof($eg)){
   echo htmlspecialchars(fgets($eg));
}
?>
</div>
</div>
</div>

</div>
<footer>
<div>Copyright 2013 &copy; LU, Guangjingxuan</div>
</footer>
</body>
</html>