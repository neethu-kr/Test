<?php
$app->post("/Uploadfile",function($request,$response){

    $data= $request->getParsedBody();
    $files=$request->getUploadedFiles();
     $newimage=$files['profilephoto'];
     if($newimage->getError()===UPLOAD_ERR_OK){

     $uploadFilename=$newimage->getClientFilename();
     $type=$newimage->getClientMediaType();
     $name=uniqid('img-'.date('Ymd').'-');
     $name.=$newimage->getClientFilename();
     //$imgs[]=array('url'=>'/Photos/'.$name);
     $whitelist=array('127.0.0.1','::1');

  if(!in_array($_SERVER['REMOTE_ADDR'],$whitelist))
    {
     $newimage->moveTo("c:/xampp/htdocs/Test/public/Photos/$name");
}
   else{
        $newimage->moveTo("c:/xampp/htdocs/Test/public/Photos/$name");
}

    $photoURL=" http://localhost:9090/public/Photos/$name";
    return $response->withJson($photoURL,200);
}
}); 