# FizzBuzz Coding Challenge

This project contains a PHP 8.0 and a Nginx container.
It includes the following tools/libraries:
* Xdebug (see Dockerfile for options)
* Composer 2
* PHPUnit 9.5
* Full Symfony (Flex) 5.x

Nginx will run on port 8080 (see docker-compose.yml)

To start the project & execute tests:
```shell
$ docker-compose up -d
$ docker-compose exec php composer install
$ docker-compose exec php ./bin/phpunit
```
There are  tests, just to make sure that the basics are working. You should see an output like
```
$ docker-compose exec php ./bin/phpunit
PHPUnit 9.5.24 #StandWithUkraine

Testing 
..                                                                  2 / 2 (100%)

Time: 00:00.855, Memory: 24.00 MB

OK (1 test, 2 assertions)
```
