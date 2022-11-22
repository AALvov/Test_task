<?php
class Revert {
public static function revertCharacters($str): void{
    $result = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $result .= mb_substr($str, $i, 1);
    }
    echo $result;

}
}
Revert::revertCharacters("Привет! Давно не виделись.");
