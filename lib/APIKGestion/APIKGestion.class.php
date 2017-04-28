<?php
/**
 * Communication des prospects à KGestion
 * Created on : 22 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */
class APIKGestion {
    
    const BASE_URL = 'https://kgestion.kg-com.fr/';
    const GET = 'GET';
    const POST = 'POST';
    const PATCH = 'PATCH';
    
    private function request ($method, $url, $data = array())
    {
        // traverse array and prepare data for posting (key1=value1)
        $post_items = array();
        foreach ($data as $key => $value) {
            $post_items[] = $key.'='.$value;
        }

        // create the final string to be posted using implode()
        $post_string = implode('&', $post_items);

        // create cURL connection
        $curl_connection = curl_init();
        curl_setopt($curl_connection, CURLOPT_URL, $url);
        curl_setopt($curl_connection, CURLOPT_HTTPHEADER, ['apikey: CdF7w445KBlBUt2mjWKVggY2EkOCN4Y9']);
        curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
        if(getenv('MYASTRO_CURL_NOSSL')){
            curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        }
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
        $url = $this::BASE_URL.'client/api/client';
        
        return $this->request($this::POST, $url, $data);
    }
    
    public function updateUser($id, $data)
    {
        $url = $this::BASE_URL.'client/api/client/'.$id;
        
        return $this->request($this::PATCH, $url, $data);
    }
    
    public function registerDRI($id, $data)
    {
        $url = $this::BASE_URL.'client/api/client/dri/'.$id;
        
        return $this->request($this::PATCH, $url, $data);
    }
    
    public function getTracking($id)
    {
        $url = $this::BASE_URL.'client/api/client/tracking/'.$id;
        
        return $this->request($this::GET, $url);
    }
}
