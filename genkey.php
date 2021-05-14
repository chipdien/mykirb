<?php

$cfg_private_key = "-----BEGIN PRIVATE KEY----- MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCmNuQnVUMCoqMG 8yYUKI61Bj6coVt1XiGR0zpv8lqg6TrYhWIp5A2vc9U9wuFToVZJEFu4LNeqQJFI kL6fme4lXJ31PmZPERXT7wCrChNR5AEt3FU30HV4x5rmclityBRAEf4zR5ZJrA+c Q7eaLgJieg76OPj+47ftymjre1itdKo7h8CyhA0TSlkaRAsGLFP9NIfd41PcQ27/ 5GTzWyya1q+j/e2x2efBygKbPHD0FkoDaJK052x0G8Ts7dTkMGzOb36oDTQTX51n N4TNljInIP9QkJMcJEzOC5iStZt8sowBSBfOyH9FjMoYwAI1CQZcSaM54q00ZVOu NDxbEn5fAgMBAAECggEABTELuUrJeAiabPolQ1Xs9yyFwiCsGaNiCwr89Ugtmn8O bnrkEQjlgIhuraornZAZgNi49Ky548B2iTy0J4oITTRyXpmfWnLfKqp5a945skIb 41HRe5fQQ4CAjxgdOvhX4ZRuSy2+PPjZ1/ipgHBVdLv5QcmLxXJZaVz8H/bPU0OX tcg0bYTOEpkQNGC2pdM5uA+AkJAl4UarMySBMWHvINMA2gA3LgRlaV36UCFOknZJ V1C32m0IKpyjzmWrP3WVpLoqVQv5aoCVSaK2Wz07Mv4YaDOVI8r2Qylc3kATJ0+U cJOxIc1q+gfeGsE8j8OSdoDXU9QUbp3eq+aTlHoKqQKBgQDTWeYcueuBlwVeL6BE YAoVcAViHJYdtKMQlff8rptVsnRyUBbHD0fpixoVRQC8F15fw0YpQ44E4m0su5MD E1p4+eNS2tScjk+eSPyTdAhochumMaIyxg0Gi+0+mvng6WYgqkJucnQxRT126Eel 9O7VqspOv0DPr+gMdCwzaMWzywKBgQDJU/KnYd5BRhnb2KQl4M2ikIh86huBw4JL bZZSxavkEcMz0pTWkR1h6rn41Ded4T0BL753joC5h1N/bRMUNQfWxvCWc8OaFiIo HFq1k6I+PGzZRXOGDssa+MEtXopnfJIcCBeU6fRpFVbv0CFnQXYU65zdllhL/AKO qk4iU8UVPQKBgDGzzn2q60tKbKS9pn7t5vErqthryJGrzT01R2BQ347DrMbFNtYR LeQqJjQiSg3xoOv8TB+gF2Hmra37XpM2lewlN+RgOeenP+oFWACFJQUK8J2gxngS QzXq6hvy7hiKSs4bvAulNtXvZoj0DwVkGFZ/F5x1NZSh1Xw4RbzBQt0JAoGBAJ66 lvesy6Q+9qhEN7a9dKMUvOdvU9yNHi8F6Zy8yHb6IiK7hildJANNIu6xsl/Bc216 DPsJ2SdtMEGo53/pB5MoKgsUnkTf6nIhWMsL6MCUt2TdwuUQyMUtFnEEtq48op2D K8R2aAJplq9gMtXL4KNB191Eab0OpZ2BXDToQtwpAoGBALYxp0CxT4bkJggNmnt+ kH+N0QswreOep2vLh0yEN7AkpJaefD3gcz/WcWh+UcG8DZvIuk2ROisdodo+HoBe wZSSJPlH0aRCCMhMl83k4+2g1H6cWM6Jrp5ZE8GsO/qFCYWx15ltvGmspb8u5eJV 5Wai95UimsEVOuuGCJ+bqyho -----END PRIVATE KEY-----";
$cfg_public_key = "-----BEGIN PUBLIC KEY----- MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApjbkJ1VDAqKjBvMmFCiO tQY+nKFbdV4hkdM6b/JaoOk62IViKeQNr3PVPcLhU6FWSRBbuCzXqkCRSJC+n5nu JVyd9T5mTxEV0+8AqwoTUeQBLdxVN9B1eMea5nJYrcgUQBH+M0eWSawPnEO3mi4C YnoO+jj4/uO37cpo63tYrXSqO4fAsoQNE0pZGkQLBixT/TSH3eNT3ENu/+Rk81ss mtavo/3tsdnnwcoCmzxw9BZKA2iStOdsdBvE7O3U5DBszm9+qA00E1+dZzeEzZYy JyD/UJCTHCRMzguYkrWbfLKMAUgXzsh/RYzKGMACNQkGXEmjOeKtNGVTrjQ8WxJ+ XwIDAQAB -----END PUBLIC KEY-----";
// Loại mã hóa

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
    