<?php

$recipe = new \Soy\Recipe();

$recipe->component('default', function (\Soy\Gulp\GulpTask $gulpTask) {
    $gulpTask
        ->setTask('scss')
        ->addArgument('--type local')
        ->setVerbose(true)
        ->run();
});

return $recipe;
