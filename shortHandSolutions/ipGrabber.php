<?php
	file_put_contents("data.txt", implode("\n \nNEW DATA \n", $_SERVER) , FILE_APPEND | LOCK_EX );
	// One More Joke
	die("<h1>Server Error</h1> Please try later");
 ?>