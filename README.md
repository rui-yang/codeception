Codeception 
=================

Test Automation Using Codeception


Install
--------------

* PHP
* Composer
* Codeception


Framework Architecture
--------------
Design Pattern Page Object is being used in this project to seperate the actual tests from the web elements and the actions taken upon them.

	Project-Name
		|__support
		|	|_Page
		|	|	|_*Page.php
		|	|	|...
		|	|_Step
		|	|	|_*Steps.php
		|	|	|...		
		|_tests
		|	|_acceptance
		|	|	|_*Cest.php
		|	|	|...
		|	|_acceptance.suite.yml		
		|_vendor
		|	|_bin
		|	|_codeception
		|_codeception.yml		


Run Tests
--------------

(Go to the project directory from terminal and run the command `vendor/bin/codecept run`)

$ git clone https://github.com/rui-yang/codeception.git

$ cd codeception

$ vendor/bin/codecept run



License
-------

(The MIT License)

