<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('../classes/connection.php');
require_once('../classes/inventory_class.php');

$form_data = $_REQUEST;
$test_data = new inventory_class();
$add_data = $test_data->add_inventory($form_data);
// print_r($add_data); die;
echo json_encode($add_data);
?>
