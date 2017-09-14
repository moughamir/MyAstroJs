<?php
/**
 * Communication des prospects à Hamedia
 * Created on : 13 septembre 2017
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */
class APIHamedia {
    
    const BASE_URL = 'https://app.leadfox.co/service/';
    const GET = 'GET';
    const POST = 'POST';
    const PATCH = 'PATCH';
    
    private function request ($method, $url, $data = array())
    {
        $topost = http_build_query(array_merge( $data, [
            'key' => '6638b9df5b04aff3163cca96a63f3282',
            'secret' => '51f7941f81ac1b9eb840564b831af4b1d116168664d72b403852d01a04845841'
        ]));

        // create cURL connection
        $curl_connection = curl_init();
        curl_setopt($curl_connection, CURLOPT_URL, $url);
        if(!empty($topost)){
            curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $topost);
        }
        if(getenv('MYASTRO_CURL_NOSSL')){
            curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        }
        curl_setopt($curl_connection, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_FAILONERROR, true);
        
        if($method == $this::POST){
            curl_setopt($curl_connection, CURLOPT_POST, 1);
        } elseif($method == $this::PATCH){
            curl_setopt($curl_connection, CURLOPT_CUSTOMREQUEST, 'PATCH');
        }
        
        // perform our request
        $result = curl_exec($curl_connection);
        
        // catch error
        if(curl_error($curl_connection)){
            $result = curl_error($curl_connection);
        }

        // close the connection
        curl_close($curl_connection);
        
        return json_decode($result);
    }
    
    public function insertUser($data)
    {
        $url = $this::BASE_URL.'contact/save/';
        
        return $this->request($this::POST, $url, $data);
    }
}