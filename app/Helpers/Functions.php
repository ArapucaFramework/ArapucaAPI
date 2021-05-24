<?php

namespace App\Helpers;

class Functions{

    public function __construction()
    {
        # code...
    }

    public function response( $tf, $message, $http_status = null, $data = null){
        header("Access-Control-Allow-Origin: *");
        header('Content-Type:application/json');
        switch ($http_status) {
            case 200:
                header("HTTP/1.1 200 ok");
            break;
            case 404:
                header("HTTP/1.1 404 error");
            break;
        }
        // $json = [
        //     'response' => $tf,
        //     'message' => $message,
        //     'data' => $data,
        //     'filename'=> $filename
        // ];
        // echo json_encode($json, JSON_UNESCAPED_SLASHES);
        echo json_encode( array('response' => $tf, 'message' => $message, 'data' => $data));
    }
}