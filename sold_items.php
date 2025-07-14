<?php
header("Content-Type: image/png");

$image = imagecreate(350, 100);

// Colors
$yellow = imagecolorallocate($image, 255, 255, 0);
$black = imagecolorallocate($image, 0, 0, 0);

// Text
imagestring($image, 5, 100, 40, "100 Items Sold", $black);

imagepng($image);
imagedestroy($image);
?>
