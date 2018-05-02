<?php

$email = $_POST["inputEmail"];

//var_dump($_POST);

$ch = curl_init();
//https://www.google.com/recaptcha/admin#site/341228656?setup
curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "secret"=>"6LdwvFYUAAAAACZEfgnGxLyOWmVrLvDc7j3_2-09",
    "response"=>$_POST["g-recaptcha-response"],
    "remoteip"=>$_SERVER["REMOTE_ADDR"]
)));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

//var_dump($recaptcha);

if($recaptcha["success"] === true){
    echo "OK: ".$_POST["inputEmail"];
} else {
    header("Location: exemplo-04.php");
}

?>
