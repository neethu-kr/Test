<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/requestTest/{name}', function (Request $request, Response $response, array $args) {
    
    $out=[];
    $out['method']=$request->getMethod();
    $out['content']=$request->getContentType();
    $out['mediaType']=$request->getMediaType();
   // $out['isget']=$request->isGet();
   $out['port']=$request->getUri()->getPort();
   $out['host']=$request->getUri()->getHost();
   $out['Body Data']=$request->getParsedBody();
   $out['isXhr']=$request->isXhr();
   $out['Request Name']=$request->getAttribute('name');




    $Headers=$request->getHeaders();
    $I=-1;
    foreach ($Headers as $key=>$value){
        $out[$key]= $key .":". implode(",", $value);

    }
    $response->getBody()->write(json_encode($out));

  });