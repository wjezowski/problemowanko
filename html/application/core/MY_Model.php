<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    const DATABASE_PORT = 8095;

    protected function getByCurl(string $url, string $port, string $endPoint): array {
        $ch = curl_init("$url:$port/$endPoint");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        //execute post
        $result = curl_exec($ch);
        var_dump(curl_error($ch));
        //close connection
        curl_close($ch);

        return json_decode($result);
    } 
}