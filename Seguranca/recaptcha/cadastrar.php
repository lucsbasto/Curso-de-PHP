<?php

$email = $_POST['inputEmail'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'secret'=>"6LfGolEUAAAAAP_qrYT5njQlN9ymevlcJxwZzttl",
    'response'=> $_POST['g-recaptcha-response'],
    'remoteip'=> $_SERVER['REMOTE_ADDR']
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//echo json_encode(curl_exec($ch));
$response = json_decode(curl_exec($ch), true);
if ($response["success"] === true){
    echo "OK: $email";
}
else{
    header("Location: reCaptcha.php");
}
curl_close($ch);
?>