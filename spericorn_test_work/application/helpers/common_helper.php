<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('getAssetPath')) {
 function getAssetPath() {
   return base_url();
 }
}

if (!function_exists('getBasePath')) {
 function getBasePath() {
   $path = 'index.php/';
   return base_url() . $path;
 }
}




?>
