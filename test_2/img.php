<?php
$uploadfile = "image.png";
$src = imagecreatefrompng($uploadfile);
$size = getimagesize($uploadfile);
$width = $size[0];
$height = $size[1];
$k = $width/220;
$new_w = $width/200;
$new_h = $height/100;
$tmp = imagecreatetruecolor($new_w, $new_h);
$filename = "image_small.png";
imagecopyresampled($tmp, $src, 0,0,0,0, $new_w, $new_h, $width, $height);
imagepng($tmp, $filename, 9);

?>

<img src="image_small.png"/>
