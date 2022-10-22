<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->post('/insert/sample', function (Request $request, Response $response, array $args) {
  $data=$request->getParsedBody();
  $input=[];
  $input['name']=filter_var($data['name'],FILTER_SANITIZE_STRING);
  $input['phone']=filter_var($data['phone'],FILTER_SANITIZE_STRING);
    $response->getBody()->write("Hello,". $input['name'].",Phone ". $input['phone'] );
});

$app->post('/jsontest/{firstname}/{lastname}', function (Request $request, Response $response, array $args) {
    $firstname = $args['firstname'];
    $lastname = $args['lastname'];
    $out=[];
    $out['status']="200";
    $out['message']="This is JSON Response Test";
    $out['firstname']=$firstname ;
    $out['lastname']=$lastname ;
    $response->getBody()->write(json_encode($out));
  });