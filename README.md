password
=
A simple library to generate passwords

[![CircleCI](https://circleci.com/gh/jarne/password.svg?style=svg)](https://circleci.com/gh/jarne/password)

## Install

You can easily install it with `composer require jarne/password`. If you don't have Composer, you can also clone the respository and use it.

## Usage
There are two functions, one to generate a random password, and one to generate a random one which is easy to remember because it sounds like a real word.

The arguments are the same for both functions:

```php
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
```

```php
/**
* Generate an easy to remember password
*
* @param int $length
* @param int $lettersChance
* @param int $numbersChance
* @param int $specialCharactersChance
* @return string
*/
public function generateEasyToRemember(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1) {
```

## Examples

To generate a password which is 5 characters long, call:

```php
$password = new Password();

$password->generate(5);
```

## License & Credits
[![Creative Commons License](https://i.creativecommons.org/l/by-sa/4.0/88x31.png)](http://creativecommons.org/licenses/by-sa/4.0/)

You are free to copy, redistribute, change or expand our work, but you must give credits share it under the same license.
password by [jarne](https://github.com/jarne/password) is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/).
