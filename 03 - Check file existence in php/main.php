<?php

$file_address = "test.zip"; 

if(! file_exists($file_address)) {
    echo "File doesn't exist.";
}
else {
    echo "File exists.";
}