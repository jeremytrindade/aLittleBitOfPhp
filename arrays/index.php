<?php

//1 5 10 20
$food = array('Pasta', 'Pizza', 'Salad', 'Vegetables');

echo 'Here i will see the position 1 on the array.<br>'.$food[1].'<br>';
echo '<br>Now this is all array.<br>';
print_r($food);
$food[4]='Fruit';
echo'<br>';
print_r($food);

echo'<br><br>';

$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150, 'Vegetables'=>50);
print_r($food);

?>