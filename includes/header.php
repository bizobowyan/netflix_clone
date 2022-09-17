<?php 

require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/VideoProvider.php");
require_once("includes/classes/User.php");


if (!isset($_SESSION['userLoggedIn'])) {
	header("Location: login.php");
}

$userLoggedIn = $_SESSION['userLoggedIn'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NetFlix</title>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">
	<script src="assets/js/jquery-3.5.1.js"></script>
	<script src="https://kit.fontawesome.com/a4207300fd.js" crossorigin="anonymous"></script>
	<script src="assets/js/script.js"></script>
</head>
<body>

	<div class="wrapper">

<?php 

	if (!isset($hideNav)) {
		include_once("includes/navBar.php");
	}

?>
		
	
	
