<?php

$file = "test.txt"; 

if (!unlink($file)) {
    echo "$file can not be deleted because of an error.";
}
else {
    echo "$file deleted successfully.";
}