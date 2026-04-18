[!WARNING]
**⚠️ This project has been archived and is no longer maintained. ⚠️**

Github has shown it does not respect its users. Other have said it better than I can.

- https://www.theregister.com/2022/06/30/software_freedom_conservancy_quits_github/
- https://www.andrlik.org/dispatches/migrating-from-github-motivation/
- https://techresolve.blog/2025/12/27/looking-to-migrate-company-off-github-whats-the/
- https://lord.io/leaving-github/
- https://dev.to/alanwest/how-to-actually-migrate-from-github-to-codeberg-without-losing-your-mind-33bf>
> Development has moved to Codeberg:
> **➡️ https://codeberg.org/DavidJEddy/chicken-challenge**
>
> Please update your remotes:
> ```bash
> git remote set-url origin https://codeberg.org/DavidJEddy/chicken-challenge
> ```

---
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

    cd {project root}
    git clone 

# Run

IF Vagrant is available:

    vagrant up
    vagrant ssh
    cd /var/www/html/src/

ELSE If host machine offers PHP 5.6+
 
    cd {project root}

THEN

    php -f index.php

# Testing
Testing requires PHPUnit, easiest way to get PHPUnit is via composer

    cd {project root}
    wget https://phar.phpunit.de/phpunit.phar

Now we can test 

    php phpunit.phar --bootstrap ./src/autoloader.php -c ./tests/phpunit.xml
    
# Side Note
I'd like to point out that one requirement is 'no external dependencies',
however to run PHPUnit one must obtain it, thus breaking the prev. stated
requirements.