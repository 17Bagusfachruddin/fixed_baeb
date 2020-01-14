<?php
session_start();

if(!ISSET($_SESSION['id']))
	{
		session_start();
		echo "<script>window.location = 'login.php';</script>";
	}
	

?>