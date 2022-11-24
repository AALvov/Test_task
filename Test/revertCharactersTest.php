<?php

use PHPUnit\Framework\TestCase;

require 'Revert.php';

class revertCharactersTest extends TestCase
{

    public function testRevertCharacters()
    {
        $this->assertSame('oof', RevertCharacters('foo'));


    }

    public function testRevertCharactersRus()
    {
        $this->assertSame('!риМ ,тевирП', RevertCharacters('Привет, Мир!'));


    }

    public function testRevertCharactersNumbers()
    {
        $this->assertSame('321', RevertCharacters(123));


    }

    public function testRevertCharactersEmpty()
    {
        $this->assertSame('', RevertCharacters(''));


    }

    public function testRevertCharactersRandomWords()
    {
        $this->assertSame('1qaz2цычCDE3', RevertCharacters('3EDCчыц2zaq1'));


    }
}