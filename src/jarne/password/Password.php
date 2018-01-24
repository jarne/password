<?php
/**
 * Created by PhpStorm.
 * User: jarne
 * Date: 02.11.16
 * Time: 18:20
 */

namespace jarne\password;

use jarne\password\utils\Characters;

class Password {
    /**
     * Generate a password
     *
     * @param int $length
     * @param int $lettersChance
     * @param int $numbersChance
     * @param int $specialCharactersChance
     * @return string
     */
    public function generate(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1): string {
        $characters = "";
        $password = "";

        $lettersChance = ($lettersChance / strlen(Characters::LETTERS)) * 100;
        $numbersChance = ($numbersChance / strlen(Characters::NUMBERS)) * 100;
        $specialCharactersChance = ($specialCharactersChance / strlen(Characters::SPECIAL_CHARACTERS)) * 100;

        for($i = 0; $i < $lettersChance; $i++) {
            $characters .= Characters::LETTERS;
        }

        for($i = 0; $i < $numbersChance; $i++) {
            $characters .= Characters::NUMBERS;
        }

        for($i = 0; $i < $specialCharactersChance; $i++) {
            $characters .= Characters::SPECIAL_CHARACTERS;
        }

        $charactersLength = strlen($characters);

        for($i = 0; $i < $length; $i++) {
            $arrayIndex = rand(0, $charactersLength - 1);

            $password .= $characters[$arrayIndex];
        }

        return $password;
    }

    /**
     * Generate an easy to remember password
     *
     * @param int $length
     * @param int $lettersChance
     * @param int $numbersChance
     * @param int $specialCharactersChance
     * @return string
     */
    public function generateEasyToRemember(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1): string {
        $vowels = "";
        $characters = "";
        $password = "";

        if($lettersChance <= 0) {
            return $this->generate($length, $lettersChance, $numbersChance, $specialCharactersChance);
        }

        $lettersChance = ($lettersChance / strlen(Characters::LETTERS)) * 100;
        $numbersChance = ($numbersChance / strlen(Characters::NUMBERS)) * 100;
        $specialCharactersChance = ($specialCharactersChance / strlen(Characters::SPECIAL_CHARACTERS)) * 100;

        for($i = 0; $i < $lettersChance; $i++) {
            $vowels .= Characters::VOWEL_LETTERS;

            $characters .= Characters::OTHER_LETTERS;
        }

        for($i = 0; $i < $numbersChance; $i++) {
            $characters .= Characters::NUMBERS;
        }

        for($i = 0; $i < $specialCharactersChance; $i++) {
            $characters .= Characters::SPECIAL_CHARACTERS;
        }

        $vowelsLength = strlen($vowels);
        $charactersLength = strlen($characters);

        $lastCharacterWasVowel = true;

        for($i = 0; $i < $length; $i++) {
            if($lastCharacterWasVowel) {
                $arrayIndex = rand(0, $charactersLength - 1);

                $password .= $characters[$arrayIndex];

                $lastCharacterWasVowel = false;
            } else {
                $arrayIndex = rand(0, $vowelsLength - 1);

                $password .= $vowels[$arrayIndex];

                $lastCharacterWasVowel = true;
            }
        }

        return $password;
    }
}