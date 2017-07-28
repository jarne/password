<?php
/**
 * Created by PhpStorm.
 * User: jarne
 * Date: 02.11.16
 * Time: 18:54
 */

namespace jarne\password;

use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase {
    /**
     * Test to generate a normal short password
     */
    public function testGenerate() {
        $password = new Password();

        $passwordString = $password->generate(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    /**
     * Generate a really long password
     */
    public function testGenerateReallyLong() {
        $password = new Password();

        $passwordString = $password->generate(2048);

        $this->assertEquals(2048, strlen($passwordString));
    }

    /**
     * Test generating an easy to remember password
     */
    public function testGenerateEasyToRemember() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    /**
     * Generate a really long easy to remember password
     */
    public function testGenerateReallyLongEasyToRemember() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048);

        $this->assertEquals(2048, strlen($passwordString));
    }
}