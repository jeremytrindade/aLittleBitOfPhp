<?php

$cep = "01310100";

$link = "https://viacep.com.br/ws/01310100/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//1 quer dizer que quer 0 quer dizer que não quer receber.

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);// neste caso é para não ter que ter obrigatoriamente o ssl, ou seja, https

$response = curl_exec($ch);

$data = json_decode($response, true);

print_r($data/*["localidade"]*/);

?>