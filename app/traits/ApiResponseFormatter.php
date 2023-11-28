<?php

namespace app\traits;

//untuk formatting response
trait ApiResponseFormatter{
    public function apiResponse($code = 200,$message = "success",$data = []){

        //dari parameter akan di format menjadi seperti dibawah ini
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data,

        ]);
    }
}