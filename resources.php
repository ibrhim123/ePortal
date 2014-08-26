<?php
if ( !array_key_exists('r', $_GET)) {
    return false;
}
$r_path = base64_decode($_GET['r']);
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('RESPATH', DOCROOT.'resources'.DIRECTORY_SEPARATOR);
$absolute_path = RESPATH.'documents'.DIRECTORY_SEPARATOR.substr(substr($r_path,0,strrpos($r_path,'.')),-2).DIRECTORY_SEPARATOR.$r_path;
$extnsn = substr($r_path, -3);
/*
 * PHP GD
 * adding watermark to an image with GD library
 */

// Load the watermark and the photo to apply the watermark to
$stamp = imagecreatefrompng('logo-watermark.png');
$im = imagecreatefromjpeg($absolute_path);

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

$image_info = getimagesize($absolute_path);
header('Content-Type: '.$image_info['mime']);
imagepng($im);
imagedestroy($im);
readfile($absolute_path);
