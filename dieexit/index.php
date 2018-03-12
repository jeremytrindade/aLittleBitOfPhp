<?php

//@ is for only apear that if not connect and don't show ERROR.....
@mysql_connect('ba','','') or die ('Could not connect to database.');

echo 'Connected!';

/*
echo 'Hello ';

//die(); or exit(); is for kill all page next.

echo 'World';
*/

?>