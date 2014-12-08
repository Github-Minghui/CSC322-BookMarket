<?php
	$connect_error ="Sorry, connect failed.";
	mysql_connect('localhost','mysql-ross','123') or die ($connect_error);
	mysql_select_db('mysql-ross') or die ($connect_error);
?>