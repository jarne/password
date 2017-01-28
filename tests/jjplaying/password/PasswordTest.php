<?php
/**
 * Created by PhpStorm.
 * User: jarne
 * Date: 02.11.16
 * Time: 18:54
 */

namespace jjplaying\password;

use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase {
    public function testGenerate() {
        $password = new Password();

        $passwordString = $password->generate(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    public function testGenerateEasyToRemember() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(4);

        $this->assertEquals(4, strlen($passwordString));
    }
}