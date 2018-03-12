<?php

$string = 'abcdefghijlmnop0123456789';
$string_shuffled = str_shuffle($string);
echo 'Here you have all string:<br>'.$string_shuffled.'<br>';
$half = substr($string_shuffled, 0, strlen($string)/2);
echo 'Here you have half of this string:<br>'.$half.'<br>';
$half2 = substr($string_shuffled, 0, 8);
echo 'Here you have 8 letters of this string:<br>'.$half2.'<br>';
$string_reversed = strrev($string);
echo 'Here you have all string reversed:<br>'.$string_reversed;

$string_one = 'This is my essay. I\m going to be talking about php.';
$string_two = 'This is my essay. I will be talking about the subject php.';
similar_text($string_one,$string_two,$result);
echo '<br><br> Now I wrote 2 strings and that function will show the percentage of his similarity.
<br>The similarity between is,'.$result;

echo '<br><br>';

$string = 'This is an example string.';
$string_length = strlen($string);

echo $string_length;
echo'<br><br>';
$string = ' This is an example string. ';
$string_trimmed = trim($string);//rtrim is for right side and ltrim is for left side.
echo 'Here the function will trim left and right side of the string:<br>'.$string_trimmed;

echo'<br><br>';

$string = 'This is a <img src="image.jpg"> string.';
$string_slashes = htmlentities(addslashes($string));
$string_woslashes = htmlentities($string);
echo 'Here you can see HTML CODE in the page.<br>';
echo 'Now with slashes.<br>'.$string_slashes;
echo '<br>And now without slashes.<br>'.stripslashes($string_slashes);
echo '<br>And here to.<br>'.$string_woslashes;
/*1.1

$string = 'This is an example string & this is a tutorial .';
$string_word_count = str_word_count($string, 0, '&.');
// 0 = number of words, 1 = number and which words and 2 = the word and his position.

echo $string_word_count.'<br>';

print_r($string_word_count);
*/

?>