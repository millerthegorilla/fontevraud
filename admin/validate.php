<?php

function createPasswordHash($strPlainText) {

  if (CRYPT_SHA512 != 1) {
	 
    throw new Exception('Hashing mechanism not supported.');
  }
 
  return crypt($strPlainText, '$6$rounds=4567$abcdefghijklmnop$');
 
}


function validate($strPlainText, $strHash)
{
 
  if (CRYPT_SHA512 != 1) {
    throw new Exception('Hashing mechanism not supported.');
  }
 
  return (crypt($strPlainText, $strHash) == $strHash) ? true : false;
}

function decrypt()
{
	$encrypted = base64_decode("data_base64"); // data_base64 from JS
	$iv        = base64_decode("iv_base64");   // iv_base64 from JS
	$key       = base64_decode("key_base64");  // key_base64 from JS

	$plaintext = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_128, $key, $encrypted, MCRYPT_MODE_CBC, $iv ), "\t\0 " );
}
?>
