<?php
/**
* redirect 
* @param $argv
* Argument variable for where link should be redirected
*/
function redirect($argv){
	header('Location:'.$argv);
}

/**
* better_crypt
* @param $input  -> Users password to encrypt
* @param $rounds -> Blowfish rounds in a range of 1 -30.
*/
function better_crypt($input, $rounds = 7){
    $salt = "";
    $salt_chars = array_merge(range('A','Z'), range('a','z'), range(0,9));
    for($i=0; $i < 22; $i++) {
      $salt .= $salt_chars[array_rand($salt_chars)];
    }
    return crypt($input, sprintf('$2a$%02d$', $rounds) . $salt);
}