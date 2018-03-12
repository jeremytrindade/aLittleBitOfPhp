<?php

$num1 = '1';
$num2 = 1;

if ($num1===$num2) // compare value and data type
{
	echo 'Equal.';
}
	else
	{
		echo 'Not equal.';
	}
/*
.............
+
-
*
/

.............
modulus

++

--

...........
&& is AND
|| is OR
=== if for compare value and data type
*/

/* 1
$number1 = 10;

$number1 = $number1 + 2; //is the same than $number1 += 2;

echo $number1;
*/

/* 2
$text = 'Hello';

$text .= ' World.';

echo $text;
*/

/* 3
$number1 = 10;
$number2 = 10;

if($number1>=$number2) //!= and <> is the same and all mean is diferent
{
	echo 'Yes.';
}
	else 
	{
		echo 'No.';
	}

*/

/* 4.1
$number1 = 100;
$number2 = 50;
$number3 = 2;

$result = ($number1 + $number2) / $number3;

echo $result;
*/

/* 4.2
$number1 = 10;
$number2 = 3;

$result = $number1%$number2;

echo $result;
*/

/* 4.3
$number1 = 10;

$number1++;

echo $number1;
*/

/* 4.4
$number = 750;

$upper = 1000;
$lower = 500;

if ($number <= $upper && $number >= $lower)
{
	echo 'Ok.';
}
	else
	{
		echo 'Number must be between '.$lower.' and '.$upper.', inclusive.';
	}
*/

/* 4.5
$number = 10;

$canbe1 = 2;
$canbe2 = 4;

if (!($number==$canbe1)&&!($number==$canbe2))
{
	echo 'Ok.';
}
	else
	{
		echo 'Not ok.';
	}
*/

?>