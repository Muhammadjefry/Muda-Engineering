<?php


$text = "IdamanSualiman";

function hasSpaces($intext)
{

    for ($idx = 0; $idx < strlen($intext); $idx++) {
        if ($intext[$idx] == " ") {
            echo "with space" . PHP_EOL;
            return true;
        }
    }
    echo "without space" . PHP_EOL;
}
hasSpaces($text);
