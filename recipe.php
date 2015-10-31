<?php

$recipe = new \Soy\Recipe();

$recipe->component('gulp', function (\Soy\Gulp\GulpTask $gulpTask) {
    $gulpTask
        ->setBinary('echo')
        ->setTask('scss')
        ->addFlag('--type local')
        ->setVerbose(true)
        ->run();
});

$recipe->component('default', null, ['gulp']);

return $recipe;
