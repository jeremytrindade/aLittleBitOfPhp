<form action="post">
    
    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

$_POST['busca'] = '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';

if (isset($_POST['busca'])) {

    //echo strip_tags($_POST['busca'], "<strong><a>");//sempre que for tag ele "elimina" mas podemos deixar fazer algumas e para isso temos de deixar depois da variavel como esta para o STRONG e para o A

    echo htmlentities($_POST['busca']);//converte em entidade html
}

?>