<?php

$zip = ZipArchive();
$zip_file_path = '/var/www/html/public/storage/media/test.zip';
if (!$zip->open($zip_file_path)) {
    echo "Unzip was unsuccessful.";
}
else {
    $zip->extractTo('/var/www/html/public/storage/media/');
    $zip->close();
    echo "Unzip was successful.";
}