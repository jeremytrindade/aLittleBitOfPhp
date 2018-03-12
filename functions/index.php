<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip () {
	global $user_ip; // global is for use all variables in the program. and used because if i need him out of this function i need declare him again so...
	$string = 'Your IP address is: '.$user_ip;
	echo $string;
}

echo_ip();

/* 3.2
function add ($number1, $number2){
	$result = $number1 + $number2;
	return $result;
}
function divide ($number1, $number2){
	$result = $number1 / $number2;
	return $result;
}

$sum = divide (add(10,10), add(5,5));
echo $sum;
*/

/* 3.1

function add ($number1, $number2){
	$result = $number1 + $number2;
	return $result;
}

echo add (10,10)+100; //we need echo because if we don't use him the operation is done but we can't see the result
*/

/*2.2

function displayDate ($day, $date, $year){
	echo $day.' '.$date.' '.$year;
}

displayDate ('Monday',31,2011);
*/

/* 2.1
$inumber1 = 10;
$inumber2 = 5;

function add($number1, $number2){
	echo $number1 + $number2;
}

add($inumber1, $inumber2);
*/

/* 1
function myname() {
	echo 'Jérémy';
}

echo 'My name is ';
myname();
*/

?>