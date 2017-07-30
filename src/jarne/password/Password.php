<?php
/**
 * Created by PhpStorm.
 * User: jarne
 * Date: 02.11.16
 * Time: 18:20
 */

namespace jarne\password;

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
    public function generate(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1) {
        $characters = "";
        $password = "";

        for($i = 0; $i < $lettersChance; $i++) {
            $characters .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        }

        for($i = 0; $i < $numbersChance; $i++) {
            $characters .= "1234567890";
        }

        for($i = 0; $i < $specialCharactersChance; $i++) {
            $characters .= "!?@(){}[]\/=~$%&#*-+.,_";
        }

        $charactersLength = strlen($characters);

        for($i = 0; $i < $length; $i++) {
            $arrayIndex = rand(0, $charactersLength - 1);

            $password .= $characters[$arrayIndex];
        }

        return $password;
    }

    /**
     * Generate an easy to remeber password
     *
     * @param int $length
     * @param int $lettersChance
     * @param int $numbersChance
     * @param int $specialCharactersChance
     * @return string
     */
    public function generateEasyToRemember(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1) {
        $vowels = "";
        $characters = "";
        $password = "";

        for($i = 0; $i < $lettersChance; $i++) {
            $vowels .= "aeiouAEIOU";

            $characters .= "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
        }

        for($i = 0; $i < $numbersChance; $i++) {
            $characters .= "1234567890";
        }

        for($i = 0; $i < $specialCharactersChance; $i++) {
            $characters .= "!?@(){}[]\/=~$%&#*-+.,_";
        }

        $vowelsLength = strlen($vowels);
        $charactersLength = strlen($characters);

        $lastCharactersWereVowel = true;

        for($i = 0; $i < $length; $i++) {
            if($lastCharactersWereVowel) {
                $arrayIndex = rand(0, $charactersLength - 1);

                $password .= $characters[$arrayIndex];

                $lastCharactersWereVowel = false;
            } else {
                $arrayIndex = rand(0, $vowelsLength - 1);

                $password .= $vowels[$arrayIndex];

                $lastCharactersWereVowel = true;
            }
        }

        return $password;
    }
}