<?php 
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
include_once('login.php'); // Include Login Script
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Form with Session</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="../scripts/crypt/aes.js"></script>
<script src="../scripts/crypt/pbkdf2.js"></script>
<script>
	var salt = CryptoJS.lib.WordArray.random(128/8); 
	var key256Bits500Iterations = CryptoJS.PBKDF2("Secret Passphrase", salt, { keySize: 256/32, iterations: 500 });
	var iv  = CryptoJS.enc.Hex.parse('101112131415161718191a1b1c1d1e1f'); // just chosen for an example, usually random as well

	var encrypted = CryptoJS.AES.encrypt("Message", key256Bits500Iterations, { iv: iv });  
	var data_base64 = encrypted.ciphertext.toString(CryptoJS.enc.Base64); 
	var iv_base64   = encrypted.iv.toString(CryptoJS.enc.Base64);       
	var key_base64  = encrypted.key.toString(CryptoJS.enc.Base64);
</script>

</head>
 
<body>
<h1>PHP Login Form with Session</h1>
<div class="loginBox">
<h3>Login Form</h3>
<br><br>
<form method="post" action="">
<label>Username:</label><br>
<input type="text" name="USERNAME" placeholder="username" /><br><br>
<label>Password:</label><br>
<input type="password" name="PASSWORD" placeholder="password" />  <br><br>
<input type="submit" name="SUBMIT" value="Login" /> 
</form>
<div class="error"><?php echo $error;?></div>
</div>
</body>
</html>
