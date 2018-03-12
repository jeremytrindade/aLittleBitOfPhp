<?php

$string = 'This is a string';

if (preg_match('/ /', $string)){
	echo 'Match found.';
	}else {
		echo 'Match not found.';
	}

?>