<?php
use PHPUnit\Framework\TestCase;

require 'Revert.php';
class revertCharactersTest extends  TestCase
{

    public function testRevertCharacters() {
        $this->expectOutputString('oof');
         Revert::RevertCharacters('foo');

    }
    public function testRevertCharactersRus() {
        $this->expectOutputString('!риМ ,тевирП');
        Revert::RevertCharacters('Привет, Мир!');

    }
    public function testRevertCharactersNumbers() {
        $this->expectOutputString('321');
        Revert::RevertCharacters('123');

    }
    public function testRevertCharactersEmpty() {
        $this->expectOutputString('');
        Revert::RevertCharacters('');

    }
    public function testRevertCharactersRandomWords() {
        $this->expectOutputString('1qaz2цычCDE3');
        Revert::RevertCharacters('3EDCчыц2zaq1');

    }
}