<?php
function revertCharacters($str): string
{
    $result = '';
    for ($i = mb_strlen($str); $i >= 0; $i--) {
        $result .= mb_substr($str, $i, 1);
    }
    return $result;
}

echo revertCharacters("Привет! Давно не виделись.");
