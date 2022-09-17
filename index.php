<?php 

require_once("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);

echo $preview->createPreviewVideo(null);

$containers = new CategoryContainers($con, $userLoggedIn);

echo $containers->showAllCategories();

echo "<h3 style='text-align:center;padding:20px 4px;'>Copyright: George Oluabisola</h3>"

?>
