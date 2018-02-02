<?php
/**
 * Communication des prospects à KGestion
 * Created on : 22 juin 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */
class EmailChecker {

    const API_KEY = '153bb694-eaa3-40a2-8b2a-39a7f7df71d5';
    const BASE_URL = 'https://bpi.briteverify.com/emails.json';
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
        if(!empty($post_string)){
            curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
        }
        if(getenv('MYASTRO_CURL_NOSSL')){
            curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        }

        /////////////////////////////////////////////////////////////////////////

        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_FAILONERROR, true);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, 0);

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
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }

        // close the connection
        curl_close($curl_connection);

        return $result;

    }

    public function checkEmail($email)
    {
        $url = $this::BASE_URL.'?address='.$email.'&amp;apikey='.$this::API_KEY;

        return $this->request($this::GET, $url);
    }
}