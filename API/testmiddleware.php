<?php

$test=function($request,$response,$next){
    $response->getBody()->write("my secure middleware");
    $response=next($request,$response);
    return $response;

};

$app->get('/testmiddleware',function($request,$response,$next){

    
    $response->getBody()->write("route function");
   

});


//middlewareclass
$app->get('/withmiddleclass',function($request,$response,$next){

    
    $response->getBody()->write("route function with midde class ");
   

})->add(new middlewareClass());
