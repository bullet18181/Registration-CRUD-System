Registration-CRUD-System

Installing Laravel
Laravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

Via Laravel Installer
First, download the Laravel installer using Composer:

composer global require "laravel/installer"
Make sure to place composer's system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:

macOS: $HOME/.composer/vendor/bin
GNU / Linux Distributions: $HOME/.config/composer/vendor/bin
Once installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel's dependencies already installed:

laravel new blog
Via Composer Create-Project
Alternatively, you may also install Laravel by issuing the Composer create-project command in your terminal:

composer create-project --prefer-dist laravel/laravel blog
