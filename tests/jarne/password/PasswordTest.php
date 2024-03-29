<?php

/**
 * password | library test file
 */

namespace jarne\password\tests;

use jarne\password\Password;
use jarne\password\utils\Characters;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \jarne\password\Password
 */
class PasswordTest extends TestCase
{
    /* Normal generation */

    /**
     * Test to generate a normal short password
     *
     * @covers ::generate
     */
    public function testGenerate(): void
    {
        $password = new Password();

        $passwordString = $password->generate(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    /**
     * Test to generate a password with only letters
     *
     * @covers ::generate
     */
    public function testGenerateOnlyLetters(): void
    {
        $password = new Password();

        $passwordString = $password->generate(12, 1, 0, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate a password with only numbers
     *
     * @covers ::generate
     */
    public function testGenerateOnlyNumbers(): void
    {
        $password = new Password();

        $passwordString = $password->generate(12, 0, 1, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate a password with only special characters
     *
     * @covers ::generate
     */
    public function testGenerateOnlySpecialCharacters(): void
    {
        $password = new Password();

        $passwordString = $password->generate(12, 0, 0, 1);

        $this->assertEquals(12, strlen($passwordString));

        foreach (str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach (str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if ($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Really long */

    /**
     * Generate a really long password
     *
     * @covers ::generate
     */
    public function testGenerateReallyLong(): void
    {
        $password = new Password();

        $passwordString = $password->generate(2048);

        $this->assertEquals(2048, strlen($passwordString));
    }

    /**
     * Test to generate a really long password with only letters
     *
     * @covers ::generate
     */
    public function testGenerateReallyLongOnlyLetters(): void
    {
        $password = new Password();

        $passwordString = $password->generate(2048, 1, 0, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate a really long password with only numbers
     *
     * @covers ::generate
     */
    public function testGenerateReallyLongOnlyNumbers(): void
    {
        $password = new Password();

        $passwordString = $password->generate(2048, 0, 1, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate a really long password with only special characters
     *
     * @covers ::generate
     */
    public function testGenerateReallyLongOnlySpecialCharacters(): void
    {
        $password = new Password();

        $passwordString = $password->generate(2048, 0, 0, 1);

        $this->assertEquals(2048, strlen($passwordString));

        foreach (str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach (str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if ($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Easy to remember */

    /**
     * Test generating an easy to remember password
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateEasyToRemember(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(4);

        $this->assertEquals(4, strlen($passwordString));
    }

    /**
     * Test to generate an easy to remember password with only letters
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateEasyToRememberOnlyLetters(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(12, 1, 0, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate an easy to remember password with only numbers
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateEasyToRememberOnlyNumbers(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(12, 0, 1, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate an easy to remember password with only special characters
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateEasyToRememberOnlySpecialCharacters(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(12, 0, 0, 1);

        $this->assertEquals(12, strlen($passwordString));

        foreach (str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach (str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if ($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Really long & easy to remember */

    /**
     * Generate a really long easy to remember password
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateReallyLongEasyToRemember(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048);

        $this->assertEquals(2048, strlen($passwordString));
    }

    /**
     * Test to generate a really long easy to remember password with only letters
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateReallyLongEasyToRememberOnlyLetters(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048, 1, 0, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }

    /**
     * Test to generate a really long easy to remember password with only numbers
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateReallyLongEasyToRememberOnlyNumbers(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048, 0, 1, 0);

        $this->assertEquals(2048, strlen($passwordString));
        $this->assertTrue(is_numeric($passwordString));
    }

    /**
     * Test to generate a really long easy to remember password with only special characters
     *
     * @covers ::generateEasyToRemember
     */
    public function testGenerateReallyLongEasyToRememberOnlySpecialCharacters(): void
    {
        $password = new Password();

        $passwordString = $password->generateEasyToRemember(2048, 0, 0, 1);

        $this->assertEquals(2048, strlen($passwordString));

        foreach (str_split($passwordString) as $passwordCharacter) {
            $containingThisCharacter = false;

            foreach (str_split(Characters::SPECIAL_CHARACTERS) as $specialCharacter) {
                if ($specialCharacter === $passwordCharacter) {
                    $containingThisCharacter = true;
                }
            }

            $this->assertTrue($containingThisCharacter);
        }
    }

    /* Others */

    /**
     * Test to generate a normal short password with random length
     *
     * @covers ::generate
     */
    public function testGenerateRandomLength(): void
    {
        $password = new Password();

        for ($i = 0; $i < 100; $i++) {
            $randLength = rand(1000, 9999);

            $passwordString = $password->generate($randLength);

            $this->assertEquals($randLength, strlen($passwordString));
        }
    }

    /**
     * Test to generate a password with only letters and chances in percent
     *
     * @covers ::generate
     */
    public function testGenerategOnlyLetters(): void
    {
        $password = new Password();

        $passwordString = $password->generate(12, 100, 0, 0);

        $this->assertEquals(12, strlen($passwordString));
        $this->assertTrue(ctype_alpha($passwordString));
    }
}
