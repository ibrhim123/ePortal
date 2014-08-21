<?php
if ( !array_key_exists('r', $_GET)) {
    return false;
}
$r_path = base64_decode($_GET['r']);
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('RESPATH', DOCROOT.'resources'.DIRECTORY_SEPARATOR);
$absolute_path = RESPATH.'documents'.DIRECTORY_SEPARATOR.substr(substr($r_path,0,strrpos($r_path,'.')),-2).DIRECTORY_SEPARATOR.$r_path;
$extnsn = substr($r_path, -3);
$image_info = getimagesize($absolute_path);
header('Content-Type: '.$image_info['mime']);
readfile($absolute_path);
