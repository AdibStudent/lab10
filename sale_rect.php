<?php
header("Content-Type: image/png");

$image = imagecreate(300, 150);

// Colors
$white = imagecolorallocate($image, 255, 255, 255);
$red = imagecolorallocate($image, 255, 0, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Rectangle
imagefilledrectangle($image, 50, 50, 250, 100, $red);

// Label
imagestring($image, 5, 120, 70, "Sale!", $black);

// Output
imagepng($image);
imagedestroy($image);
?>
