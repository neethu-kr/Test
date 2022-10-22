<?php

$app->add(function($request,$response,$next){

    $response->getBody()->write("before");
    $response=$next($request,$response);
    $response->getBody()->write("after");
    return $response;

});