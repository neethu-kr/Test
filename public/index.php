<?php
require '../vendor/autoload.php';
$conf=[
    'settings'=>[
        'displayErrorDetails'=>true,
      ],
];
$c=new \Slim\Container($conf);
$app = new \Slim\App($c) ;
require '../lib/middlewareClass.php';
//require '../src/middleware.php';
require '../API/others.php';
require '../API/putdet.php';
require '../API/request.php';
require '../API/response.php';
require '../API/Uploadfile.php';
require '../API/testmiddleware.php';

$app->run();

