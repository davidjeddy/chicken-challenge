# Overview
Chicken Challenge

# Assumptions
 - No PHP extension outside of the SPL of PHP 5.6
 - 3rd part PHP library's are permitted
 - 4 hours time limit
 
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

THEN

    php -S localhost:8080
    php composer.phar install -o -v
    php index.php
    
Dont forget to use `sudo` where applicable, IE composer install.
