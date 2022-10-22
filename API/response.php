<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app->get('/responseTest', function (Request $request, Response $response, array $args) {
    
    $out=[];
    $newResponse=$response->withStatus(302);
    $out['Get Status']=$newResponse->getStatusCode();
    //$out['content']=$request->getContentType();
    //$out['mediaType']=$request->getMediaType();
   // $out['isget']=$request->isGet();




   $Headers=$request->getHeaders();
   
    foreach ($Headers as $key=>$value){
        $out[$key]= $key .":". implode(",", $value);

    }
   
   $newResponse->GetBody()->write(json_encode($out));
   return $newResponse;
});