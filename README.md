Citadel on the Move for The DataTank
=====================================

This tdt extension will transform datasets in the citadel on the move POI format.

# Install

## Requirements

* PHP 5.3
* composer ([get composer](http://getcomposer.org))
* apache 2
* mysql
* mod rewrite enabled

## The steps to install everything

* git clone https://github.com/tdt/start.git
* cd start
* git checkout feature-tdtnext
* fill out all configuration files in app/config
* make sure the public/ folder is you public www directory in apache2 and the site is enabled (`edit /etc/apache2/sites-available/... ; a2ensite ...`)
* composer require pietercolpaert/citadel
* composer update

Add `pietercolpaert\citadel\Test` to app/config/tdtext.json



