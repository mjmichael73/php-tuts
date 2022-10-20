<?php

$zip = ZipArchive(); 
if ($zip->open('/var/www/html/public/storage/media/test.zip')) {
    $zip->extractTo('/var/www/html/public/storage/media/');
    $zip->close();
    echo "Unzip was successful.";
}
else {
    echo "Unzip was unsuccessful.";
}