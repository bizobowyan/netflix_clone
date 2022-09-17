<?php 

require_once("paypal_php_sdk/autoload.php");

$client_ID = "ASYx33j7aChjskZZpGA5ZOTVQ0QOr3KgR5UVdUB0Db8uj6rl023fkprI_tyOKe1z75sthNTxkmCRqDnk"; //client



$client_Secret = "EHXQCHD6ua5rfjQqXCbNKNpchCOb1G_oWOTBmWko-MvIEO1wo2OggakdbZeE0jzC2plvsSS4xzyvCUGo";    //secret


$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    $client_ID,
    $client_Secret
  )
);

?>