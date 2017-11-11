<?php
/**
 * Created by PhpStorm.
 * User: jarne
 * Date: 02.11.16
 * Time: 18:54
 */

namespace jarne\password;

use jarne\password\utils\Characters;
use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase {
    /* Normal generation */

    /**
     * Test to generate a normal short password
     */
    public function testGenerate() {
        $password = new Password();

        $passwordString = $password->generate(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    /**
     * Test to generate a password with only letters
     */
    public function testGenerateOnlyLetters() {
        $password = new Password();

        $passwordString = $password->generate(12, 1, 0, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate a password with only numbers
     */
    public function testGenerateOnlyNumbers() {
        $password = new Password();

        $passwordString = $password->generate(12, 0, 1, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate a password with only special characters
     */
    public function testGenerateOnlySpecialCharacters() {
        $password = new Password();

        $passwordString = $password->generate(12, 0, 0, 1);

        $this->assertEquals(12, strlen($passwordString));

        foreach(str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach(str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Really long */

    /**
     * Generate a really long password
     */
    public function testGenerateReallyLong() {
        $password = new Password();

        $passwordString = $password->generate(2048);

        $this->assertEquals(2048, strlen($passwordString));
    }

    /**
     * Test to generate a really long password with only letters
     */
    public function testGenerateReallyLongOnlyLetters() {
        $password = new Password();

        $passwordString = $password->generate(2048, 1, 0, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate a really long password with only numbers
     */
    public function testGenerateReallyLongOnlyNumbers() {
        $password = new Password();

        $passwordString = $password->generate(2048, 0, 1, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate a really long password with only special characters
     */
    public function testGenerateReallyLongOnlySpecialCharacters() {
        $password = new Password();

        $passwordString = $password->generate(2048, 0, 0, 1);

        $this->assertEquals(2048, strlen($passwordString));

        foreach(str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach(str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Easy to remember */

    /**
     * Test generating an easy to remember password
     */
    public function testGenerateEasyToRemember() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    /**
     * Test to generate an easy to remember password with only letters
     */
    public function testGenerateEasyToRememberOnlyLetters() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(12, 1, 0, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate an easy to remember password with only numbers
     */
    public function testGenerateEasyToRememberOnlyNumbers() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(12, 0, 1, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate an easy to remember password with only special characters
     */
    public function testGenerateEasyToRememberOnlySpecialCharacters() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(12, 0, 0, 1);

        $this->assertEquals(12, strlen($passwordString));

        foreach(str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach(str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Really long & easy to remember */

    /**
     * Generate a really long easy to remember password
     */
    public function testGenerateReallyLongEasyToRemember() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048);

        $this->assertEquals(2048, strlen($passwordString));
    }

    /**
     * Test to generate a really long easy to remember password with only letters
     */
    public function testGenerateReallyLongEasyToRememberOnlyLetters() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048, 1, 0, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate a really long easy to remember password with only numbers
     */
    public function testGenerateReallyLongEasyToRememberOnlyNumbers() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048, 0, 1, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate a really long easy to remember password with only special characters
     */
    public function testGenerateReallyLongEasyToRememberOnlySpecialCharacters() {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048, 0, 0, 1);

        $this->assertEquals(2048, strlen($passwordString));

        foreach(str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach(str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Others */

    /**
     * Test to generate a normal short password with random length
     */
    public function testGenerateRandomLength() {
        $password = new Password();

        for($i = 0; $i < 100; $i++) {
            $randLength = rand(1000, 9999);

            $passwordString = $password->generate($randLength);

            $this->assertEquals($randLength, strlen($passwordString));
        }
    }

    /**
     * Test to generate a password with only letters and chances in percent
     */
    public function testGenerategOnlyLetters() {
        $password = new Password();

        $passwordString = $password->generate(12, 100, 0, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }
}