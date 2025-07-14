<?php
header("Content-Type: image/png");

$image = imagecreatetruecolor(400, 100);

// Colors
$gray = imagecolorallocate($image, 220, 220, 220); // Light gray
$black = imagecolorallocate($image, 0, 0, 0);

// Fill background
imagefilledrectangle($image, 0, 0, 400, 100, $gray);

// Path to your .ttf font
$fontPath = __DIR__ . "/fonts/OpenSans-Regular.ttf"; // or any other .ttf font

// Add text using TrueType font
imagettftext($image, 20, 0, 50, 60, $black, $fontPath, "Hello, User!");

imagepng($image);
imagedestroy($image);
?>
