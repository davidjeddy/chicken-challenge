# Timeline

1900 started project
    setup Vagrant ENV to ensure 'run anywhere'
    ADDED project documentation and dependency files
1930 began initial class, interface and trait development
1940 Break time, UPS delivery
2000 Back to slinging code
2030 init class / trait / interface setup
2045 Issue with composers dying at the end of reading packages
    - updated vagrantFile to allow VM 1024MB of memory, solved via:
    https://github.com/composer/composer/issues/1959
    https://www.vagrantup.com/docs/virtualbox/configuration.html
2115 composer usage minimized to auto-generating the initial class map
2135 Working on a generic auto loader...'cause OOP
2210 Core functionality complete, taking a break.
    - Left to do: randomly assign attributes each run
    - Write some Unit test coverage per spec.
2310 Break time.
2330 back to it, adding basic functionality to Chicken class
0000 Time over, sadly could not figure out why PHPUnit is throwing an
    error on any second usage of $this->asserts*()