<?php


$sentence = "I love Laravel Framework";
$words = explode(" ", $sentence);

$reversedWords = array_map('strrev', $words);

$reversedSentence = implode(" ", $reversedWords);

echo $reversedSentence;

?>
