<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../classes/connection.php');
require_once('../classes/inventory_class.php');

$form_data = $_REQUEST;
$test_data = new inventory_class();
$remove_data = $test_data->approve_inventory($form_data);
echo json_encode($remove_data);
?>
