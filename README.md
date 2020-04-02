# PHP Code Katas

PHP implementations and tests of the most popular code katas. The project is a fork from a Jeffrey Ways' [repository](https://github.com/laracasts/Code-Katas-in-PHP).

## Requirements

PHP >= 5.6 and Composer are required.

## Installation

    composer install

## Verify PHPUnit is installed correctly

On Windows:

	vendor\bin\phpunit --version

On Linux:

	./vendor/bin/phpunit --version

## Testing

Run the tests with PHPUnit:

    vendor\bin\phpunit -c tests

## Generate Code Coverage

Be sure to have the X-Debug PHP extension: 

    vendor\bin\phpunit -c tests --coverage-html=coverage

## TODO

File tree structure and folders must have:

- data structures
- algorithms
- design patterns

## Resources

- [Kata Catalogue](http://codingdojo.org/KataCatalogue/)
- [CodeKata.com](http://codekata.com)
- [PHPUnit](https://phpunit.de)
