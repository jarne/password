<?php
/**
 * Created by PhpStorm.
 * User: jarne
 * Date: 30.07.17
 * Time: 18:47
 */

namespace jarne\password\utils;

class Characters {
    const LETTERS = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    const NUMBERS = "1234567890";
    const SPECIAL_CHARACTERS = "!?@(){}[]\/=~$%&#*-+.,_";

    const VOWEL_LETTERS = "aeiouAEIOU";
    const OTHER_LETTERS = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
}