<?php
class middlewareClass{
    public function __invoke($request,$response,$next){

    
        $response->getBody()->write("this is middlwrse");
        $response=$next($request,$response);
        return $response;

}
}