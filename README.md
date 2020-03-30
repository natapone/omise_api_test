# omise_api_test
Test Omise API in CakePHP

# Install
$ cd ~
$ php composer.phar create-project --prefer-dist cakephp/app:^3.8 /var/www/html/project/omise_api_test

$ cd /var/www/html/project
composer create-project --prefer-dist cakephp/app:^3.8 /var/www/html/project/omise_api_test

# Run
$ cd /var/www/html/project/omise_api_test
$ bin/cake server -p 3000

# URL
List: http://localhost:3000/omise_api_test/articles/index
Add article: http://localhost:3000/omise_api_test/articles/add
Article by ID: http://localhost:3000/omise_api_test/article_id/3
Payment: http://localhost:3000/omise_api_test/payment

# Omise

## Install Omise module from https://github.com/omise/omise-php
$ composer require omise/omise-php

## Configuration
Path: /omise_api_test/config/app.php
App.omise.OMISE_PUBLIC_KEY
App.omise.OMISE_SECRET_KEY
App.omise.OMISE_API_VERSION

# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
