# Overview
Chicken Challenge

# Requirements
Create a PHP class or classes that instantiate an object that represents
a chicken (the animal). Your chicken class should demonstrate understanding
of object oriented programming principles including (but not limited to)
 - inheritance
 - encapsulation
 - single-responsibility.
 
Your chicken must be able to be run through a PHP interpreter without any
external dependencies. It should follow PSR-2 standards and include unit
tests.

# Assumptions
 - PHP, GiT, Terminal are accessible
 - Composer can be used to generate the application class auto loader
 - Composer can be used to check PHP minimal requirements
 - Minimal 3rd part library usage, should not be core of demo
 
# Installation

    cd {project root}
    git clone 

# VM / Container services

IF Vagrant is available:

    vagrant up
    vagrant ssh
    
IF docker is available (very early alpha, YMMV)

    docker-compose up --build
    docker exec -it chickenchallenge_app_1 bash
    apt-get update && apt-get install wget

 * Run the application commands inside the container
 
# Install dependencies

    wget http://getcomposer.org/composer.phar
    php composer.phar install --profile --prefer-dist -o
   
# Running the app
Change directory to the root of the project

    php ./index.php

# Testing
Testing requires PHPUnit, easiest way to get PHPUnit is via composer

    cd {project root}
    wget https://phar.phpunit.de/phpunit.phar
    php ./vendor/bin/phpunit ./tests
   
# Coding style

To ensure PSR-2 compliant occasionally run the following

    wget https://squizlabs.github.io/PHP_CodeSniffer/phpcs.phar
    php phpcs.phar --standard=PSR2 ./
    php phpcs.phar --standard=PSR2 --ignore="*/vendor/*","*/sapi/*" --report-diff=./PSR2.diff ./
    patch -p0 -ui ./PSR2.diff
    
# Auto Generating Documentation
    
    wget http://phpdoc.org/phpDocumentor.phar
    php phpDocumentor.phar -p -t ./sapi -d ./src

* Note: GraphViz is required to generate inheritance tree visuals.

