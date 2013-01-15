<?php
if (!isset($_GET['f'])) {
  header('HTTP/1.1 400 Bad Request');
  echo '400 Bad Request';
  die();
}

$f = 'pic/' . $_GET['f'];

if (!is_file($f)) {
  header('HTTP/1.1 404 Not Found');
  echo '404 Not Found';
  die();
}

list($w, $h, $type) = getimagesize($f);

switch ($type) {
case IMAGETYPE_GIF:
  $r = imagecreatefromgif($f);
  break;
case IMAGETYPE_PNG:
  $r = imagecreatefrompng($f);
  break;
case IMAGETYPE_JPEG:
  $r = imagecreatefromjpeg($f);
  break;
default:
  header('HTTP/1.1 501 Not Implemented');
  echo '501 Not Implemented';
  die();
}

$c = max($w, $h);
$ratio = 100 / $c;
$new_w = $w * $ratio;
$new_h = $h * $ratio;
$tmp = imagecreatetruecolor($new_w, $new_h);
imagecopyresampled($tmp, $r, 0,0,0,0, $new_w, $new_h, $w, $h);
imagedestroy($r);
header("Content-type: image/jpeg");
imagejpeg($tmp); 
#header("Content-type: image/png");
#imagepng($tmp);
imagedestroy($tmp);

