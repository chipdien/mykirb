<?php


define('OPENSSL_TYPE', 'RSA-SHA256');
$license['email'] = 'chipdien@gmail.com';
$hash = hash('sha256', $license['email'] . 'kwAHMLyLPBnHEskzH9pPbJsBxQhKXZnX');

$data = [
            'license' => 'K3-PRO-'. md5('chipdien.net'),
            'order'   => '20210514001',
            'email'   => hash('sha256', $license['email'] . 'kwAHMLyLPBnHEskzH9pPbJsBxQhKXZnX'),
            'domain'  => 'chipdien.net',
            'date'    => '14/05/2021',
        ];
        
    print_r($data);
    echo '<br><br>';
    print_r(json_encode($data));
        


    //create new private and public key
    $private_key_res = openssl_pkey_new(array(
        "private_key_bits" => 2048,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    ));
    openssl_pkey_export($private_key_res, $private_key_pem);

    $details = openssl_pkey_get_details($private_key_res);
    $public_key_pem = $details['key'];
    
    openssl_sign(json_encode($data), $signature, $private_key_pem, OPENSSL_ALGO_SHA256);

    echo '<br><br>';
    echo $private_key_pem;
    echo '<br><br>';
    echo $public_key_pem;
    echo '<br><br>';
    echo bin2hex($signature);
    echo '<br><br>';


$r = openssl_verify(json_encode($data), $signature, $public_key_pem, 'RSA-SHA256'); //"sha256WithRSAEncryption");
var_dump($r);
    