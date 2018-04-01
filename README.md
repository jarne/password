<h1 align="center">password</h1>
<p align="center">A simple library to generate passwords</p>

<br>

<p align="center">
    <a href="https://packagist.org/packages/jarne/password">
        <img src="https://img.shields.io/packagist/v/jarne/password.svg" alt="Packagist version">
    </a>
    <a href="https://php.net">
        <img src="https://img.shields.io/packagist/php-v/jarne/password.svg" alt="PHP version">
    </a>
    <a href="https://circleci.com/gh/jarne/password">
    <img src="https://img.shields.io/circleci/project/github/jarne/password.svg" alt="CircleCI">
    </a>
    <a href="https://github.com/jarne/password/blob/master/LICENSE">
        <img src="https://img.shields.io/github/license/jarne/password.svg" alt="License">
    </a>
    <a href="https://gitter.im/jarne/password">
        <img src="https://img.shields.io/gitter/room/jarne/password.svg" alt="Gitter">
    </a>
</p>

##

[• Install](#-install)  
[• Usage](#-usage)  
[• Examples](#%EF%B8%8F-examples)  
[• Contribution](#-contribution)  
[• License](#%EF%B8%8F-license)

## 📦 Install
The library requires PHP 7.2 or newer in order to work correctly. You can install it with:

```
$ composer require jarne/password
```

If you don't like Composer, you can also clone the repository with:

```
$ git clone https://github.com/jarne/password
```

## 👨‍💻 Usage
There are two functions in this library:
- one to generate a random password
- and one to generate a random one which is easy to remember because it sounds like a real word

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
public function generate(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1): string
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
public function generateEasyToRemember(int $length = 8, int $lettersChance = 1, int $numbersChance = 1, int $specialCharactersChance = 1): string
```

See the examples section for a short code example how to use it.

## ⌨️ Examples
Here are some examples how to use the functions.

Generate an 8-character long password:

```php
$password = new Password();

$yourPassword = $password->generate();

echo "Your new password is " . $yourPassword;
```

If your password should only be 5 characters long, just change the second line to:

```php
$yourPassword = $password->generate(5);
```

It's also possible to generate a password with more numbers than letters, for example:

```php
$yourPassword = $password->generate(5, 1, 15, 1);
```

In the code above, the letter chance is set to 1, the numbers chance to 15, and the special characters chance to 1, so it's likely that the password contains more numbers than other characters.

## 🙋‍ Contribution
Contributions are always very welcome! It's completly equally if you're a beginner or a more experienced developer.

Please read our **[Contribution Guidelines](CONTRIBUTING.md)** before creating an issue or submitting a pull request.

Thanks for your intrest 🎉👍!

## 👨‍⚖️ License
[![Creative Commons License](https://i.creativecommons.org/l/by-sa/4.0/88x31.png)](http://creativecommons.org/licenses/by-sa/4.0/)

[password](https://github.com/jarne/password) by [jarne](https://github.com/jarne) is licensed under a [Creative Commons Attribution-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-sa/4.0/). Permissions beyond the scope of this license may be available on request.
