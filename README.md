# Bradyn Poulsen :: CS 2420

* [Running Tests in Python](#running-tests-in-python)
* [Running Tests in Ruby](#running-tests-in-ruby)
* [Running Tests in PHP](#running-tests-in-php)

## Running Tests in Python

Install dependencies using pip:

```
$ pip install -r requirements.txt
```

Run the tests using pytest:

```
$ py.test
```

## Running Tests in Ruby

Install dependencies using bundler:

```
$ bundle install
```

Run the tests using rspec:

```
$ bundle exec rspec *_spec.rb
```

## Running Tests in PHP

Install dependencies using composer:

```
$ composer install
```

Run the tests using PHPUnit:

```
$ vendor/bin/phpunit --colors *Test.php
```
