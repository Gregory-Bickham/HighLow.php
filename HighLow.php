<?php

$theNumber = mt_rand(1, 100);

echo ("$theNumber");

do{ 
	fwrite(STDOUT, 'What is your first name? ');


} while($guess != $theNumber)