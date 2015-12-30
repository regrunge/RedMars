<?php
/**
 * Created by PhpStorm.
 * User: elvissalaris
 * Date: 29/12/15
 * Time: 23:33
 *
 * Crypto C#/PHP from http://www.codingvision.net/security/c-php-compatible-encryption-aes256
 */

class Cryptography {
    private $cryptoKey;

    function SetCryptoKey($pkey){
        $this->cryptoKey = $pkey;
    }

    function GetCryptoKey(){
        return $this->cryptoKey;
    }

    function Encrypt($text){
        $key = $this->GetCryptoKey();
        $IV = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_RAND);

        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_CBC, $IV)."-[--IV-[-".$IV);
    }

    function Decrypt($text){
        $key = $this->GetCryptoKey();
        $text = base64_decode($text);
        $IV = substr($text, strrpos($text, "-[--IV-[-") + 9);
        $text = str_replace("-[--IV-[-".$IV, "", $text);

        return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_CBC, $IV), "\0");
    }
}