<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->put('/testput', function (Request $request, Response $response, array $args) {
    $data=$request->getParsedBody();
    $username=$data['username'];
    $password=$data['password'];
    $response->getBody()->write("$username and password $password" );
  });

