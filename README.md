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
 - No PHP extension outside of the SPL of PHP 5.6
 - PHP, GiT, Terminal are accessible
 - 4 hours time limit
 - Composer can be used to generate the application class auto loader
 - Composer can be used to check PHP minimal requirements
 
# Installation

    cd /{project root}
    git clone 

# Run

IF Vagrant is available:

    vagrant up
    vagrant ssh
    cd /var/www/html

ELSE If host machine offers PHP 5.6+ AND composer
 
    cd {project root}
    php composer.phar install -o -v

THEN

    php -S localhost:8080
    php index.php
    
Dont forget to use `sudo` where applicable, IE composer install.
