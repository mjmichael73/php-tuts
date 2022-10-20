<?php

$files_arary = array(); 
$dir_path = "/var/www/html"; 
$handle = opendir($dir_path); 

if ($handle) {
    while (($entry = readdir($handle)) !== false ){
        $files_arary[] = $entry;
    }
}

closedir($files_arary);