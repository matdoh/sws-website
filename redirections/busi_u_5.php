<!DOCTYPE html>

<html>
	<?php
		session_start();
		$_SESSION["busi"] = 5;
		header('Location: ' . '../unternehmen_unterseite.php');
	?>
</html>