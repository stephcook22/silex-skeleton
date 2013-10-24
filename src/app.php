<?php
require_once __DIR__.'/bootstrap.php';

$app->get('/', function() use($app) { 
                    return 'Hello '; 
            });

$app->mount(
'/',
new Bob\Route\NewPageControllerProvider()
);


$app->run(); 
