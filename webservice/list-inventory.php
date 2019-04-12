<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../classes/connection.php');
require_once('../classes/inventory_class.php');

$test_data = new inventory_class();
$list_data = $test_data->list_inventory();
echo json_encode($list_data);
?>
