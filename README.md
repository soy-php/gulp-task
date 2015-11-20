# Gulp Task

[![Latest Stable Version](https://poser.pugx.org/soy-php/gulp-task/v/stable)](https://packagist.org/packages/soy-php/gulp-task) [![Total Downloads](https://poser.pugx.org/soy-php/gulp-task/downloads)](https://packagist.org/packages/soy-php/gulp-task) [![Latest Unstable Version](https://poser.pugx.org/soy-php/gulp-task/v/unstable)](https://packagist.org/packages/soy-php/gulp-task) [![License](https://poser.pugx.org/soy-php/gulp-task/license)](https://packagist.org/packages/soy-php/gulp-task)

## Introduction
This is a [gulp](http://gulpjs.com/) task for Soy

## Usage
Include `soy-php/gulp-task` in your project with composer:

```sh
$ composer require soy-php/gulp-task
```

Then in your recipe you can use the task as follows:

```php
<?php

$recipe = new \Soy\Recipe();

$recipe->component('default', function (\Soy\Gulp\RunTask $gulpTask) {
    $gulpTask
        ->setTask('scss')
        ->run();
});

return $recipe;
```
