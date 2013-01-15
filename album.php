<?php
# $dbh = new PDO('sqlite:db/data.db');
$f = opendir('./pic/');

$pics = array();
while ($file = readdir($f)) {
  $path = 'pic/' . $file;
  if (preg_match('/\.(png|jpg|jpeg|gif)$/i', $file) && getimagesize($path) !== false) {
    $pics[] = htmlspecialchars($file);
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv = "content-type" content = "text/html; charset=UTF-8" />
  <meta name="author" content="LU Guangjingxuan" />
  <title>My Album</title>  
  <script type="text/javascript" src="jqui/js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="jqui/js/jquery-ui-1.8.18.custom.min.js"></script>
  <link rel="stylesheet" href="jqui/cupertino/jquery-ui-1.8.18.custom.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="common.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="album.css" type="text/css" media="screen" />
  <script type="text/javascript" src="album.js"></script>
</head>
<body>
<header></header>
<?php
  if (empty($pics)) {
    ?>
<div>No photo available.</div>
<?php
		  }
  else {
?>
<ul id="album">
  <?php
    foreach ($pics as $pic) {
?>
  <li><div><img src="resize.php?f=<?php echo $pic; ?>" title="<?php echo $pic ?>" alt="photo" /></div></li>
    <?php
    }
?>
</ul>
<?php
  }
?>
<footer>
<div>Copyright 2013 &copy; LU, Guangjingxuan</div>
</footer>
</body>
</html>
