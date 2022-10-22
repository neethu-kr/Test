<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/hello/{name}/{phone}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $phone = $args['phone'];
    $response->getBody()->write("Hello, $name,Your phone number is $phone");

    return $response;
});
