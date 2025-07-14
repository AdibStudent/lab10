<?php
header("Content-Type: image/png");

$image = imagecreate(300, 200);

// Colors
$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$purple = imagecolorallocate($image, 128, 0, 128);

// Draw green circle (ellipse)
imageellipse($image, 150, 100, 100, 100, $green);

// Draw purple line
imageline($image, 0, 0, 300, 200, $purple);

imagepng($image);
imagedestroy($image);
?>
