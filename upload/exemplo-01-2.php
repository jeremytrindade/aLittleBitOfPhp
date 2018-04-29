<!DOCTYPE html>
<html>
<head>
<title>Upload de Arquivos</title>
</head>
<body>
<!--
enctype permite informa o tipo de informação que está enviando
-->
<form method="POST" enctype="multipart/form-data">
<input type="file" name="fileUpload">
<button type="submit">Enviar</button>
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){

$file = $_FILES["fileUpload"];

if($file["error"]){
throw new Exception("Erro:".$file["error"]);
}

$dirUploads="uploads";

if(!is_dir($dirUploads)){

mkdir($dirUploads);
} 

if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){

echo "Upload realizado com sucesso!!!";

}else{
throw new Exception("Não foi possível realizar upload!");

}
}

 ?>