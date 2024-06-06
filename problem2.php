<?php

$filename = "sadeq.txt";

if (file_exists($filename)) {
    $file = fopen($filename, "r");
    $fileContent = fread($file, filesize($filename));

    fclose($file);
    
    $words = preg_split('/\s+/', $fileContent, -1, PREG_SPLIT_NO_EMPTY);
    $wordCount = count($words);
    
    echo "Word Count: $wordCount\n";
} else {
    echo "The file $filename does not exist here.\n";
}

