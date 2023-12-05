<?php
require '../core/config.php';

		$id = $_GET['id'];
		mysql_query("DELETE FROM `postss` WHERE id='$id'")or die(mysql_error());
		header("Location:profile.php");

?>
